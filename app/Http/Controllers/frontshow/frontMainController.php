<?php

namespace App\Http\Controllers\frontshow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class frontMainController extends Controller
{
    function show(){
        $user=Event::paginate(3);
        return view('frontshow.fronthome',['events'=>$user]);
    }

}
