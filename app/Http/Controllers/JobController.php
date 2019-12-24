<?php

namespace App\Http\Controllers;

use App\job;
use Illuminate\Http\Request;

class JobController extends Controller
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
        return view ('admin.job.applyjob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         $array=[
            'job_title'=>$request['job_title'],
            'job_description'=>$request['job_description'],
            'job_qualification'=>$request['job_qualification'],
            'job_vacancy'=>$request['job_vacancy'],
            'job_salary'=>$request['job_salary'],
            'job_experience'=>$request['job_experience'],
            'job_employment_status'=>$request['job_employment_status']
        ];
         

        try{
             Job::create($array);
            //DB::table('sliders')->create($array);

            return back()->with('success',"Successfylly Saved");
        }catch(\Exception $exception){

            //return $exception->getMessage();
            return back()->with('failed',$exception->getMessage());
      
        }
       
        
       
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)

    {
        return view('admin.job.view')->with('result',job::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result= Job::where('job_id',$id)->first();

         return view('admin.job.edit')->with('result', $result);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job $job)
    {
        //return $request->all();

        $array=[
            'job_title'=>$request['job_title'],
            'job_description'=>$request['job_description'],
            'job_qualification'=>$request['job_qualification'],
    
            'job_vacancy'=>$request['job_vacancy'],
            'job_salary'=>$request['job_salary'],
            'job_experience'=>$request['job_experience'],
            'job_employment_status'=>$request['job_employment_status']
        ];
        
        try{
            Job::where('job_id',$request['job_id'])->update($array);

           return back()->with('success',"Successfylly updated");
       }catch(\Exception $exception){

           return back()->with('failed',$exception->getMessage());
     
       }
    }
    public function applicant(){



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try{   
            Job::where('job_id',$id)->delete();

            return back()->with('success',"Successfylly deleted");
        }catch(\Exception $exception){

            return back()->with('failed',$exception->getMessage());
      
        }

    
    }
    }
   

