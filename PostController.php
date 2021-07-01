<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/// this controller provide the data collection form database 
class PostController extends Controller
{
    public function getAllpost()
    {
        $posts = DB :: table('rubels')->get() ;
        return(view('get_data',compact('posts')));
    }
}
