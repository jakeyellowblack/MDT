<html>
	<head>
		@yield('title')
        <link rel="icon" href="{!! asset('images/logo-mdt.png') !!}"/>
	</head>

	<body>
		<div class="container"> 
			@yield('content')
		</div>
	</body>
</html>