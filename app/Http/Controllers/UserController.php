<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
//hash import for encrypt and decryption 
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        
        if(!$user || !Hash::check($req->password,$user->password))
//user er email and password jodi db te na thake tahole vul hesebe not matched dekhabe         
        {
            return "Username or Password is not matched";
        }
        else
        {
            $req->session()->put('user',$user);
//session use kora hoi user er data store korte r put method a $user holo j data store korbo user naamer key te,user holo key

            return redirect('/');
//jodi email r password match kore tahole redirect hoye ProductController er index function er welcome output dekhabe
        }

//a tar maddhome input er email er sathe database er email match korbe
//Retrieving records. ... The first() method will return only one record

        // return $req->input();
//it's used for print input value 
    }
    function register(Request $req)
    {
        $user = new User;
        $user->name=$req->name;
        $user->mobile=$req->mobile;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
