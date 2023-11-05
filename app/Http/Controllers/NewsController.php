<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\News;
use Illuminate\Http\Request;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location=Location::orderby('id_location','desc')->get();
        $news=News::orderby('id_news','desc')->get();
        return view('pages.news')->with(compact('news','location'));
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
        $location=Location::orderby('id_location','desc')->get();
        $news=News::find($id);
        return view('pages.detail_news')->with(compact('news','location'));
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
