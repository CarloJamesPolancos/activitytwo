@include('layouts.partials.navbar')
@extends('supporters.layout')
@section('content')

<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css"/>

  <style>
    .para{
        text-align: justify;
        text-indent: 50px;
    }

    .imej {width: 100% !important;}

    .logo {
        width: 200px;
    }

    .nav-item {
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
        font-weight: normal !important;
        color: black !important;
    }

    .navbar-nav>.active{
        font-weight: bolder !important;
    }

    .bigg {
        font-size: 45px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
        color:rgb(216, 233, 236)}

    .normi {
        font-size: 40px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: normal;
        color:rgb(233, 241, 243)}

    .smol {
        font-size: 25px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: normal;
        color: white;}

    .lenk {
        font-size: 25px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: normal;
        color: rgb(233, 241, 243) !important;
        transition: all .7s}

    .twech{
        font-size: 25px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: normal;
        color: rgb(233, 241, 243) !important;
        transition: all .7s
    }

    .twech:hover{
        color: rgb(100, 65, 165) !important;
    }

    .lenk:hover{
        color: rgb(23, 169, 206) !important;
    }

    .botonn{
        font-size: 15px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: normal;
        color: black;
        background-color: rgb(233, 241, 243);
        border-color: rgb(233, 241, 243);
        transition: all .7s;
        border-radius: 30px;}

    .boton{
        font-size: 20px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: normal;
        color: black;
        background-color: rgb(233, 241, 243);
        border-color: rgb(233, 241, 243);
        transition: all .7s;
        border-radius: 30px;}

    .btn:hover{
    color: white;
    background-color: rgb(28, 28, 31);
    border-color: white;}

    .smoler {
        font-size: 20px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: normal;
        color: white;}

    .card { background-color: rgba(255, 255, 255, 0.05);
            border-radius: 15px;}
    .card:hover {box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}
    .card-header, .card-footer { opacity: 1}
  </style>

</head>

<body style="background-image: linear-gradient(rgb(28, 28, 31), rgb(28, 28, 31)), url(https://images.unsplash.com/photo-1617957689233-207e3cd3c610?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHVycGxlJTIwZ3JhZGllbnR8ZW58MHx8MHx8&w=1000&q=80);
background-repeat: no-repeat;
background-size: 100% 100%;">
<div class="card">
  <div class="card-header bigg text-center">View Supporter <a href="{{ url('/supporters') }}" class="boton btn" title="Back">Back</a></div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title normi">Name : {{ $supporters->name }}</h5>
        <p class="card-text smol">Role : {{ $supporters->role }}</p>
        <p class="card-text smol">Email : {{ $supporters->email }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@include('auth.partials.copy')
</body>
@stop