@extends('layouts.apphtml')

<link rel="stylesheet" type="text/css" href= "{{asset('css/index.css')}}"> 
<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
    <style>
        .fileContainer {
            overflow: hidden;
            position: relative;
        }
        
        .fileContainer [type=file] {
            cursor: inherit;
            display: block;
            font-size: 999px;
            filter: alpha(opacity=0);
            min-height: 21px;
            min-width: 100%;
            opacity: 0;
            position: absolute;
            right: 0;
            text-align: right;
            top: 0;
        }
        
        .fileContainer {
            background: #E3E3E3;
            float: left;
            padding: .5em;
            height: 21px;
        }
        
        .fileContainer [type=file] {
            cursor: pointer;
        }
    </style>
 
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

                <div id="app">
                        <table class="table">
                            <thead>
                                <tr>
                                    
                                    <td><strong>Add Images</strong></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr v-for="(row, index) in rows">
                
                                   
                                    <td>
                                        <label class="fileContainer">
                                            
                                            <input type="file" @change="setFilename($event, row)" :id="index" name="file[]">
                                        </label>
                                    </td>
                                    <td>
                                        <a v-on:click="removeElement(index);" style="cursor: pointer">Remove</a>
                                    </td>
                
                
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <a v-on:click= "addRow(el)" style="cursor: pointer" @click="addRow()"> add image</a>
                        </div>
                    </div>
                <input type="submit" value="upload" >
        {!! Form::close() !!}
        <script type="text/javascript">
            var app = new Vue({
                el: "#app",
                data: {
                    rows: []
                },
                methods: {
                    addRow : function(el) {
                       
                        var elem = document.createElement('tr');
                        this.rows.push({
                            title: "",
                            description: "",
                            file: {
                                name: 'Choose File'
                            }
                        });
                    },
                    removeElement: function(index) {
                        this.rows.splice(index, 1);
                    },
                    setFilename: function(event, row) {
                        var file = event.target.files[0];
                        row.file = file
                    }
                }
            });
        </script>
        
    @endsection