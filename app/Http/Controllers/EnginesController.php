<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnginesController extends Controller
{
    /**
     * show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     */

    public function index()
    {
        return view("engines");
    }
    public function lubeOil()
    {
        return view("engines/lubeOil");
    }

    public function workshop()
    {
        return view("engines/workshop");
    }
    
    public function cw()
    {
        return view("engines/cw");
    }

    public function hydrolicOil()
    {
        return view("engines/hydrolicOil");
    }

    public function fuelOil()
    {
        return view("engines/fuelOil");
    }

    public function accelerieSystem()
    {
        return view("engines/accelerieSystem");
    }

    public function fans()
    {
        return view("engines/fans");
    }


    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}