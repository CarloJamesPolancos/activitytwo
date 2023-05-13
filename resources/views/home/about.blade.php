@extends('layouts.app-master')
@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

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

<div class="container-fluid p-0">

        <!--Paragraphs-->
        <div class="container-fluid p-0">
            <!--Para 1-->
            <div class="row my-4 p-0">
                <div class="col col-sm-6 p-5">
                    <div class="row justify-content-md-center align-self-center">
                        <h1 class="col col-sm-auto bigg text-center d-flex align-items-center">What is Champion.GG?</h1>
                        <img class="col col-sm-2" src="https://media0.giphy.com/media/5YpDAIRBS2xJMBoF2p/200w.gif">
                    </div>
                    <p class="para smol">In this website, you will be guided on how to unleash the beast of a gamer in you.
                        Here at <a href="{{url('/home')}}" class="lenk text-primary">Champion.gg</a>,
                        you will learn the essentials of how to have the victorious visions, attitude and mentality
                        of a Champion so that you can be the player you want to be and inspire others as well.</p>
                </div>
                <div class="col col-sm-6 p-0">
                    <img class="imej img-fluid mx-auto d-block"
                    src="https://images.unsplash.com/photo-1628565239608-47549a1126e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="Card image cap">
                </div>
            </div>
            <!--Para 2-->
            <div class="row justify-content-md-center p-0">
                <div class="col col-sm-6 p-0">
                    <img class="imej mx-auto d-block"
                        src="https://builtin.com/sites/www.builtin.com/files/styles/og/public/2022-09/gaming.png" alt="Card image cap">
                </div>
                <div class="col col-sm-6 align-self-center p-4">
                    <p class="para smol justify-content-md-center">Champion.GG provides different kinds of services for deeper levels of improvement for different kinds of gamers.
                        <a href="{{url('/services')}}#wanowan" class="lenk text-primary">From 1-on-1 Coaching</a> where you can choose from top coaches accross a variety of games,
                        to <a href="{{url('/services')}}#submitvod" class="lenk text-primary">VOD Reviews</a> where you can submit a recording of your gameplay and receive assessments,
                        and even <a href="{{url('/services')}}#simulate" class="lenk text-primary">Ranked Game Simulations</a> where you can receive live feedback while playing in a ranked environment.</p>
                </div>
            </div>
            <!--Para 3-->
            <div class="row justify-content-md-center p-0">
                <div class="col col-sm-6 align-self-center p-5">
                    <p class="para smol">Champion.GG is run by a group of individuals committed to empowering the gaming community
                        specially to those who want to be level and even better with everybody else - aiming for Competence, Growth and Enlightenment.
                        If you want to rise above the ranks, then what are you waiting for?</p><br>
                    <div class="text-center">
                        <a href="{{url('/home')}}" class="boton btn btn-primary btn-lg me-4"><i class="bi bi-check-lg"></i> Become a Champion today</a>
                    </div>
                </div>
                <div class="col col-sm-6 p-0">
                    <img class="imej mx-auto d-block"
                        src="https://www.gamesreviews.com/wp-content/uploads/2022/03/Gamers-.jpg" alt="Card image cap">
                </div>
            </div>
        </div>
    </div>

    <hr style="color: white;">
    <footer>
        <div class="row text-light mx-auto">
            <div class="smoler col-md-6">
                <p>Copyright &copy; 2023 Champion.GG</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{url('/terms')}}" class="smoler lenk">Terms of Use</a> 
                <span class="text-light mx-2">|</span> 
                <a href="{{url('/privacy')}}" class="smoler lenk">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
</body>
@endsection