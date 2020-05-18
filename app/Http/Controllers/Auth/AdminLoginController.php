<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
  public function __construct(){

  	$this->middleware('guest:admin');
  }

  public function showLoginForm(){
  	 return view ('auth.admin-login');
  }

  public function login (Request $request){
  	   // validation 

  	  $this->validate($request,[
            'email'=>'required|email',
            'password'=> 'required|min:6',
  	  ]);
      //attempt to log in
      if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remenber))
      {
       return redirect()->intended(route('admin.dashboard'));
      } 
      else{
      	return redirect()->back()->withInput($request->only('email','remenber'));
      }
  }
}
