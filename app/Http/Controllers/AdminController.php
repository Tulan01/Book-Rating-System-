<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
       $book=DB::table('posts')
                ->join('catagories','posts.catagory_id','catagories.id')
                ->select('posts.*','catagories.catagory_name','catagories.catagory_slug' )
                ->paginate(4);
     // return response () -> json($book);
       return view ('admin',compact('book'));


    }
}
