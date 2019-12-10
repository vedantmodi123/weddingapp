<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
use Redirect;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // http://unlockdesizn.com/html/wedding/couple-heart/demo/index-multipage2.html
        if(Auth::user()->type == "1"){
            return view('staff.home');
        } else {
            return view('users.home');
        }
        
    }

    public function air()
    {
        
        if(Auth::user()->type == "1"){
            $data = DB::table('air_book')->get();
            $driveLists = DB::table('users')->where('type','=',"3")->pluck('name');

            foreach ($driveLists as $driveList) {
                $drivers[] = $driveList;
            }
            // echo "<pre>";
            // print_r($drivers);
            // die;
            return view('staff.air', ['data' => $data,'drivers' => $drivers]);
        } else {
            $data = DB::table('air_book')
            ->where('user_id', Auth::user()->id)->get();
            return view('users.air', ['data' => $data]);
        }
    }

    public function flight(Request $request)
    {
        $input = $request->all();

        DB::table('air_book')
            ->insert([
                'user_id' => Auth::user()->id, 'flight_no' => $input['flightno'],
                'date' => $input['date'], 'nopeople' => $input['nopeople'], 'val_type' => $input['val_type'],
                'created_at' => date('Y-m-d H:i:s')
            ]);
        return Redirect::route('users.home');
    }
}
