<?php

namespace App\Http\Controllers;

use App\Http\Requests\IpRequest;
use App\Models\Ip;
use Laracasts\Flash\Flash;

class IpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data['ips'] = Ip::all();
        return view('ip.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $data['current_ip'] = request()->ip();
        return view('ip.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  IpRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(IpRequest $request){
        $ip = $request->ip; //or any other IP here
        $s = file_get_contents('http://ip2c.org/'.$ip);
        switch($s[0])
        {
            case '0':
                Flash::error('Something went wrong');
                break;
            case '1':
                $ip = Ip::create([
                    'ip' => $request->ip,
                    'response' => $s
                ]);
                $reply = explode(';',$s);
                $message = "IP store successfully. The details of IP [$request->ip]  is: <br> Two Letter:- $reply[1]<br>Three Letter:- $reply[2]<br>Full Name:- $reply[3]";
                Flash::success($message);
                break;
            case '2':
                Flash::error('No record found in database.');
                break;
            default:
                Flash::error('Invalid Data.');
                break;

        }

        return redirect()->route('ip.create');
    }
}
