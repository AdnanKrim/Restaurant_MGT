<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\People;

use Illuminate\Http\Request;

class AbtController extends Controller
{
    public function abtlist(){
        $data= People::all();
        return view('admin.adminabtus',['people'=>$data]);
    }
    public function abtform(){
        return view('admin.adminabtform');
    }
    function addppl(Request $req){
        $req->validate( [
            'name'=> 'required',
            'about'=> 'required',
            'image'=>'required'
        ]);
        $user = new People();
        $user->name= $req->name;
        $user->about = $req->about;
        $file = $req->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('images/upload/', $filename);
        $user->image = $filename;
        $result = $user->save();
        if($result){
            return back()->with('success','you added a People succesfully');
        }
        else{
            return back()->with('Fail','somthing went wrong');
        }
    }
    function aboutedit($id){
        $data = People::find($id);
        return view('admin.updateabt',['about'=>$data]);

    }
    function aboutupdate(Request $req){
        $user = People::find($req->id);
        $user->name= $req->name;
        $user->about = $req->about;
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
            return back()->with('success','you update a people succesfully');
        }
        else{
            return back()->with('Fail','somthing went wrong');
        }
    }
    function aboutdelete($id){
        $data = People::find($id);
        $data->delete();
        return redirect('abtlist')->with('message','people deleted successfully');
    }
}
