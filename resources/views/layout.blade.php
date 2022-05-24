<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('name','Ejemplo')</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}"></script>
</head>
<body style="padding-top: 4rem;">
	<div id="app" class="d-flex h-screen justify-content-between flex-column">
		<header>
			@include('partials/nav')
			@include('partials.status')
		</header>

		<main class="py-4">
			@yield('content')
		</main>
	</div>
</body>
</html>