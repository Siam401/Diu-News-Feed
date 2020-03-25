<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Diucat;
use App\Post;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Image;
use Nwidart\ForecastPhp\Forecast;

class PostController extends Controller
{
    const UPLOAD_DIR = '/uploads/posts/';

    public function index()
    {
        //

        $posts = Post::all();
        //dd($posts);
        return view('admin.post.postlist',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $cat = Cat::all();

        $posts = Post::all();
        
        return view('admin.post.create',compact('cat','posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post )
    {
        // $data=$request->all();
        // dd($data);

        // $rules = [
        //     'title'  => 'required',
        //     'cat_id' => 'required',
        //     'contentt' => 'required',
        //     'tag'  => 'required',
        //     'status'  => 'required',
        //     'author'  => 'required'
        // ];

        // $validator = \Validator::make($request->all(), $rules);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }else{
//           $post = new Post();
//            $post->title = $request->title;
//            $post->cat_id = $request->cat_id;
//            $post->content = $request->contentt;
//            $post->tag = $request->tag;
//            $post->status = $request->status;
//            $post->author = $request->author;
//            $post->save();

        $data=$request->all();

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->image);
        }
//        dd($data);
        Post::create($data);



        return redirect(url('/post'));

        
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
        $data = Post::all();
        $cat = Cat::all();
        $diucat = Diucat::all();
        $date = Carbon::now()->format('d M,Y');
        $brknews=Post::with('cat')->orderBy('id', 'desc')->first();

        $latest=Post::with('cat')->orderBy('id', 'desc')->take(6)->get();
        $popular=Post::with('cat')->orderBy('count', 'desc')->take(6)->get();
        // $popular=DB::table('posts')->join('cats', 'cats.id', '=', 'posts.cat_id')->orderBy('count','desc')->take(6)->get();

        
        $frontPostByCategory1=DB::table('posts')->join('cats', 'cats.id', '=', 'posts.cat_id')
        ->where('cat_id','1')->first();
        $frontPostByCategory2=DB::table('posts')->join('cats', 'cats.id', '=', 'posts.cat_id')
        ->where('cat_id','2')->first();
        $frontPostByCategory3=DB::table('posts')->join('cats', 'cats.id', '=', 'posts.cat_id')
        ->where('cat_id','3')->first();
        $frontPostByCategory4=DB::table('posts')->join('cats', 'cats.id', '=', 'posts.cat_id')
        ->where('cat_id','4')->take(3)->get();

        $inter_breaking_posts=DB::table('posts')->where('cat_id','4')->get();

        $test = Post::with('cat')->orderBy('id','desc')->where('status','Pin Post')
            ->where('cat_id','2')->take(1)
            ->get();

        $testto = Post::with('cat')->orderBy('id','desc')->where('status','Normal Post')->where('cat_id', '1')->take(4)
            ->get();

        $inter = Post::with('cat')->orderBy('id','desc')->where('status','Normal Post')
            ->where('cat_id', '2')->take(4)
            ->get();

        $sports = Post::with('cat')->orderBy('id','desc')->where('status','Pin Post')
            ->where('cat_id','3')->take(1)
            ->get();

        $sportsin = Post::with('cat')->orderBy('id','desc')->where('status','Normal Post')
            ->where('cat_id', '3')->take(4)
            ->get();


        $science = Post::with('cat')->orderBy('id','desc')->where('status','Pin Post')
            ->where('cat_id','4')->take(1)
            ->get();

        $tech = Post::with('cat')->orderBy('id','desc')->where('status','Normal Post')
            ->where('cat_id', '4')->take(4)
            ->get();

        $slider=Slider::all();
        
          return view('frontend.index',compact('data','latest','brknews','popular','date','cat','diucat','frontPostByCategory1','frontPostByCategory2','frontPostByCategory3','frontPostByCategory4','inter_breaking_posts','slider'));
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
        $diucat = Diucat::all();
        $brknews=Post::with('cat')->orderBy('id', 'desc')->first();

        $popular=DB::table('posts')->orderBy('count','desc')->take(6)->get();
        DB::table('posts')->where('id',$id)->increment('count');
        $date = Carbon::now()->format('d M,Y');
        $cat = Cat::all();
        $inter_breaking_posts=DB::table('posts')->where('cat_id','4')->get();
        $related_id=$post->cat_id;
        $relateds=DB::table('posts')->where('cat_id',$related_id)->take(2)->get();
        $singlepost=Post::findOrfail($id);



//        dd($relateds);
        return view('frontend.single',compact('singlepost','diucat','brknews','inter_breaking_posts','relateds','date','cat','popular'));
    }


    public function categoriesposts($id){
//        $posts=DB::table('posts')->where('cat_id',$id)->get();
        $brknews=Post::with('cat')->orderBy('id', 'desc')->first();
        $popular=DB::table('posts')->orderBy('count','desc')->take(6)->get();
        $date = Carbon::now()->format('d M,Y');
        $diucat = Diucat::all();
        $cat = Cat::all();
        $inter_breaking_posts=DB::table('posts')->where('cat_id','4')->get();
        $categoryposts=Post::where('cat_id',$id)->get();

//        dd($id);
//        dd($posts);
        return view('frontend.categoriesposts',compact('inter_breaking_posts','brknews','diucat','categoryposts','date','cat','popular'));
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $data['categories'] = Cat::all();
        $data['post'] = $post;
        $posts = Post::all();
        return view('admin.post.editpost', $data,compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
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
