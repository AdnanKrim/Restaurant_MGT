<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Event;

use Illuminate\Http\Request;

class PressController extends Controller
{

    public function press(){
        $data = Event::all();
        return view('admin.adminpress',compact('data'));
    }
    public function pressform(){
        return view('admin.adminpressform');
    }
     function addEvent(Request $req){
        $req->validate( [
            'level'=> 'required',
            'description'=> 'required',
            'image'=>'required'
    
        ]);
        $user = new Event;
        $user->level= $req->level;
        $user->description = $req->description;
        $file = $req->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('images/upload/', $filename);
        $user->image = $filename;
        $result = $user->save();
        if($result){
            return back()->with('success','you added an Event succesfully');
        }
        else{
            return back()->with('Fail','somthing went wrong');
        }
    }
    function delete($id){
        $data = Event::find($id);
        $data->delete();
        return redirect('press');
    }
    function edit($id){
        $data = Event::find($id);
        return view('admin.updatepressform',['data'=>$data]);

    }
    function update(Request $req){
        $user = Event::find($req->id);
        $user->level= $req->level;
        $user->description = $req->description;
        if($file = $req->file('image')){
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/upload/', $filename);
            $user->image = $filename;
        }
        else{
            unset($user['image']);
        }
        $result = $user->save();
        if($result){
            return back()->with('success','you update an Event succesfully');
        }
        else{
            return back()->with('Fail','somthing went wrong');
        }
    }

    
}
