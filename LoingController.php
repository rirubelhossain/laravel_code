<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoingController extends Controller
{
    public function index()
    {
        return(view('login'));
    }
    public function loginsubmit(Request $request)
    {   
        ///return(view('output'));
        //return('Form Submitted');
        $email = $request->input('email');
        $password = $request->input('password');

       // echo "the email is = ".$email."<br>";
       // echo "And the password ".$password."<br>";
        
        ///return($request->all());
        return('The email is = '.$email. '<br>' . 'The password is = '.$password);
    }
    public function login_11(Request $request)
    {   
       // $email = $request->input('email');
       // $email = $request->input('password');
        return(view('login_1'));
    }
    public function login_id(Request $request)
    {
        $fname_1 = $request->input('fname');
        $lname_1 = $request->input('lname');
        $email_1 = $request->input('email');
        $stid_1 = $request->input('stid');
        $password_1 = $request->input('password');

        echo $fname_1."<br>";
        echo $lname_1."<br>";
        echo $email_1."<br>";
        echo $stid_1."<br>";
        echo $fname_1."<br>";

        //$var = DB ::table('rubels')->get() ;

        DB :: table('rubels')->insert([
            'fname' => $request->fname ,
            'lname' => $request->lname, 
            'email' => $request->email, 
            'stid' => $request->stid, 
            'password' => $request->password
        ]);
        /* 
        DB :: table('ruls')->insert([
            'fname' => $request->fname ,
            'lname' => $request->lname, 
            'email' => $request->email, 
            'stid' => $request->stid, 
            'password' => $request->password
        ]);
        */

    }
}
