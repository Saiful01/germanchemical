<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerEng extends Controller
{
    public function home()
    {
        $result = \App\Slider::get();
        return view('welcome')->with('result', $result);
    }
    public function companyintro(){

        return view('pages.company.companyintro');
    }
    public function MFChairman(){

        return view('pages.company.MFChairman');
    }
    public function prd(){

        return view('pages.company.prd');
    }
    public function pr(){

        return view('pages.company.pr');
    }
    public function contact(){

        return view('pages.contact');
    }
    public function desired(){

        return view('pages.career.desired');
    }
    public function hr(){

        return view('pages.career.hr');
    }
    public function recruitment(){

        return view('pages.career.recruitment');
    }
    public function information(){

        return view('pages.career.information');
    }
    public function media(){

        return view('pages.media');
    }
    public function products(){

        $result = \App\Product::get();
        return view('pages.products.products')->with('result', $result);
    }
    public function webmails(){

        return view('pages.webmails');
    }
}
