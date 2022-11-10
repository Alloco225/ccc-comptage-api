<?php

namespace App\Http\Controllers;

use App\Models\Comptage;
use Illuminate\Http\Request;

class ComptageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Comptage::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comptage  $comptage
     * @return \Illuminate\Http\Response
     */
    public function show(Comptage $comptage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comptage  $comptage
     * @return \Illuminate\Http\Response
     */
    public function edit(Comptage $comptage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comptage  $comptage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comptage $comptage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comptage  $comptage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comptage $comptage)
    {
        //
    }
}
