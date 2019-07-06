<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggerController extends Controller
{
    //Tis controller permit to manage user connexions

    //Load Connexion page
    public function connect(){
        return view('common.connect');
    }
    
    //Load Register page
    public function register(){
        return view('common.register');
    }
}
