<?php

namespace App\Http\Controllers;

use App\SelectedInterns;
use Illuminate\Http\Request;

class SelectedInternsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
     *@param $id
     * @param  \App\SelectedInterns  $selectedInterns
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $res = SelectedInterns::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SelectedInterns  $selectedInterns
     * @return \Illuminate\Http\Response
     */
    public function edit(SelectedInterns $selectedInterns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SelectedInterns  $selectedInterns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SelectedInterns $selectedInterns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SelectedInterns  $selectedInterns
     * @return \Illuminate\Http\Response
     */
    public function destroy(SelectedInterns $selectedInterns)
    {
        //
    }
}
