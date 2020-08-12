<?php

namespace App\Http\Controllers;

use App\jobvacancies;
use Illuminate\Http\Request;
use DB;


class JobvacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = DB::select('select * from jobvacancies');
        return view('job_view',['jobs'=>$jobs]);
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
     * @param  \App\jobvacancies  $jobvacancies
     * @return \Illuminate\Http\Response
     */
    public function show(jobvacancies $jobvacancies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobvacancies  $jobvacancies
     * @return \Illuminate\Http\Response
     */
    public function edit(jobvacancies $jobvacancies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobvacancies  $jobvacancies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobvacancies $jobvacancies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobvacancies  $jobvacancies
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobvacancies $jobvacancies)
    {
        //
    }
}
