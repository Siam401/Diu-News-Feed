<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Post;
use App\Userpost;
use App\Userdiupost;
use App\Diucat;
use App\Diupost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Viewer;
use Session;
use Image;
use Illuminate\Support\Facades\DB;

class ViewerController extends Controller
{
    const UPLOAD_DIR = '/uploads/posts/';
    public function index()
    {
        $cat = Cat::all();
        $diucat = Diucat::all();
        $date = Carbon::now()->format('d M,Y');

        return view('frontend.login',compact('cat','date','diucat'));
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
        $diucat = Diucat::all();
        $date = Carbon::now()->format('d M,Y');

        return view('frontend.register',compact('cat','date','diucat'));

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

    public function viewer_addpost()
    {
        $cat = Cat::all();
        $diucat = Diucat::all();
        $date = Carbon::now()->format('d M,Y');

        return view('frontend.addpost',compact('cat','date','diucat'));
    }

    public function viewer_adddiupost()
    {
        $cat = Cat::all();
        $diucat = Diucat::all();
        $date = Carbon::now()->format('d M,Y');

        return view('frontend.adddiupost',compact('cat','date','diucat'));
    }

    public function addpost(Request $request)
    {
        $data=$request->all();

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->image);
        }
    //    dd($data);
        Userpost::create($data);

        Session::flash('message','Now, Admin will verify your post');

        return redirect(route('viewer.viewer_addpost'));  
    }

    public function adddiupost(Request $request)
    {
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->image);
        }
    //    dd($data);
        Userdiupost::create($data);

        Session::flash('message','Now, Admin will verify your post');

        return redirect(route('viewer.viewer_adddiupost'));  
    }


    public function logout_viewer()
    {
        session()->flush();
        return redirect(route('layouts.index'));
    }


    public function adminviewpost()
    {
        $userposts=Userpost::all();
        // dd($userposts);
        return view('admin.userpost.index',compact('userposts'));
    }
    
    public function adminviewdiupost()
    {
        $userdiuosts=Userdiupost::all();
        // dd($userposts);
        return view('admin.userdiupost.index',compact('userdiuosts'));
    }


    public function approvepost($id)
    {
        $data=Userpost::findOrFail($id);
        
        $post['title']=$data->title;
        $post['content']=$data->content;
        $post['cat_id']=$data->cat_id;
        $post['image']=$data->image;
        $post['tag']=$data->tag;
        $post['author']=$data->author;
        $post['status']=$data->status;
        $post['created_at']=$data->created_at;
        $post['updated_at']=$data->updated_at;
        
        // dd($post);

        Post::create($post);

        $data->delete();


        Session::flash('message','The post has been published');

        return redirect(route('adminviewpost')); 
    }

    public function approvediupost($id)
    {
        
        $data=Userdiupost::findOrFail($id);
        // dd($data);
        $post['title']=$data->title;
        $post['content']=$data->content;
        $post['diucat_id']=$data->diucat_id;
        $post['image']=$data->image;
        $post['tag']=$data->tag;
        $post['author']=$data->author;
        $post['status']=$data->status;
        $post['created_at']=$data->created_at;
        $post['updated_at']=$data->updated_at;
        
        // dd($post);

        Diupost::create($post);

        $data->delete();


        Session::flash('message','The post has been published');

        return redirect(route('adminviewdiupost')); 
    }


    public function destroy($id)
    {
        //
    }

    private function uploadImage($file)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());//formatting the name for unique and readable
        $file_name =  $timestamp.'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize(300, 300)->save(public_path() . self::UPLOAD_DIR . $file_name);
        return $file_name;
    }
    private function unlink($file)
    {
        if ($file != '' && file_exists(public_path() . self::UPLOAD_DIR . $file)) {
            @unlink(public_path() . self::UPLOAD_DIR . $file);
        }
    }
}
