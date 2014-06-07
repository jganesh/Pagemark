@extends('master-login')
@section('content')
{{ HTML::style('assets/css/loginpage.css') }}

<div class="container">
<div class="row registerForm">
      <div class="logo"> <img src="./assets/img/logo-trans.jpg" style="width:180px"></div> <span> Already have an account ? <a href="./login">Signin</a></span>
            <div class="well">
                  <legend>
                        Register
                  </legend>
                  
            @if( $errors->any() )
            <div class="alert alert-error">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                 {{ implode('', $errors->all("<li class='error'>:message</li>")) }}

            </div>
            @endif

            {{ Form::open(array('url' => 'register')) }}
            
            {{ Form::text('username','',array('placeholder' => 'Username','class' => 'form-control')) }} </br>
            {{ Form::text('email','',array('placeholder' => 'Email','class' => 'form-control')) }} </br>
            {{ Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) }} </br>
            <div > Birthday </div>
            {{ Form::selectRange('day',1,31,'',array('class' => 'birthday'))}} {{ Form::selectMonth('month','',array('class' => 'birthday'))}} {{ Form::selectYear('year', 1900,2000,'',array('class' => 'birthday'))}} </br>
            {{ Form::submit('Register', array('class' => 'btn btn-success')) }}
            {{ HTML::link('/','Cancel',array('class' => 'btn btn-danger right')) }}</br>
            {{ Form::close() }}
            </div>
      </div>
</div>
@stop