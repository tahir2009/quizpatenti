<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Country;
use App\License;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SchoolAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school_accounts = Admin::where('type', 'school')->get();
        return view('admin.school_account.index')->with('school_accounts', $school_accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.school_account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email|unique:admins|max:191',
            'password' => 'required|confirmed|string|max:191',
            'package' => 'required|in:free,silver,golden',
            'school_type' => 'required|in:driving,theory,both',
            'latitude' => 'required',
            'longitude' => 'required',
            'display_image' => 'nullable|image',
            'date' => 'required|integer',
            'nationalities' => 'required'
        ]);

        $request['password'] = bcrypt($request->password);
        $request['type'] = 'school';


        $school_account = Admin::create($request->all());
        if ($request->nationalities) {
            if ($request->nationalities[0] == 'all') {
                $country_ids = Country::all()->pluck('id');
                $school_account->nationalities()->sync($country_ids);
            } else {
                $school_account->nationalities()->sync($request->nationalities);
            }
        }
        if ($school_account) {
            $alert['type'] = 'success';
            $alert['message'] = 'school account created';
        } else {
            $alert['type'] = 'danger';
            $alert['message'] = 'school account not created';
        }

        return redirect()->route('school_account.index')->with('alert', $alert);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $school_account)
    {
        $licenses = $school_account->licenses;
        return view('admin.school_account.view')->with(['school_account' => $school_account, 'licenses' => $licenses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $school_account)
    {
        return view('admin.school_account.edit')->with('school_account', $school_account);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $school_account)
    {
        if (!empty($request->name)) {
            $request->validate([
                'name' => 'string|max:191'
            ]);
            $school_account->name = $request->name;
        }
        if (!empty($request->email) and $request->email != $school_account->email) {
            $request->validate([
                'email' => 'email|unique:admins|max:191'
            ]);
            $school_account->email = $request->email;
        }
        if (!empty($request->password)) {
            $request->validate([
                'password' => 'confirmed|string|max:191'
            ]);
            $request['password'] = bcrypt($request->password);
            $school_account->password = $request->password;
        }

        if (!empty($request->package)) {
            $request->validate([
                'package' => 'required|in:free,silver,golden'
            ]);
            $school_account->package = $request->package;
        }
        if (!empty($request->school_type)) {
            $request->validate([
                'school_type' => 'required|in:driving,theory,both'
            ]);
            $school_account->school_type = $request->school_type;
        }
        if (!empty($request->duration)) {
            $request->validate([
                'date' => 'required|integer'
            ]);
            $school_account->duration = $request->duration;
        }


        $school_account->latitude = $request->latitude;
        $school_account->longitude = $request->longitude;
        $school_account->save();

        if ($request->nationalities) {
            if ($request->nationalities[0] == 'all') {
                $country_ids = Country::all()->pluck('id');
                $school_account->nationalities()->sync($country_ids);
            } else {
                $school_account->nationalities()->sync($request->nationalities);
            }
        }

        $alert['type'] = 'success';
        $alert['message'] = 'school account updated';
        return redirect()->route('school_account.index')->with('alert', $alert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $school_account)
    {
        Storage::delete($school_account->image);
        $school_account->delete();
        $alert = [];
        $alert['type'] = 'success';
        $alert['message'] = 'school account Deleted';
        return redirect()->route('school_account.index')->with('alert', $alert);
    }

    public function update_status(Admin $school_account)
    {
        if ($school_account->blocked === 0)
            $school_account->blocked = 1;
        else
            $school_account->blocked = 0;

        $school_account->save();

        return redirect()->back();
    }
}
