<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('name','Ejemplo')</title>
	<link rel="stylesheet" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js" defer></script>
</head>
<body style="padding-top: 7rem;">
	<div class="container-fluid">
		@include('partials/nav')
		@yield('content')
	</div>
</body>
</html>