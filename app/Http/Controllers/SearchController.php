<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location=Location::orderby('id_location','desc')->get();
        $keyword=$_GET['keyword'];
        $job=Job::where('name_job','like','%'.$keyword.'%')->Orwhere('desc','like','%'.$keyword.'%')->orderby('id_job','desc')->get();
        $count = $job->count();
        return view('pages.search')->with(compact('keyword','job','count','location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
