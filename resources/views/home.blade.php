<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>RealTime App</title>
</head>
<body>
	<div id="app">
		
		<v-app>
			<app-home></app-home>
		</v-app>

	</div>
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>