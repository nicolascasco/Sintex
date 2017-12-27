<!DOCTYPE html>

<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>SINTEX</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="/css/nav.css">

	@yield ('styles')
	
	<script src="https://use.fontawesome.com/ea3fbf401b.js"></script>


</head>
<body style="background-color: #f7f7f7;">
	@include ('layouts.nav')

	<div class="absolute-wrapper" style="background-color: #f7f7f7; height: 100vh; display: table; width: 100%;">
		
		@yield ('content')
	
		@include ('layouts.footer')
	</div>
</body>
</html>