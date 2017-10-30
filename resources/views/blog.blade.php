@extends('layouts.page')

@section('content')
<style>
    body{
        font-family: "helvetica"
    }
    .navbar{
        margin-bottom:0px;
    }
    #space-nav{
        width: 100%;
        height: 50px;
    }

    .text-services{
        color:white;
        font-weight: bold;
    }

    .carousel-control.left{
        background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.0001)));
        background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.0001) 100%)
    }
    .carousel-control.right{
        background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.0001)));
        background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.0001) 100%)
    }
    .carousel-control{
        opacity:.9;
        width:6%
    }
    .carousel-control.left{
        left: -3%;
        bottom: 10%;
    }
    .carousel-control.right{
        right: -3%;
        bottom: 10%;
        width:2%;

    }

    .div-blue{
        background-color: rgba(73,198,216,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-pink{
        background-color: rgba(231,118,172,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-green{
        background-color: rgba(115,207,120,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-brown{
        background-color: rgba(231,122,79,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-purple{
        background-color: rgba(141,133,232,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-skyblue{
        background-color: rgba(126,201,232,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
    .div-darkblue{
        background-color: rgba(0,107,159,.9)!important;
        padding-top: 14% !important;
        padding-bottom:  10% !important;
        border-radius: 15px;
    }
</style>
<div id="space-nav">

</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">En construcción ..</h1>
        </div>
    </div>
</div>



@endsection
