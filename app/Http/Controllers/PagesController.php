<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function menshoes(){
        return view('pages.men-shoes');
    }

    public function ladyshoes(){
        return view('pages.women-shoes');
    }

    public function services(){
        return view('pages.services');
    }
}
