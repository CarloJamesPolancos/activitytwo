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

        <!--People of...-->
        <div class="container-fluid">
            <div class="row my-4">
                <div class="col col-sm-7 p-4">
                    <div class="row justify-content-md-center">
                        <h1 class="col col-sm-auto bigg text-center d-flex align-items-center">People of Champion.GG</h1>
                        <img class="col col-sm-2" src="https://media0.giphy.com/media/5YpDAIRBS2xJMBoF2p/200w.gif">
                </div>
                    <p style="text-align: justify;" class="smol lead">Champion.GG is run by a group of individuals committed to empowering the gaming community
                        specially to those who want to be level and even better with everybody else - aiming for Competence, Growth and Enlightenment.</p>
                    <div class="text-center">
                        <!-- <a href="#services" class="boton btn btn-primary btn-lg me-4"><i class="bi bi-view-stacked"></i> Browse Services</a> -->
                    </div>
                </div>
                <div class="col col-sm-5 d-flex align-items-center">
                    <img class="imej img-fluid mx-auto d-block"
                    src="https://www.gamesreviews.com/wp-content/uploads/2022/03/Gamers-.jpg" alt="Card image cap">
                </div>
            </div>
        </div>

        <!--My Idols Header-->
        <div id="people" class="container-fluid">
            <div class="row p-4">
                <div class="col">
                    <div class="row justify-content-md-center d-flex align-items-center">
                        <h1 class="col col-sm-auto bigg text-center">Founders</h1>
                        <img class="col col-sm-1" src="https://media1.giphy.com/media/N4R6h699f9e3IHc7fy/200w.gif">
                    </div>
                </div>
            </div>

            <!--Founders Content-->
            <div class="row g-3">
                <!--Master Ungas-->
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Master Ungas</h1>
                        <span>
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1559141865-c0ead7f26bd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
                        </span>
                        <div class="card-body">
                            <p class="smoler card-text">Master of First Person Shooter (FPS) games from the South-East Asia Region.</p>
                            <div class="container-fluid ">
                                <div class="row text-center align-items-center">
                                    <a href="https://www.twitch.tv/masterungas" target="_blank" class="twech col"><i class="bi bi-twitch "></i> Twitch</a>
                                    <a href="https://twitter.com/polancoscrljms" target="_blank" class="col lenk"><i class="bi bi-twitter"></i> Twitter</a>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.facebook.com/polancos.carlo" target="_blank" class="boton btn btn-primary"> <i class="bi bi-link-45deg"></i> Connect</a>
                    </div>
                </div>
                <!--Shiso Sagun-->
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Shiso Sagun </h1>
                        <span class="">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1590456744140-d196318f23cf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
                        </span>
                        <div class="card-body">
                            <p class="smoler card-text">Popular analyst for Battle Royales of the Europe, the Middle East, and Africa.</p>
                            <div class="container-fluid ">
                                <div class="row text-center align-items-center">
                                    <a href="https://www.twitch.tv/masterungas" target="_blank" class="twech col"><i class="bi bi-twitch "></i> Twitch</a>
                                    <a href="https://twitter.com/polancoscrljms" target="_blank" class="col lenk"><i class="bi bi-twitter"></i> Twitter</a>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.facebook.com/polancos.carlo" target="_blank" class="boton btn btn-primary"> <i class="bi bi-link-45deg"></i> Connect</a>
                    </div>
                </div>
                <!--Bon Eiza-->
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Bon Eiza</h1>
                        <span class="">
                            <img class="card-img-top" src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-BE-Logo-Design-by-Greenlines-Studios.jpg" alt="Card image cap">
                        </span>
                        <div class="card-body">
                            <p class="smoler card-text">Reknown strategist for Multiplayer Online Battle Arenas of the Americas.</p>
                            <div class="container-fluid ">
                                <div class="row text-center align-items-center">
                                    <a href="https://www.twitch.tv/masterungas" target="_blank" class="twech col"><i class="bi bi-twitch "></i> Twitch</a>
                                    <a href="https://twitter.com/polancoscrljms" target="_blank" class="col lenk"><i class="bi bi-twitter"></i> Twitter</a>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.facebook.com/polancos.carlo" target="_blank" class="boton btn btn-primary"> <i class="bi bi-link-45deg"></i> Connect</a>
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
</div>
</body>
@endsection