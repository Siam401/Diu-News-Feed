<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

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
        $sliders = Slider::all();
        //dd($posts);
        return view('admin.slider.sliderlist',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slider.slidercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Slider $slider)
    {
        //
        // $data=$request->all();
        // dd($data);
        $rules = [
            'title'  => 'required'
        ];

        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $slider->title = $request->title;
            $slider->save();

            if ($request->hasFile('image')) {
                $extension = $request->image->extension();
                $fileName =$slider->id.'.'.$extension;
                $request->image->storeAs('public/images', $fileName);
                $slider->image = $fileName;
                $slider->save();
            }
            return redirect('slider');
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
        //
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
        return view('admin.slider.editslider',compact('slider'));
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
        $rules = [
            'title'  => 'required'
        ];

        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $slider->title = $request->title;
            $slider->save();

            if ($request->hasFile('image')) {
                $extension = $request->image->extension();
                $fileName =$slider->id.'.'.$extension;
                $request->image->storeAs('public/images', $fileName);
                $slider->image = $fileName;
                $slider->save();
            }
            return redirect('slider');
        }
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
