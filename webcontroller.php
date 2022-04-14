<?php 

namespace public\http;

use illuminate\http\request;

class WebController extends Controller
{

    public function index()
    {
        $data =[
            'title' => 'pemetaan',
        ];
        return view('layouts.v_web',$data);
    }

    public function map()
    {
        return view('layouts.map');
    }

}