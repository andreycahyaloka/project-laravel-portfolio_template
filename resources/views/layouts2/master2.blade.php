<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts2._head2')
	@include('layouts2._stylesheets2')
</head>

<body>
		@yield('content')
	@include('layouts2._scripts2')
</body>
</html>