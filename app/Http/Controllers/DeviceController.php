<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::all();
        return view('device.components', ['devices' => $devices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('device.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'You forgot :attribute'
        ];

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'type' => 'required',
        ],$message);

        Device::create([
            'name'=>$request['name'],
            'brand'=>$request['brand'],
            'type'=>$request['type']
        ]);
        
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        //
    }
}
