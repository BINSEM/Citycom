<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel Administrateur</title>
	@include('parts.header')
	<link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body>
	<nav class="ui breadcrumb">
		<a href="/admin">Administration</a>
		<span class="divider">|</span>
		<a href="/">Retour au magasin</a>
	</nav>
	<section class="ui padded grid">
		@yield('content')
	</section>
	@include('admin::scripts')
</body>
</html>