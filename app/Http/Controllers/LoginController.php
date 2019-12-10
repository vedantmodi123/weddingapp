<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Hash;
use Auth;
use Redirect;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('login.global');
    }

    public function staff()
    {
        return view('login.staff');
    }

    public function guest()
    {
        return view('login.guest');
    }

    public function postlogin(Request $request)
    {
        $input = $request->all();

        $check = DB::table('users')
            ->where('email', $input['email'])
            ->where('type', $input['u_type'])->first();

        if ($check == '') {
            return Redirect::back();
        }
        if (Hash::check($input['pass'], $check->password)) {
            Auth::loginUsingId($check->id);
            return redirect()->intended('/');
        } else {
            return Redirect::back();
        }
    }

    public function signin()
    {
        if (Session::has('error-block-ref')) {

            Session::forget('error-block-ref');
            Session::save();
        }
        return view('login.create');
    }

    public function postsignin()
    {
        Session::put('error-block-ref', 1);
        Session::save();
        return Redirect::back();
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}
