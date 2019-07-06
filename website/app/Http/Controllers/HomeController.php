<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //View to return HomePage
    public function index(){
        // return view('index');
        return dump(DB::select('select * from salle'));
    }

    //View to return Salles
    public function salles(){
        return view('website.salles');
    }

    //View to return Users Conditions
    public function conditions(){
        return view('website.conditions');
    }

    //View to return About Page
    public function aboutus(){
        return view('website.about');
    }

    //View to return Contact page
    public function contactus(){
        return view('website.contact');
    }

    //View to return Details page
    public function salle_details(){
        return view('website.details');
    }
}