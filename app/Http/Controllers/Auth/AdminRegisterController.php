<?php
namespace App\Http\Controllers\Auth;
use DB;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

    public function showRegisterForm(){
  	
  	 return view ('auth.admin-register');

  }


    public function adminstore (Request $request){

     $validatedData = $request->validate([
     	'name' => ['required','max:255'],
        'email' => ['required','unique:admins','email'],
        'password'=>['required','string','min:8','confirmed'],
      
            ]); 
        
       $data=array();
       $data['name']=$request->name;
        $data['email']=$request->email;
        
      $data['password'] = Hash::make($request->password);
        // return response()->json($data);
       $store=DB::table('admins')->insert($data);

       return redirect()->route('admin.dashboard');

    }
   
}
