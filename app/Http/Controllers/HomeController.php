<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public static function Profile(){
    	return view('profile');
    }
    public static function Home(){
    	return view('home');
    }
    public static function Contact(){
    	return view('contact');
    }

}
