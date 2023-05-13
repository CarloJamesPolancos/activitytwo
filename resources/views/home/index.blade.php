@extends('layouts.app-master')
@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <style>
    .imej{height: 80%;}

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
        font-size: 50px;
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

<!--Welcome-->
<div class="container-fluid">
    <div class="row my-4">
        <div class="col col-sm-8 p-4">
            <div class="row justify-content-md-center">
                <h1 class="col col-sm-auto bigg text-center d-flex align-items-center">Welcome to Champion.GG!</h1>
                <img class="col col-sm-2" src="https://media0.giphy.com/media/5YpDAIRBS2xJMBoF2p/200w.gif">
        </div>
            <p style="text-align: justify;" class="smol lead">In this website, you will be guided on how to unleash the beast of a gamer in you.
                Here at <a href="https://www.champion.gg" target="_blank" class="lenk text-primary">Champion.gg</a>,
                you will learn the essentials of how to have the victorious visions, attitude and mentality
                of a Champion so that you can be the player you want to be and inspire others as well.</p>
            <div class="text-center">
                <a href="#services" class="boton btn btn-primary btn-lg me-4"><i class="bi bi-view-stacked"></i> Browse Services</a>
                <a href="#people" class="boton btn btn-primary btn-lg"><i class="bi bi-people-fill"></i> View People</a>
            </div>
        </div>
        <div class="col col-sm-4 d-flex align-items-center">
            <img class="imej img-fluid mx-auto d-block"
            src="https://builtin.com/sites/www.builtin.com/files/styles/og/public/2022-09/gaming.png" alt="Card image cap">
        </div>
    </div>
</div><br>

<!--Offered Services-->
<div id="services" class="container-fluid">
        <div class="row p-4">
            <div class="col">
                <div class="row justify-content-md-center">
                    <h1 class="col col-sm-auto bigg text-center d-flex align-items-center">Offered Services</h1>
                    <img class="col col-sm-1" src="https://media1.giphy.com/media/H7K42LahBLynPpv4wg/200w.gif">
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col col-sm-4">
                <div class="card">
                    <h1 class="normi text-center">1-on-1 Coaching</h1>
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
                    <div class="card-body">
                        <p class="smoler card-text">Choose among top-rated players/coaches across a variety of games from differnt platforms.</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{url('/services')}}#wanowan" targer="_blank" class="boton btn btn-primary"><i class="bi bi-view-stacked"></i> Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-4">
                <div class="card">
                    <h1 class="normi text-center">VOD Review</h1>
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1610041321327-b794c052db27?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
                    <div class="card-body">
                        <p class="smoler card-text">Don't have free time on-hand? Send a recording and let a coach assess your gameplay.</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{url('/services')}}#submitvod" targer="_blank" class="boton btn btn-primary"><i class="bi bi-view-stacked"></i> Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-4">
                <div class="card ">
                    <h1 class="normi text-center">RG Simulation</h1>
                    <img class="normi card-img-top" src="https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="Card image cap">
                    <div class="card-body">
                        <p class="smoler card-text">If you want to improve drastically and immediately, then play with a coach right now!</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{url('/services')}}#simulate" targer="_blank" class="boton btn btn-primary"><i class="bi bi-view-stacked"></i> Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div><br><br>

<!--People-->
<div id="people" class="container-fluid">
    <div class="row p-4">
        <div class="col">
            <div class="row justify-content-md-center d-flex align-items-center">
                <h1 class="col col-sm-auto bigg text-center">People of Champion.GG</h1>
                <img class="col col-sm-1" src="https://media1.giphy.com/media/N4R6h699f9e3IHc7fy/200w.gif">
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col col-sm-4">
            <div class="card">
                <h1 class="normi text-center">Master Ungas</h1>
                <span>
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1559141865-c0ead7f26bd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
                </span>
                <div class="card-body">
                    <p class="smoler card-text">Master of First Person Shooter (FPS) games from the South-East Asia Region.</p>
                </div>
            </div>
        </div>
        <div class="col col-sm-4">
            <div class="card">
                <h1 class="normi text-center">Shiso Sagun </h1>
                <span class="">
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1590456744140-d196318f23cf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
                </span>
                <div class="card-body">
                    <p class="smoler card-text">Popular analyst for Battle Royales of the Europe, the Middle East, and Africa.</p>
                </div>
            </div><br>
            <div class="d-flex justify-content-center">
                <a href="{{url('/contact')}}" class="boton btn btn-primary"> <i class="bi bi-link-45deg"></i> Connect</a>
            </div>
        </div>
        <div class="col col-sm-4">
            <div class="card">
                <h1 class="normi text-center">Bon Eiza</h1>
                <span class="">
                    <img class="card-img-top" src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-BE-Logo-Design-by-Greenlines-Studios.jpg" alt="Card image cap">
                </span>
                <div class="card-body">
                    <p class="smoler card-text">Reknown strategist for Multiplayer Online Battle Arenas of the Americas.</p>
                </div>
            </div>
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
</body>
@endsection