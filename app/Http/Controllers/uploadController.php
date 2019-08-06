<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    public function upload(){
        return view("pages.stockUpload");
    }

    public function store(request $request ){

    }
}
