<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\License;
use App\Package;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licenses = License::all();
        return view('admin.license.index')->with('licenses', $licenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $school_accounts = Admin::where('type', 'school')->get();
        $packages = Package::all();

        return view('admin.license.create')->with(['school_accounts' => $school_accounts, 'packages' => $packages]);
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
            'package_id' => 'required|integer',
            'school_id' => 'required|integer',
            'limit' => 'required|integer'
        ]);

        $request['admin_id'] = $request->school_id;
        for ($i = 0; $i < $request->limit; $i++) {
            $request['license'] = mt_rand(100, 999) . '-' . mt_rand(100, 999) . '-' . mt_rand(100, 999);
            $license = License::create($request->all());
        }
        
        $alert = [];
        if ($license) {
            $alert['type'] = 'success';
            $alert['message'] = 'license created';
        } else {
            $alert['type'] = 'danger';
            $alert['message'] = 'license not created';
        }
        return redirect()->route('license.index')->with('alert', $alert);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(License $license)
    {
        return view('admin.license.edit')->with('license', $license);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, License $license)
    {

        $request->validate([
            'mac_address' => 'required|string|max:191'

        ]);
        $license->student()->update([
            'mac_address' => $request->mac_address
        ]);

        $alert = [];
        $alert['type'] = 'success';
        $alert['message'] = 'mac address  updated';
        return redirect()->route('school_account.index')->with('alert', $alert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(License $license)
    {
        $license->delete();
        $alert = [];
        $alert['type'] = 'success';
        $alert['message'] = 'license Deleted';
        return redirect()->route('school_account.index')->with('alert', $alert);
    }
}
