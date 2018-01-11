<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts4._head4')
	@include('layouts4._stylesheets4')
</head>

<body>
		@yield('content')
	@include('layouts4._scripts4')
</body>
</html>