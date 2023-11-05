<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;
class DetailjobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location=Location::orderby('id_location','desc')->get();
        return view('pages.form')->with(compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer=new Customer();
        if(empty($request->file_customer)){
            $customer->file_customer=$request->file_customer;
        }
        else{
            $file_customer=$request->file_customer; 
            $file_customer_upload=time() . '_' . $file_customer->getClientOriginalName();
            $file_customer->move('public/pdf',$file_customer_upload);
            $customer->file_customer=$file_customer_upload;
        }
        $customer->name_customer=$request->name_customer;
        $customer->email_customer=$request->email_customer;
        $customer->phone_customer=$request->phone_customer;
        $customer->id_job=$request->id_job;
        $customer->save();
        return back()->with('customer','thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $location=Location::orderby('id_location','desc')->get();
        $job=Job::with('location')->find($id);
        return view('pages.detail_job')->with(compact('location','job'));
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
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
