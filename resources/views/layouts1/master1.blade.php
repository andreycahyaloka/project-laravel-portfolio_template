<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts1._head1')
	@include('layouts1._stylesheets1')
</head>

<body>
		@yield('content')
	@include('layouts1._scripts1')
</body>
</html>