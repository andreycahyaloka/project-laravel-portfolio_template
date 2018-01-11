<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts3._head3')
	@include('layouts3._stylesheets3')
</head>

<body>
		@yield('content')
	@include('layouts3._scripts3')
</body>
</html>