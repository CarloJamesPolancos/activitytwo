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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bigg text-center">Supporters <a href="{{ url('/supporters/create') }}" class="boton btn" title="Add New Supporter">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a></div>
                    <div class="card-body">
                        <br/>
                        <div class="table-responsive">
                            <table class="table smol">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($supporters as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>{{ $item->email }}</td>
 
                                        <td class="text-center">
                                            <a href="{{ url('/supporters/' . $item->id) }}" title="View Student"><button class="botonn btn"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/supporters/' . $item->id . '/edit') }}" title="Edit Student"><button class="botonn btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/supporters' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="botonn btn" title="Delete Supporter" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('auth.partials.copy')
</body>
@endsection