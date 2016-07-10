<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<title>Panel Administrateur</title>
	@include('parts.header')
	<link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body>
	<nav class="ui breadcrumb">
		<a href="/admin">Administration</a>
		<span class="divider"> | </span>
		<a href="/">Retour au magasin</a>
	</nav>
	<section class="ui stackable padded grid">
		@yield('content')
	</section>
	@include('admin::scripts')
</body>
</html>