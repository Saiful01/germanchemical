<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

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
}
