<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class stockController extends Controller
{
    //
    public function upload(){
        return view('pages.stockUpload');
    }

    public function storeStock(request $request){

        if($request ->hasFile('image')){
            foreach ($request->file as $file)

            $request->image-> store('public/stock');
          //  $file = new File;
            
            return 'yes';
        } 
        
        else{
            return 'no file selected';
        }
        if($request ->hasFile('image2')){

            $request->image-> store('public/stock');
            
            
            return 'yes';
        }
        if($request ->hasFile('image3')){

            $request->image-> store('public/stock');
            
            
            return 'yes';
        }
        if($request ->hasFile('image4')){

            $request->image-> store('public/stock');
           
            
            return 'yes';
        }
        if($request ->hasFile('image5')){

            $request->image-> store('public/stock');
           
            
            return 'yes';
        }
        if($request ->hasFile('image6')){

            $request->image-> store('public/stock');
           
            
            return 'yes';
        }

        return $request->all();
    }
}
