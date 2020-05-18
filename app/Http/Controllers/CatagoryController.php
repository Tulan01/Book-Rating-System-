<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{

   

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    





    public function addcatagory () {


    	return view ('catagory.addcatagory');
    }

    public function storecatagory (Request $request){
     	$validatedData = $request->validate([
     	'catagory_name' => 'required|unique:catagories',
        'catagory_slug' => 'required|unique:catagories',
      
            ]); 
   
     $data=array();
     $data['catagory_name']=$request->catagory_name;
     $data['catagory_slug']=$request->catagory_slug;
     $catagory=DB::table('catagories')->insert($data);
         if($catagory){
         
           $notification=array(
         'massage'=>'Successfully Inserted',
         'alert-type'=>'success'
         );
           //return response()->json($notification);
         return Redirect()->back()->with($notification);
    	}else{
             $notification=array(
         'massage'=>'Something wrong',
         'alert-type'=>'error'
         );
        return Redirect()->back()->with($notification);
    	}

    }
    public function viewcatagory (){

        $catagory=DB::table('catagories')->get();
         return view ('catagory.viewcatagory',compact('catagory'));
    }
    public function deletecatagory ($id){
        $catagory=DB::table('catagories')->where('id',$id)->delete();
        if($catagory){ 
           $notification=array(
         'massage'=>'Successfully Deleted',
         'alert-type'=>'success'
         );
           //return response()->json($notification);
         return Redirect()->back()->with($notification);
        }

    }
    public function editcatagory ($id){
        $catagory=DB::table('catagories')->where('id',$id)->first();
        return view ('catagory.editcatagory',compact('catagory'));
    }
    public function updatecatagory (Request $request,$id){
           $validatedData = $request->validate([
        'catagory_name' => 'required|unique:catagories',
        'catagory_slug' => 'required|unique:catagories',
      
            ]); 
   
     $data=array();
     $data['catagory_name']=$request->catagory_name;
     $data['catagory_slug']=$request->catagory_slug;
     $catagory=DB::table('catagories')->where('id',$id)->update($data);
         if($catagory){
         
           $notification=array(
         'massage'=>'Successfully Updated',
         'alert-type'=>'success'
         );
           //return response()->json($notification);
         return Redirect()->back()->with($notification);
        }else{
             $notification=array(
         'massage'=>'Something wrong',
         'alert-type'=>'error'
         );
        return Redirect()->back()->with($notification);
        }

        
    }
}
