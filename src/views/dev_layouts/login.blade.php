@extends('crudbooster::layouts.layout_login')
@section('content')
    <p class='login-box-msg'>{{trans("crudbooster.login_message")}}</p>
    <form autocomplete='off' action="{{ cb()->getDeveloperUrl("login")  }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
            <input autocomplete='off' type="text" class="form-control" name='username' required placeholder="Username"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input autocomplete='off' type="password" class="form-control" name='password' required placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div style="margin-bottom:10px" class='row'>
            <div class='col-xs-12'>
                <button type="submit" class="btn btn-primary btn-block btn-flat"><i class='fa fa-lock'></i> {{trans("crudbooster.button_sign_in")}}</button>
            </div>
        </div>
    </form>
@endsection