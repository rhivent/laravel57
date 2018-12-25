<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
			<title>
				@yield('title')
			</title>
			<link rel="stylesheet" href="/css/master.css">
			<link rel="stylesheet" href="/css/app.css">
		
		<style>
		
		</style>
	
	</head>
	<body>
		
	<header>
		<nav>
			<a href="/">Home</a>
			<a href="/blog">Blog</a>
		</nav>
	</header>
	<br>
	@yield('content')
	
	<br>
	<footer>
		<p>
			&copy; Laravel & Riventus AHA 2018
		</p>
	</footer>
	<script src="js/main.js"></script>
	<script src="js/app.js"></script>
	</body>
</html>
