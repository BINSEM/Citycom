<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestion des articles</title>
	@include('parts.header')
</head>
<body>
	@include('article::menu')
	@yield('content')	
	<script src="/assets/jquery/jquery.min.js"></script>
	<script src="/assets/js/semantic.min.js"></script>
	<script src="/categorie.js"></script>
</body>
</html>