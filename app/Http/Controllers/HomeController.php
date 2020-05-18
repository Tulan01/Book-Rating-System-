<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable

     */

   public function abcd ($id,$ab){
    $book=DB::table('rates')->get();

    $titles = DB::table('ratings')->pluck('catagory_id');

       echo $ab;

       $count=0;
     


    foreach($titles as $titles){

        if($titles==$ab){
            $count=1;
            break;
        }
     }
      if($count==1){
             echo 'we';
             $data2=array();
             $data2['catagory_id']=$ab;
             $data2['average']=$id;
             DB::table('ratings')->where('catagory_id',$ab)->update($data2);
             //break;
        }
    
        else{
            echo 'bue';
            $data2=array();
             $data2['catagory_id']=$ab;
             $data2['average']=$id;
            DB::table('ratings')->insert($data2);
             //break;
        }
        return redirect()->route('home');


   }


    public function index()
    { 
        
      
   $data=DB::table('posts')
                ->join('catagories','posts.catagory_id','catagories.id')
                ->join('ratings','posts.id','ratings.catagory_id')
                ->select('posts.*','catagories.catagory_name','catagories.catagory_slug','ratings.catagory_id','ratings.average')
                ->paginate(4);
     // return response () -> json($avg);
       return view ('home',compact('data'));
//

    }

   
   
}
