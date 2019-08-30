<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use Validator;


class MailController extends Controller
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
        //
        return view('admin.login.registration');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mails',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:mails',
            'password' => 'required|string|min:6|confirmed'

        ];

        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // $user = new User();
             //dd(env('MAIL_USERNAME'));
            $mail = new Mail();
            $mail->name = $request->name;
            $mail->email = $request->email;
            $mail->password = bcrypt($request->password);
            $mail['token'] = str_random(25);
            $mail->save();

            \Mail::send('admin.login.confirmation', ['mail' => $mail], function ($message) use ($mail) {
                $message->to($mail->email);
                $message->subject('Registration Confirmation');
            });
            return redirect('/login')->with('status', 'Confirmation mail has been send Please check your mail');
        }
    }





public function confirmation($token){
        $mail = Mail::where('token', $token)->first();
        if(!is_null($mail)){
            $mail->confirmed = 1;
            $mail->token = '';
            $mail->save();
            return redirect('/login')->with('status', 'Your Activitation is completed');
        }
        return redirect('/login')->with('status','Something went Wrong');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
