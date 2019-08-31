<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Diucat;
use App\Diupost;
use App\Post;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Image;
use Nwidart\ForecastPhp\Forecast;

class DiupostController extends Controller
{
    const UPLOAD_DIR = '/uploads/posts/';

    public function index()
    {
        //

        $diuposts = Diupost::all();
//        dd($diuposts);
        return view('admin.diupost.postlist',compact('diuposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cat = Diucat::all();

        $posts = Diupost::all();

        return view('admin.diupost.create',compact('cat','posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post )
    {


        $data=$request->all();

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->image);
        }
//        dd($data);
        Diupost::create($data);



        return redirect(url('/diupost'));


    }


    public function show(Post $post)
    {
        //  $rpost = Post::where('status', 'Pin Post')->get();
        //$post= '$relatedPost';
        //  dd($rpost);

        //$latest = Post::orderBy('desc')->get();
        // dd($latest);
        //return view('layouts.sidebar')->with('latest', $latest);
        // return view('layouts.index',compact('relatedPost'));

    }

    public function home()
    {
        $data = Diupost::all();
        $cat = Cat::all();
        $diucat = Diucat::all();
        $date = Carbon::now()->format('d M,Y');


        $latest=Diupost::with('diucat')->orderBy('id', 'desc')->take(6)->get();
        $popular=Diupost::with('diucat')->orderBy('count', 'desc')->take(6)->get();
        // $popular=DB::table('posts')->join('cats', 'cats.id', '=', 'posts.cat_id')->orderBy('count','desc')->take(6)->get();
//        dd($popular);

        $frontPostByCategory1=DB::table('diuposts')->join('diucats', 'diucats.id', '=', 'diuposts.diucat_id')
            ->where('diucat_id','1')->first();
        $frontPostByCategory2=DB::table('diuposts')->join('diucats', 'diucats.id', '=', 'diuposts.diucat_id')
            ->where('diucat_id','2')->first();
        $frontPostByCategory3=DB::table('diuposts')->join('diucats', 'diucats.id', '=', 'diuposts.diucat_id')
            ->where('diucat_id','3')->first();

        $inter_breaking_posts=DB::table('diuposts')->where('diucat_id','4')->get();

        return view('frontend.diuindex',compact('data','latest','popular','date','cat','diucat','frontPostByCategory1','frontPostByCategory2','frontPostByCategory3','frontPostByCategory4','inter_breaking_posts','slider'));
    }


    public function latest()
    {
        $latest = Post::with('cat')->orderBy('id','desc')->where('status','Normal Post')->take(4)
            ->get();
        return view ('layouts.sidebar',compact('latest'));
    }


    public function slider()
    {
        $latest = Post::with('cat')->orderBy('id','desc')->where('status','Normal Post')->take(4)
            ->get();
        return view ('layouts.index',compact('latest'));
    }



    public function single($id){
        $post=Post::findOrfail($id);
        $popular=DB::table('posts')->orderBy('count','desc')->take(6)->get();
        DB::table('posts')->where('id',$id)->increment('count');
        $date = Carbon::now()->format('d M,Y');
        $cat = Cat::all();
        $inter_breaking_posts=DB::table('posts')->where('cat_id','4')->get();
        $related_id=$post->cat_id;
        $relateds=DB::table('posts')->where('cat_id',$related_id)->take(2)->get();
        $singlepost=Post::findOrfail($id);



//        dd($relateds);
        return view('frontend.single',compact('singlepost','inter_breaking_posts','relateds','date','cat','popular'));
    }


    public function categoriesposts($id){
//        $posts=DB::table('posts')->where('cat_id',$id)->get();
        $popular=DB::table('posts')->orderBy('count','desc')->take(6)->get();
        $date = Carbon::now()->format('d M,Y');
        $cat = Cat::all();
        $inter_breaking_posts=DB::table('posts')->where('cat_id','4')->get();
        $categoryposts=Post::where('cat_id',$id)->get();

//        dd($id);
//        dd($posts);
        return view('frontend.categoriesposts',compact('inter_breaking_posts','categoryposts','date','cat','popular'));
    }

    //public function side()
    // {
    // Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->get();
    // $sidebar = Post::where('cat_id', $post->cat_id)->where('id', '!=', $post->id)->get();
    //$relatedPost = Post::where('cat_id', $post->cat_id)->where('id', '!=', $post->id)->get();
    // dd($sidebar);
    //   $testto = Post::with('cat')->orderBy('id','desc')->where('status','Normal Post')->where('cat_id', '1')
    //   ->get();
    //dd($data);
    //  return view('layouts.index',compact(['testto']));
    // }


// public function weather(){
//         $forecast = new Forecast('6158396b756619681ed516e26fa4818d');
//        $info = $forecast->get('23.8103', '90.4125');

//         $temper = $info['currently'];
//          $temper = $temper['icon'];

// //dd($temper);
//         return view('layouts.index',compact(['test']));
//     }



    public function edit(Post $post)
    {
        //
        $data['categories'] = Cat::all();
        $data['post'] = $post;
        $posts = Post::all();
        return view('admin.post.editpost', $data,compact('posts'));
    }


    public function update(Request $request, Post $post)
    {
        //
        $rules = [
            'title'  => 'required',
            'cat_id' => 'required',
            'contentt' => 'required',
            'tag' => 'required',
            'status' => 'required',
            'author' => 'required'
        ];

        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $post->title = $request->title;
            $post->cat_id = $request->cat_id;
            $post->content = $request->contentt;
            $post->tag = $request->tag;
            $post->status = $request->status;
            $post->author = $request->author;
            $post->save();

            if ($request->hasFile('image')) {
                $extension = $request->image->extension();
                $fileName =$post->id.'.'.$extension;
                $request->image->storeAs('public/images', $fileName);
                $post->image = $fileName;
                $post->save();
            }
            return redirect('post');
        }
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

    public function destroy(Post $post)
    {
        //
    }
}
