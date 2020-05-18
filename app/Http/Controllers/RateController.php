<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RateController extends Controller
{
   
  public function index () {

  	 $data=DB::table('posts')
                ->join('catagories','posts.catagory_id','catagories.id')
                ->join('ratings','posts.id','ratings.catagory_id')
                ->select('posts.*','catagories.catagory_name','catagories.catagory_slug','ratings.catagory_id','ratings.average')
                ->get();
     // return response () -> json($avg);
   

  	return view('welcome',compact('data'));
  }
     
  public function viewubook ($id) {
       $data=DB::table('posts')
                ->join('catagories','posts.catagory_id','catagories.id')
                ->join('ratings','posts.id','ratings.catagory_id')
                ->select('posts.*','catagories.catagory_name','catagories.catagory_slug','ratings.catagory_id','ratings.average')
                ->where('posts.id',$id)
                ->first();
     // return response () -> json($book);
       return view ('rate.viewbook',compact('data'));
  }

  public function ratebook ($id){
  	 $row=DB::table('posts')
                ->join('catagories','posts.catagory_id','catagories.id')
                ->select('posts.*','catagories.catagory_name','catagories.catagory_slug' )
                ->where('posts.id',$id)
                ->first();
     // return response () -> json($book);
       return view ('rate.ratebook',compact('row'));
  }

  public function storebook (Request $request){
       $data=array();
       $data['user_id']=$request->user_id;
       $data['post_id']=$request->post_id;
       $data['rating']=$request->rating;

      $rate=DB::table('rates')->insert($data);

      $book=DB::table('rates')->get();
       $count=0;
        $rate=0;
        $sum=0;
        $avg;

       foreach($book as $book){
            if($book->post_id ==$request->post_id){
                $count++;
                $rate=$book->rating;
                $sum=$sum+$rate;

            }
       }
           $avg2 = $sum / $count;

           $avg= round($avg2,1);
           $ab=$request->post_id;

         

        $data2=DB::table('posts')->where('id',$request->post_id)->first();
      
    // return response() ->json($davg);
       
          return Redirect()->route('abcd',[$avg, $ab]); 
  }
}
