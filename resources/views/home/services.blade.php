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

<div class="container-fluid p-0">

        <!--Offered Services-->
        <div class="container-fluid">
            <div class="row my-4">
                <div class="col col-sm-5 d-flex align-items-center">
                    <img class="imej img-fluid mx-auto d-block"
                    src="https://images.unsplash.com/photo-1628565239608-47549a1126e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="Card image cap">
                </div>
                <div class="col col-sm-7 p-4">
                    <div class="row justify-content-md-center">
                        <h1 class="col col-sm-auto bigg text-center d-flex align-items-center">Offered Services</h1>
                        <img class="col col-sm-2" src="https://media0.giphy.com/media/5YpDAIRBS2xJMBoF2p/200w.gif">
                </div>
                    <p style="text-align: justify;" class="smol lead">Champion.GG provides different kinds of services for deeper levels
                        of improvement for different kinds of gamers.</p>
                    <div class="text-center">
                        <a href="#wanowan" class="boton btn btn-primary btn-lg me-3"><i class="bi bi-view-stacked"></i> 1-on-1 Coaching</a>
                        <a href="#submitvod" class="boton btn btn-primary btn-lg me-3"><i class="bi bi-view-stacked"></i> Submit a VOD</a>
                        <a href="#simulate" class="boton btn btn-primary btn-lg me-3"><i class="bi bi-view-stacked"></i> Simulate RG</a>
                    </div>
                </div>
                
            </div>
        </div>

        <!--1-on-1 Coaching-->
        <div id="wanowan" class="container-fluid">
                <div class="row p-4">
                    <div class="col">
                        <div class="row justify-content-md-center">
                            <img class="col col-sm-1" src="https://media1.giphy.com/media/H7K42LahBLynPpv4wg/200w.gif">
                            <h1 class="col col-sm-auto bigg text-center d-flex align-items-center">1-on-1 Coaching</h1>
                            <div class="col col-sm-2 d-flex align-items-center">
                                <p class="smol lead">is as easy as:</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col col-sm-4">
                        <div class="card">
                            <h1 class="normi text-center">Pick a Coach</h1>
                            <img class="card-img-top" src="https://www.gannett-cdn.com/presto/2021/08/17/USAT/f89c545a-7edb-4f25-b02a-16ca746febb6-smal5970.jpg?width=980&height=654&fit=crop&format=pjpg&auto=webp" alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="card">
                            <h1 class="normi text-center">Get assessed</h1>
                            <img class="card-img-top" src="https://static.invenglobal.com/upload/image/2019/01/14/o1547488544902646.jpeg" alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div><br>
                        <div class="d-flex justify-content-center">
                            <a href="" class="boton btn btn-primary"><i class="bi bi-view-stacked"></i> Pick a Coach</a>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="card ">
                            <h1 class="normi text-center">Dominate games!</h1>
                            <img class="normi card-img-top" src="https://images2.alphacoders.com/611/611981.jpg" alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
        </div><br><br>

        <!--VOD Review-->
        <div id="submitvod" class="container-fluid">
            <div class="row p-4">
                <div class="col">
                    <div class="row justify-content-md-center d-flex align-items-center">
                        <img class="col col-sm-1" src="https://media3.giphy.com/media/VEbdNvBdPQIEIRG0s0/200w.gif">
                        <h1 class="col col-sm-auto bigg text-center">VOD Review</h1>
                        <div class="col col-sm-2 d-flex align-items-center">
                            <p class="smol lead">is as easy as:</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Record gameplay</h1>
                        <span>
                            <img class="card-img-top" src="https://geekflare.com/wp-content/uploads/2023/01/Game-Recording-Software.png" alt="Card image cap">
                        </span>
                        <div class="card-body">
                        </div>
                    </div>
                    </div>
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Upload files</h1>
                        <span class="">
                            <img class="card-img-top" src="https://www.freeiconspng.com/uploads/upload-icon-3.png" alt="Card image cap">
                        </span>
                        <div class="card-body">
                        </div>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="" class="boton btn btn-primary"><i class="bi bi-camera-video"></i> Submit your VOD</a>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Get assessed</h1>
                        <span class="">
                            <img class="card-img-top" src="https://content.fortune.com/wp-content/uploads/2015/07/gettyimages-200559157-020.jpg" alt="Card image cap">
                        </span>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>

        <!--RG Simulation-->
        <div id="simulate" class="container-fluid">
            <div class="row p-4">
                <div class="col">
                    <div class="row justify-content-md-center d-flex align-items-center">
                        <img class="col col-sm-1" src="https://media2.giphy.com/media/fUwfzoaFXohEAa4vHQ/200w.gif">
                        <h1 class="col col-sm-auto bigg text-center">Ranked Game Simulation</h1>
                        <div class="col col-sm-2 d-flex align-items-center">
                            <p class="smol lead">is as easy as:</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Pick a Coach</h1>
                        <span>
                            <img class="card-img-top" src="https://www.gannett-cdn.com/presto/2021/08/17/USAT/f89c545a-7edb-4f25-b02a-16ca746febb6-smal5970.jpg?width=980&height=654&fit=crop&format=pjpg&auto=webp" alt="Card image cap">
                        </span>
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Practice games</h1>
                        <span class="">
                            <img class="card-img-top" src="https://images.unsplash.com/photo-1523875194681-bedd468c58bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="Card image cap">
                        </span>
                        <div class="card-body">
                        </div>
                    </div><br>
                    <div class="d-flex justify-content-center">
                        <a href="" class="boton btn btn-primary"><i class="bi bi-controller"></i> Play with a Coach</a>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="card">
                        <h1 class="normi text-center">Live Feedback</h1>
                        <span class="">
                            <img class="card-img-top" src="https://britishesports.org/wp-content/uploads/coach-gregan-2020.jpg" alt="Card image cap">
                        </span>
                        <div class="card-body">
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
</div>
</body>
@endsection