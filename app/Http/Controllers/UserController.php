<?php

namespace App\Http\Controllers;
use App\Mail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        //dd($posts);
        return view('admin.login.profilelist',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('admin.login.addprofile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // dd("text");
        $rules = [
            'name'  => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mails',
            //'role'  => 'required',
            'password' => 'required|string|min:6|confirmed'

        ];

        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // $user = new User();
            //dd(env('MAIL_USERNAME'));
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user['token'] = str_random(25);
            //$user->role = $request->role;
            $user->save();

            \Mail::send('admin.login.confirmation', ['user' => $user], function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Registration Confirmation');
            });
            return redirect('/login')->with('status', 'Confirmation mail has been send Please check your mail');
        }
    }


    public function confirmation($token){
        $user = User::where('token', $token)->first();
        if(!is_null($user)){
            $user->confirmed = 1;
            $user->token = '';
            $user->save();
            return redirect('/login')->with('status', 'Your Activitation is completed');
        }
        return redirect('/login')->with('status','Something went Wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {

        return view('admin.login.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        $user = new User();
        $user->delete();
        return redirect('profile');
    }
}
