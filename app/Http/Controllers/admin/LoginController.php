<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function check(Request $req){
        $req->validate([
          'email'=>'required|email',
          'password'=>'required|min:5|max:12'
        ]);
        $user = Admin::where('email','=', $req->email)->first();
        if($user){
          if(Hash::check($req->password,$user->password)){
            $req->session()->put('LoggedUser',$user->id);
            return redirect('admin-main');
          }
          else{
            return back()->with('fail','Invalid Password');
          }
        }
        else{
          return back()->with('fail','No Account found for this email');
        }
      }
      function logout(){
        if(session()->has('LoggedUser')){
          session()->pull('LoggedUser');
          return redirect('login');
        }
      }
}
