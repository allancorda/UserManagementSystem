@extends('layouts.app')

@section('content')
    <!--<a href="http://localhost:81/ssruserapp/public/post" class="btn btn-default">Go Back</a>-->
    <h1>{{$myvar->title}}</h1>
    <div>
        {{$myvar->body}}
    </div>
    <hr>
    <small>Written on {{$myvar->created_at}}</small>
@endsection