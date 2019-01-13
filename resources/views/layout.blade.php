<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','SERVER')</title>
	<!-- Latest CSS files for bulma and font-awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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


	
	<script src="js/app.js"></script>
</body>
</html>