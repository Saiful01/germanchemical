<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\job;
use App\JobApplicant;
use App\Applicant_Table;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function email(Request $request)
    {

        try {
            $msg = "Email from: " . $request['name'] . "<br> Phone" . $request['phone'] . "<br>  Email: " . $request['email'] . "<br>  Message: " . $request['message'];
            $email = "info@germanchemicalltd.com";

            mail($email, "Mail from German Chemical Website", $msg);

            return back()->with('success', "Successfully Mail Send");
        } catch (\Exception $exception) {
            return back()->with('failed', "There is a problem");
        }
        // the message


    }


    public function apply(){
         
        $result=Job::get();
            return view('pages.career.apply')->with('result',$result);
      
    }

    

    public function jobDetail($id){
         
         $result=Job::where('job_id',$id)->first();
            return view('pages.career.job-detail')->with('result',$result);
      
    }
    public function jobApply($id){
         
         $result=Job::where('job_id',$id)->first();
            return view('pages.career.job-apply')
            ->with('id',$id)
            ->with('result',$result);
      
    }
    
    public function  jobApplicantInsert(Request $request){
         

        //return $request->all();
         $job_id=$request['id'];
        $applicant_array=[
                'app_name'=>$request['app_name'],
                'app_email'=>$request['email'],
                'app_max_edu'=>$request['app_max_edu'],
                'app_phone'=>$request['phone'],
                'app_password'=>$request['app_password'],
             
            ];
try{

    
    $applicant_id=Applicant_table::insertGetId($applicant_array);


    //Todo::insert into JobApplicant Table 
    $job_applicant_array=[
        'job_id'=>$request['id'],
        'applicant_id'=>$applicant_id

    ];

    JobApplicant::create($job_applicant_array);
    return back()->with('success',"Successfylly Saved");


}catch(\Exception $exception){

    return back()->with('failed',$exception->getMessage());

}


      
      
    }
   
}
