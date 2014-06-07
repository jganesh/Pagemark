<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title> {{ $title }} </title>
	 {{ HTML::style('assets/css/bootstrap.css') }}
	 {{ HTML::script('assets/js/jquery.js') }}
	 {{ HTML::script('assets/js/bootstrap/bootstrap.js') }}

</head>
<body>
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">	
	<div class="container">
	
         <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="pagemark/public/" class="navbar-brand" style="padding: 0px;"><img style="width:180px" src="./assets/img/logo-trans.jpg"></a>
        </div>
        <div class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
              	    @if(Auth::user())
	                   {{ HTML::link('logout','Logout') }}
	                 @else
	                   {{ HTML::link('login','Login') }}
	                 @endif
	             </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navigaton -->
<div class='container body-container'> @yield('content')</div>
<footer style="text-align:center">copyright</footer>
</body> 