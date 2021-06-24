<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{   
    
    public function getAllpost()
    {
        $response = Http :: get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function getpostByid($id)
    {
        $post = Http :: get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }
    public function addpost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts',[
            'userId'=> 1 ,
            'title'=> 'This is new post by Rubel',
            'body' => 'this is body'
        ]);
        return $post->json() ;
    }
    public function update()
    {
        $post = Http :: put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'updated data' ,
            'body' => 'updated body'
        ]);
        return $post->json() ;
    }
    public function delete_post($id)
    {
        $delete_post = Http :: delete('https://jsonplaceholder.typicode.com/posts'.$id) ;
        return $delete_post->json();
    }

}
