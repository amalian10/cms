<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi! Welcome To Laravel";
    }
    public function about(){
        return "Name : Amalia Nuraini - NIM : 2041720160 - Class : TI 2I";
    }
    public function articles($id){
        return "Article Pages with Id" .$id;
    }
}

