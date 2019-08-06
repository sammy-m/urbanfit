@extends('layouts.apphtml')

<link rel="stylesheet" type="text/css" href= "{{asset('css/index.css')}}">
 
    @section('content')

    <div class="header"> 
        <img src="{{asset('images/icons/menu.png')}}" alt="LOGO" height="50" width="70">
        <img src="{{asset('images/icons/urbanfit2.png')}}" alt="LOGO" height="70" width="200">
           <div class='headsearch'> <input class='headertext' type="text" placeholder="search fashion items and brands." id="mainsearch">
           
           </div>
            <img src="{{asset('images/icons/help.png')}}" alt="Account" >
            <img src="{{asset('images/icons/acc.png')}}" alt="Account" >
            
        
        
        </div>
        <br>

        <h1> upload new stock</h1>
        {!! Form::open(['action' => 'stockController@upload', 'method' => 'POST']) !!}
                <div class = "Form-group">
                    
                    <select name="category" class="form-control">
                        <option value="0">Select a Category</option>
                        <option value="1">Shoes</option>
                        <option value="2">Bags</option>
                        <option value="3">Clothes</option>
                        <option value="4">Makeup</option>
                    </select>
                </div>
                <div class = "Form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title','',['placeholder' => 'user description'])}}
                </div>
                <div class = "Form-group">
                    <select name="category" class="form-control">
                        <option value="0">Select gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Unisex</option>
                      
                    </select>
                </div>
                <div class = "Form-group">
                    {{Form::label('description','Description')}}
                    {{Form::textArea('description','',['placeholder' => 'detailed description of good'])}}
                </div>
                 <div class = "Form-group">
                    {{Form::label('selling price','Selling price')}}
                    {{Form::text('selling price','',['placeholder' => 'selling price of good'])}}
                </div>
                <div class = "Form-group">
                    {{Form::label('buying price','Buying price')}}
                    {{Form::text('buying price','',['placeholder' => 'buying price of good'])}}
                </div>
                <div class = "Form-group">
                    {{Form::label('size','Size')}}
                    {{Form::text('size','',['placeholder' => 'sizes available'])}}
                </div>
                <div class = "Form-group">
                    {{Form::label('name','Name')}}
                    {{Form::text('name','',['placeholder' => 'name of manufucturer'])}}
                </div>
                <div class = "Form-group">
                    {{Form::label('quantity','Quantity')}}
                    {{Form::text('quantity','',['placeholder' => 'quantity available'])}}
                </div>

                <table class = "table table-bodered" id = "dynamic_images">
                    <tr> 
                        <td> <input type = "file" name ="name[]" id = "name"> </td>
                        <td> <button name ="add more" id="btnAddPic" class="mybtn"> Add Image<button> </td>
                    </tr>
                </table>
                <input type="submit" value="upload" >
        {!! Form::close() !!}

        <script>
            $(document).ready(function(){
                    var i = 1;
                    $('#btnAddPic').click(function(){
                        i++;
                        $('#dynamic_images').append(
                            <tr id = "row'+i+'"> 
                        <td> <input type = "file" name ="name[]" id = "name"> </td>
                        <td> <button name ="remove" id="btnAddPic'+i+'" class="btn btn-danger btn-remove"> remove <button> </td>
                           </tr>
                        );
                    });
                    $(document).on("click",".btn-remove", function(){
                        var button_id = $(this).attr("id");
                        $('#row'+button_id+'').remove();
                    });
            });
        </script>


            <div class ="uploadField">
               <h3>upload images of the item</h3>
            <form action="{{ route('stockUpload.stockImage') }}" enctype="multipart/form-data" method="POST">
            
                 {{ csrf_field()}}
                   <h6>enter the main display picture</h6> <input type="file" name="image"> <br>
                  
                   <input type="submit" value="upload" >
                </form>


            </div>

    @endsection