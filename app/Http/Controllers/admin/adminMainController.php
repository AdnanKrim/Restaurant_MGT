<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Viewer;
use App\Models\Job;
use App\Models\Contact;
use App\Models\Gallery;

use Illuminate\Http\Request;

class adminMainController extends Controller
{
    public function index()
    {
        return view('admin.adminlogin');
    }
    public function admin()
    {
        return view('admin.adminmaster');
    }
    public function reserveList()
    {
        $data = Reservation::all();
        return view('admin.adminreservation', ['reserves' => $data]);
    }
    function addReserve(Request $req)
    {
        $req->validate([
            'peoplenumber' => 'required',
            'date' => 'required'
        ]);
        $user = new Reservation;
        $user->peoplenumber = $req->peoplenumber;
        $user->date = $req->date;
        $user->save();
        return redirect('/')->with('message', 'Reservation Added Successfully');
    }
    public function viewerList()
    {
        $data = Viewer::all();
        return view('admin.adminsignup', ['signs' => $data]);
    }

    function signup(Request $req)
    {
        $req->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required'
        ]);
        $user = new Viewer;
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->email = $req->email;
        $user->save();
        return redirect('/')->with('message', 'Sign up Successfully');
    }
    public function jobList()
    {
        $data = Job::all();
        return view('admin.adminjob', ['jobs' => $data]);
    }
    function jobForm(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phonenum' => 'required',
            'coverletter' => 'required',
            'resume' => 'required'
        ]);
        $user = new Job;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phonenum = $req->phonenum;
        $user->coverletter = $req->coverletter;
        $file = $req->file('resume');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('images/document/', $filename);
        $user->resume = $filename;
        $user->save();
        return redirect()->back()->with('message', 'Your Job Request Successfull');
    }
    public function contactList()
    {
        $data = Contact::all();
        return view('admin.admincontact', ['contacts' => $data]);
    }
    function contactForm(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phonenum' => 'required',
            'inquiry' => 'required',
            'message' => 'required'
        ]);
        $user = new Contact;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phonenum = $req->phonenum;
        $user->inquiry = $req->inquiry;
        $user->message = $req->message;
        $user->save();
        return redirect()->back()->with('message', 'Your contact request submitted Successfully');
    }
    public function photoList()
    {
        $data = Gallery::all();
        return view('admin.admingallery', ['photos' => $data]);
    }
    public function photoform(){
        return view('admin.admingalleryform');
    }
    function addphoto(Request $req){
        $req->validate( [
            'name'=> 'required',
            'image'=>'required'
        ]);
        $user = new Gallery;
        $user->name= $req->name;
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
    function photodelete($id){
        $data = Gallery::find($id);
        $data->delete();
        return redirect('photo-list')->with('message','photo deleted successfully');
    }
    function photoedit($id){
        $data = Gallery::find($id);
        return view('admin.updategallery',['photo'=>$data]);

    }

    function photoupdate(Request $req){
        $user = Gallery::find($req->id);
        $user->name= $req->name;
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
            return back()->with('success','you update a photo succesfully');
        }
        else{
            return back()->with('Fail','somthing went wrong');
        }
    }
}


