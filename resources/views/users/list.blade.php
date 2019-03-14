@extends('layouts.app')

@section('content')
<h3>List of Users</h3>
<table>
    <tr>
        <td><label for="firstName" style="padding: 10px 10px 5px 0px;">{{ __('First Name') }}</label></td>
        <td><label for="lastname" style="padding: 10px 10px 5px 0px;">{{ __('Last Name') }}</label></td>
        <td><label for="username" style="padding: 10px 10px 5px 0px;width:100px;">{{ __('Username') }}</label></td>
        <td><label for="email" style="padding: 10px 10px 5px 0px;width:180px;">{{ __('Email Address') }}</label></td>
        <td><label for="AccountSuper" style="padding: 10px 5px 5px 0px;">{{ __('Super Admin User') }}</label></td>
    </tr>
    @if(count($list) > 0)
        @foreach($list as $iteme)
        <tr>
            @foreach($columns as $cols)
                <td>
                    {{$iteme->$cols}}
                </td>

            @endforeach
        </tr>
        @endforeach
    @else
    <tr>
        <td><p>No posts found</p></td>
    </tr>
    @endif
        <tr>
            @if($isSuper == "Yes")
            <td><button type="submit" class="btn btn-primary" style="width:200px;" onclick="window.location='{{ url("add/") }}'">Add New Super User</button></td>
            @else
            <td><button type="submit" class="btn btn-primary" style="width:200px;" onclick="window.location='{{ url("add/") }}'">Add New User</button></td>
            @endif
        </tr>
    </table>
@endsection