<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }




    public function addbook (){
    	$catagory=DB::table('catagories')->get();
    	return view ('book.addbook',compact('catagory'));
    }


    public function storebook (Request $request){


    	$data=array();
    	$data['title']=$request->book_name;
    	$data['author']=$request->author_name;
    	$data['details']=$request->details;
    	$data['catagory_id']=$request->catagory_id;
    	$image=$request->file('image');

    	if($image){
       	$image_name=hexdec(uniqid());
       	$ext=strtolower($image->getClientOriginalExtension());
       	$image_full_name=$image_name.'.'.$ext; 
       	$upload_path='exx/images/';
       	$image_url=$upload_path.$image_full_name; 
       	$success=$image->move($upload_path,$image_full_name);
       	$data['image']=$image_url;
      // 	
       	DB::table('posts')->insert($data);
         $notification=array(
         'massage'=>'Successfully Inserted',
         'alert-type'=>'success'
         );

           $abcd = DB::table('posts')->where('title',$request->book_name)->first(); 
           // return response()->json($abcd);
             $data2=array();
             $data2['catagory_id']=$abcd->id;
             $data2['average']=0;
            DB::table('ratings')->insert($data2);
                  
        return Redirect()->back()->with($notification);


       }else{
       //	DB::table('posts')->insert($data);
       	 $notification=array(
         'massage'=>'Successfully Inserted',
         'alert-type'=>'success'
         );
         return Redirect()->back()->with($notification);
       }

    }
    public function viewpost ($id){
         $book=DB::table('posts')
                 ->join('catagories','posts.catagory_id','catagories.id')
                 ->select('posts.*','catagories.catagory_name','catagories.catagory_slug')
                 ->where('posts.id',$id)
                 ->first();
          return view ('book.viewbook',compact('book'));

    }
    public function updatepost ($id){


        $post=DB::table('catagories')->get();
        
        $book=DB::table('posts')
                         ->where('posts.id',$id)
                         ->first();
          return view ('book.updatebook',compact('book','post'));

    }

    public function editebook (Request $request,$id){
          $data=array();
      $data['title']=$request->book_name;
      $data['author']=$request->author_name;
      $data['details']=$request->details;
      $data['catagory_id']=$request->catagory_id;
      $image=$request->file('image');
      $img=$request->old_image;

      if($image){
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext; 
        $upload_path='exx/images/';
        $image_url=$upload_path.$image_full_name; 
        $success=$image->move($upload_path,$image_full_name);
        $data['image']=$image_url;
        unlink($img);
      //  rturn response()->json($data);
        DB::table('posts')->where('id',$id)->update($data);
       $notification=array(
         'massage'=>'Successfully Inserted',
         'alert-type'=>'success'
         );
        return Redirect()->route('home')->with($notification);


       }else{
         $data['image']=$request->old_image;
         DB::table('posts')->where('id',$id)->update($data);
         $notification=array(
         'massage'=>'Successfully Inserted',
         'alert-type'=>'success'
         );
         return Redirect()->route('home')->with($notification);
       }

    }
    public function deletepost ($id){

          $delete=DB::table('posts')->where('id',$id)->first();
          $img=$delete->image;

        
         $post=DB::table('posts')->where('id',$id)->delete();

      //return view('post.catagoryview'compact('catagory'));
         if($post){
            unlink($img);
            $notification=array(
         'massage'=>'Successfully Deleted',
         'alert-type'=>'success'
         );
          }
         return Redirect()->back()->with($notification);


         }
}
