<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function showHome(){
        return view('home');
    }
    function showService(){
        return view('service');

    }
    function showTeams(){
        return view('team');

    }

    function showAbout(){
        return view('about');

    }
    function showContact(){
        return view('contact');

    }
   
}
