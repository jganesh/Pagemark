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
   {{ HTML::style('assets/css/loginpage.css') }}

</head>
<body>
	
@yield('content')
</body> 