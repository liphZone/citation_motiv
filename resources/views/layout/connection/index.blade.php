<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.connection.partials.head')
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				@yield('content')
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
    @include('layout.connection.partials.scriptjs')
</body>
</html>