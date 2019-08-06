
    @extends('layouts.apphtml')

<link rel="stylesheet" type="text/css" href= "{{asset('css/index.css')}}">
 
    @section('content')
<div class="header"> 
<img src="{{asset('images/icons/menu.png')}}" alt="LOGO" height="50" width="70">
<img src="{{asset('images/icons/urbanfit2.png')}}" alt="LOGO" height="70" width="200">
   <div class='headsearch'> <input class='headertext' type="text" placeholder="search fashion items and brands." id="mainsearch">
    <button class='headersearch' disabled="disabled" id="btnsearch"> <strong>SEARCH</strong> </button>
   </div>
    <img src="{{asset('images/icons/help.png')}}" alt="Account" >
    <img src="{{asset('images/icons/acc.png')}}" alt="Account" >
    

<img src="{{asset('images/icons/shoppingcart.png')}}" alt="LOGO" height="50" width="50">
</div>
        <div class ='container'>
<div class='scrollmenu'>
        <h4>Men's Shoes</h4>
        <a href = '#'>Loafers</a><br>
        <a href = '#'>Oxfords</a><br>
        <a href = '#'>Sandals & Slip-ons</a><br>
        <a href = '#'>Fashion sneakers</a><br>
        <a href = '#'>Boots</a><br>
        <a href = '#'>Athletics</a><br>
        <a href = '#'>Loafers</a><br>
        <a href = '#'>Loafers</a><br>
   <div class='ladyshoe'>
        <h4>Ladies' Shoes</h4>
        <a href = '#'>Loafers</a><br>
        <a href = '#'>Heels</a><br>
        <a href = '#'>Sandals & Slip-ons</a><br>
        <a href = '#'>Fashion sneakers</a><br>
        <a href = '#'>Boots</a><br>
        <a href = '#'>Athletics</a><br>
        <a href = '#'>Loafers</a><br>
        <a href = '#'>Loafers</a><br>
   </div>
                <br>
        <div class='sizescroll'>
           <form>
                <h4>Size</h4>
                <div class='sizescrollable'>
                    <input type='checkbox' name='36' value='36'> Size 36 <br>
                    <input type='checkbox' name='37' value='37'> Size 37 <br>
                    <input type='checkbox' name='38' value='38'> Size 38 <br>
                    <input type='checkbox' name='39' value='39'> Size 39 <br>
                    <input type='checkbox' name='40' value='40'> Size 40 <br>
                    <input type='checkbox' name='41' value='41'> Size 41 <br>
                    <input type='checkbox' name='42' value='42'> Size 42 <br>
                    <input type='checkbox' name='43' value='43'> Size 43 <br>
                    <input type='checkbox' name='44' value='44'> Size 44 <br>
                    <input type='checkbox' name='45' value='45'> Size 45 <br>
                </div>
           </form>


        </div>
   
   
    </div>
<div class='content'>
   <div class="heading"> 
    <strong><h1 id="h1">SHOES.</h1></strong>
    <p id="products">
  3566367 products available.
    </p>
    </div>
</div>
</div>
 
    
@endsection