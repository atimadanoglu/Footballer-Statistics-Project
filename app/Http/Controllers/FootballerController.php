<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footballer;

class FootballerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $footballers = Footballer::all();
        return view("footballers.index", compact("footballers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Footballer $footballer)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Footballer $footballer
     *
     */
    public function show(Footballer $footballer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Footballer $footballer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footballer $footballer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Footballer $footballer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footballer $footballer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Footballer $footballer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footballer $footballer)
    {
        //
    }
}
