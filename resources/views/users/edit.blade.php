@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    <form method="post" action="{{route('users.update', $user)}}">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                            <label for="firstName">{{ __('First Name') }}</label> <br/>
                            <input type="text" name="firstName"  value="{{ $user->firstName }}" /> <br/>
                            <label for="lastname" style="margin-top:8px;">{{ __('Last Name') }}</label> <br/>
                            <input type="text" name="lastName"  value="{{ $user->lastName }}" /> <br/>
                            <label for="username" style="margin-top:8px;">{{ __('Username') }}</label> <br/>
                            <input type="text" name="userName"  value="{{ $user->userName }}" /> <br/>
                            <!--<label for="email" style="margin-top:8px;">{{ __('Email Address') }}</label> <br/>
                            <input type="email" name="email"  value="{{ $user->email }}" /> <br/>-->
                            <label for="password" style="margin-top:8px;">{{ __('Password') }}</label> <br/>
                            <input type="password" name="password" />  <br/>
                            <label for="pconfirm" style="margin-top:8px;">{{ __('Password Confirm') }}</label> <br/>
                            <input type="password" name="password_confirmation" />  <br/>
                            <label for="AccountSuper" style="margin-top:8px;">{{ __('Super Admin User') }}</label> <br/>
                            <select id="isSuperAdmin" name="isSuperAdmin" value="{{ $user->isSuperAdmin }}" style="width:160px;">  <br/>
                                <option value="Yes">Yes</option>
                                <option value="No" selected="selected">No</option>
                            </select> 
                            <div style="margin-top:15px;">
                                <button type="submit" class="btn btn-primary" style="width:200px;">Update</button>
                            </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection