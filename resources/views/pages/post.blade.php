@extends('layouts.app')

@section('content')
    <h3>List of Post</h3>
    @if(count($myvar) > 0)
        @foreach($myvar as $item)
            <div class="well">
                <h3><a href="post/{{$item->id}}">{{ $item->title }}</a></h3>
                <small>Written on {{$item->created_at}}</small>
            </div>
        @endforeach
        {{ $myvar->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection