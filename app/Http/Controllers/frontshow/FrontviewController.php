<?php

namespace App\Http\Controllers\frontshow;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\People;
use App\Models\Gallery;

use Illuminate\Http\Request;

class FrontviewController extends Controller
{
    public function frontpress(){
        $data = Event::all()->sortByDesc('id');
        return view('frontshow.frontpress',['data'=>$data]);
    }
    public function frontabt(){
        $data = People::all()->sortByDesc('id');
        return view('frontshow.frontabtus',['user'=>$data]);
    }
    public function frontcom(){
        return view('frontshow.frontcommunity');
    }
    public function fronthapp(){
        return view('frontshow.fronthappenings');
    }
    public function fronthsl(){
        return view('frontshow.fronth&l');
    }
    public function frontpvt(){
        return view('frontshow.frontpvtdng');
    }
    public function frontgift(){
        return view('frontshow.frontgiftcard');
    }
    public function frontjob(){
        return view('frontshow.frontjob');
    }
    public function frontcontact(){
        return view('frontshow.frontcontact');
    }
    public function frontgallery(){ 
        $data = Gallery::all()->sortByDesc('id');   
    return view('frontshow.frontgallery',['data'=>$data]);
    }
}
// ,'galleries'=>$galleries,'photos'=>$photos,'pics'=>$pics
