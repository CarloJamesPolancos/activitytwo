@extends('layouts.auth-master')
@section('content')
<head>

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
            color:rgb(233, 241, 243);
            color: black !important;}

        .smol {
            text-align: left !important;
            font-size: 25px;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: normal;
            color: black !important;}

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
            <div class="row justify-content-center">
                <div class="col col-sm-8">
                    <form method="post" action="{{ route('login.perform') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        
                        <br><br><h1 class="mb-3 bigg">Login</h1>

                        @include('layouts.partials.messages')

                        <div class="form-group mb-3">
                            <p style="color: white !important;"class="smol">Email or Username</p>
                            <input type="text" class="smol form-control" name="username" value="{{ old('username') }}" placeholder="" required="required" autofocus>
                            
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div><br>
                        
                        <div class="form-group form-floating mb-3">
                            <p style="color: white !important;"class="smol">Password</p>
                            <input type="password" class="smol form-control" name="password" value="{{ old('password') }}" placeholder="" required="required">
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div><br>

                        <button class="boton btn me-2" type="submit">Login</button>
                        <a class="boton btn" href="{{url('/')}}">Back</a>
                    </form>
                    @include('auth.partials.copy')
                </div>
            </div>
        </div>
    </body>
@endsection