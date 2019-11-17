<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;                          

class SliderController extends Controller
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
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
           
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/slider');
            $image->move($destinationPath, $image_name);
            $array=[
                'slider_name'=>$request['slider_name'],
                'slider_title'=>$request['slider_title'],
                'slider_sub_title'=>$request['slider_sub_title'],
                'slider_image'=>$image_name,
            ];
        }else{
            $array=[
                'slider_name'=>$request['slider_name'],
                'slider_title'=>$request['slider_title'],
                'slider_sub_title'=>$request['slider_sub_title']
            ];
        }
        
         

        try{
            Slider::create($array);
            //DB::table('sliders')->create($array);

            return back()->with('success',"Successfylly Saved");
        }catch(\Exception $exception){

            return back()->with('failed',$exception->getMessage());
      
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.slider.show')->with('result',Slider::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
