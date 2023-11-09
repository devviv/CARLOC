<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carController extends Controller
{
    public function index(){
        return view("carloc.acceuil");
    }
    public function cars(){
        return view("carloc.cars");
    }
    public function about(){
        return view("carloc.about");
    }
    public function contact(){
        return view("carloc.contact");
    }
}
