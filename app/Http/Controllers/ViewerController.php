<?php

namespace App\Http\Controllers;

use App\Cat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Viewer;
use Session;
use Illuminate\Support\Facades\DB;

class ViewerController extends Controller
{

    public function index()
    {
        $cat = Cat::all();
        $date = Carbon::now()->format('d M,Y');

        return view('frontend.login',compact('cat','date'));
    }

    public function login(Request $request)
    {
        $data=$request->except('_token');
        $email=$data['email'];
        $password=md5($data['password']);
        $result=DB::table('viewers')->where('email',$email)->where('password',$password)->first();
        if(empty($result)){
            Session::flash('message', 'user do not exist !');

            return redirect(route('viewer.index')); 
        }else{
            $viewer_name=$result->viewer_name;
            $viewer_id=$result->id;
            if($result!=null){
            session()->put('viewer_id',$viewer_id);
            session()->put('viewer_name',$viewer_name);

            return redirect(route('layouts.index'));

        }
        
        }


    }

    public function login_index(Request $request)
    {
        $data=$request->except('_token');
        $email=$data['email'];
        $password=md5($data['password']);
        $result=DB::table('viewers')->where('email',$email)->where('password',$password)->first();
        if(empty($result)){
            Session::flash('message', 'user do not exist !');

            return redirect(route('layouts.index')); 
        }else{
            $viewer_name=$result->viewer_name;
            $viewer_id=$result->id;
            if($result!=null){
            session()->put('viewer_id',$viewer_id);
            session()->put('viewer_name',$viewer_name);

            return redirect(route('layouts.index'));

        }
        
        }


    }

    public function registration()
    {

        $cat = Cat::all();
        $date = Carbon::now()->format('d M,Y');

        return view('frontend.register',compact('cat','date'));

    }


    public function registration_store(Request $request)
    {
        $data=$request->except('_token');
        $data['password'] = md5(request()->password);
        $viewer_name=$request->viewer_name;
        $viewer_id=DB::table('viewers')->insertGetId($data);
        Session::put('viewer_id',$viewer_id);
        Session::put('viewer_name',$viewer_name);

        return redirect(route('layouts.index'));
    }


    public function store(Request $request)
    {
        //
    }


    public function logout_viewer()
    {
        session()->flush();
        return redirect(route('layouts.index'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
