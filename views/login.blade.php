@extends('master-login')
@section('content')

      <div class="container">
<div class="row loginForm">
            <div class="logo"> <img src="./assets/img/logo-trans.jpg" style="width:180px"></div> <span> No account yet? <a href="./register">Signup </a></span>
            <div class="well">
                  <legend>
                        Login
                  </legend>

@if( $errors->any() )
            <div class="alert alert-error">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  {{ implode('', $errors->all("<li class='error'>:message</li>")) }}

            </div>
            @endif
            {{ Form::open(array('url' => 'login')) }}
            
            
            {{ Form::text('email','',array('placeholder' => 'Email','class' => 'form-control')) }} </br>
            {{ Form::password('password',array('placeholder' => 'Password' , 'class' => 'form-control')) }} </br>
            {{ Form::submit('Login', array('class' => 'btn btn-success')) }}
           <!-- {{ HTML::link('#','Forgot Password?',array('class' => 'btn btn-primary')) }}</br> -->
           {{ HTML::link('#','Forgot Password?',array('class' => 'right')) }} </br>
            {{ Form::close() }}

            </div>

</div>
</div>
@stop