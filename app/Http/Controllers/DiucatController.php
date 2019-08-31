<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diucat;


class DiucatController extends Controller
{
    public function index()
    {
        //
        $Diucats = Diucat::all();
        return view('admin.Diucategory.categorylist',compact('Diucats'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Diucategory.createcategory');
    }


    public function store(Request $request)
    {
//        dd("text");
        $data=$request->all();
        Diucat::create($data);

        return redirect('diucat');
    }


    public function show(Diucat $Diucat)
    {
        //dd("text");

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diucat  $Diucat
     * @return \Illuminate\Http\Response
     */
    public function edit(Diucat $Diucat)
    {
        // dd($Diucat);
        //
        return view('admin.Diucategory.edit',compact('Diucat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diucat  $Diucat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diucat $Diucat)
    {
        //
        //dd($Diucat);
        $rules = [
            'name'  => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

//            $Diucategory = Diucategory::find($id);
            $Diucat->name = $request->name;
            //dd($Diucat);
            $Diucat->save();
            //return redirect('/Diucatlist');
            return redirect('Diucat');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diucat  $Diucat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diucat $Diucat)
    {
        //
        $Diucat->delete();
        return redirect('Diucat');
    }
}
