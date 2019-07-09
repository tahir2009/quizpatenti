<?php

namespace App\Http\Controllers\Admin;

use App\Feature;
use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index')->with('packages', $packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $features = Feature::all()->groupBy('description');
        return view('admin.package.create')->with('features', $features);
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
            'description' => 'required|string|max:191',
            'price' => 'required|integer',
            'duration' => 'required|integer',
            'feature_descriptions' => 'required|array'
        ]);

        $package = Package::create($request->all());

        foreach ($request->feature_descriptions as $feature_description) {
            $feature_ids = Feature::where('description', $feature_description)->pluck('id');
            $package->features()->attach($feature_ids);
        }

        $alert['type'] = 'success';
        $alert['message'] = 'package created';
        return redirect()->route('package.index')->with('alert', $alert);
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
    public function edit(Package $package)
    {
        $features = Feature::all()->groupBy('description');
        return view('admin.package.edit')->with(['package' => $package, 'features' => $features]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'description' => 'required|string|max:191',
            'price' => 'required|integer',
            'duration' => 'required|integer',
            'feature_descriptions' => 'required|array'
        ]);

        $package->update($request->all());

        DB::table('feature_package')->where('package_id', $package->id)->delete();
        foreach ($request->feature_descriptions as $feature_description) {
            $feature_ids = Feature::where('description', $feature_description)->pluck('id');
            $package->features()->attach($feature_ids);
        }

        $alert['type'] = 'success';
        $alert['message'] = 'package  updated';
        return redirect()->route('package.index')->with('alert', $alert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        $alert['type'] = 'success';
        $alert['message'] = 'package Deleted';
        return redirect()->route('package.index')->with('alert', $alert);
    }
}
