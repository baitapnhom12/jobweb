<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
session_start();
class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {

       
            
                $location=Location::orderby('id_location','desc')->get();
                return view('pages.job')->with(compact('location')); 
            
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
        $job = new Job();
        $job->name_job=$request->name_job;
        $job->quality=$request->quality;
        $job->price=$request->price;
        $job->date=date('Y-m-d H:i:s', strtotime($request->date));
        $job->desc=$request->desc;
        $job->skill=$request->skill;
        $job->id_location=$request->id_location;
        $job->id=$request->id;
        $job->slug_job=$request->slug_job;
        $check_job=Job::get();
        foreach ($check_job as $key => $value) {
            if($value->name_job==$request->name_job){
                return back()->with('fail_job','job trung');
                return false;
            }       
        }
        $job->save();
        return back()->with('insert_job','them moi job');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $selectjob=Job::with('user')->where('id',$id)->orderby('id_job','desc')->get();
        $location=Location::orderby('id_location','desc')->get();
        return view('pages.selectjob')->with(compact('selectjob','location')); 
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job=Job::find($id);
        $location=Location::orderby('id_location','desc')->get();
        return view('pages.editjob')->with(compact('job','location')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job=Job::find($id);
        $job->name_job=$request->name_job;
        $job->quality=$request->quality;
        $job->price=$request->price;
        $job->date=date('Y-m-d H:i:s', strtotime($request->date));
        $job->desc=$request->desc;
        $job->skill=$request->skill;
        $job->id_location=$request->id_location;
        $job->id=$request->id;
        $job->slug_job=$request->slug_job;
        $job->save();
        return back()->with('update_job','cap nhat job');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Job::find($id)->delete();
       Customer::whereIn('id_job',[$id])->delete();
        // if($customer->file_customer){
        //     unlink('public/pdf/'.$customer->file_customer);
        // }
        return back()->with('delete_job','xoa job');
    
    }
}
