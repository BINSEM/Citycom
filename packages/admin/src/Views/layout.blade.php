<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel Administrateur</title>
	@include('parts.header')
</head>
<body>
	<section>
		@yield('content')
	</section>
	@include('admin::scripts')
</body>
</html>