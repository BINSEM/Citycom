<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Citycom</title>
	@include('parts.header')
</head>
<body>
	@include('parts.navbar')
	
	@yield('content')

	@include('parts.footer')
</body>
</html>