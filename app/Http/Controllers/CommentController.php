<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        //
        $data= Comments::with(['user'])->orderBy('id','desc')->get();
        return view('admin.comment.allcomment',compact(['data']));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Comments $comments)
    {
        //
    }


    public function edit(Comments $comment)
    {
        //
        return view('admin.comment.editcomment',compact('comment'));
    }


    public function update(Request $request, Comments $comment)
    {
        //
        $rules = [
            'comment'  => 'required',
            'status'  => 'required'
        ];

        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

//            $category = Category::find($id);
            $comment->comment = $request->comment;
            $comment->status = $request->status;
            //dd($cat);
            $comment->save();
            //return redirect('/catlist');
            return redirect('comment');
        }
    }
   
    public function destroy(Comments $comment)
    {

        $comment->delete();
        return redirect('comments');
        //return redirect()-back()->with('success', 'Comment Sucessfully deleted!');
    }
}
