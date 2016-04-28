@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Change your password</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ url('account/password') }}">
                            {!! csrf_field() !!}
                            <input type="text" name="current_password">
                            <input type="text" name="password">
                            <input type="text" name="password_confirmation">
                            <button type="submit">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection