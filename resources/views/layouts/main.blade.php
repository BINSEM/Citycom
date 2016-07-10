<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Citycom</title>
	<!-- <meta name="viewport" content="width=device-width, user-scalable=no"> -->
<meta name="viewport" content="initial-scale=1, user-scalable=yes, width=device-width">
	@include('parts.header')
</head>
<body>
	@include('parts.navbar')
	@yield('content')
	
	@include('parts.footer')

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="/assets/jquery/jquery.min.js"></script>
	<script src="/assets/js/semantic.min.js"></script>
	<script src="/assets/js/app.js"></script>
	<script type="text/javascript">
		$('.ui.dropdown').dropdown();
		$(document).ready(function(){
			$('.right.menu').on("click",function(e){
				e.preventDefault();
				$('.ui.vertical.menu').toggle();
			});

			$('.ui.dropdown').dropdown();
		});
	</script>


</body>
</html>