<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','SERVER')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<!-- Latest CSS files for bulma and font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

</head>
<body>
	
	<div class="container">
		@yield('content')
		
	</div>


	<!-- <ul>
		<li><a href="https://github.com/laravel/laravel">GitHub</a></li>
		<li><a href="/contact">Contact us to learn more</a></li>
		<li><a href="/about">About us</a></li>

	</ul> -->

	<div id="app">
		<message-component></message-component>
	</div>
	
	<script src="js/app.js"></script>
</body>
</html>