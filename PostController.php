<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('posts')->get() ; ///
        return view('posts' , compact('posts')) ;/// this view section this data represent on the html page 
    }
    public function get_data()
    {
        $receive_variable = DB :: table('migrations')->get();
        return( view('get_dat', compact('receive_variable')));
    }
    public function my_guest()
    {
        $guest = DB :: table('myguests')->get();
        return(view('guest_1',compact('guest'))) ;
    }
    public function rubel_info()
    {
        $rubel_catch = DB :: table('rubel_info')->get() ;
        return (view('about_rubel', compact('rubel_catch'))) ;
    }
    public function addPost()
    {
        return (view('add-post'));
    }
    public function addPostSubmit(Request $request)
    {
        DB :: table('posts')->insert([
            'title' => $request->title ,
            'body' => $request->body 

        ]);
        return back()->with('post_created' , 'Post has been created successfully!');
    }
}



