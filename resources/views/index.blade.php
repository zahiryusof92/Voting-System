<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>Voting System</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div id="app">
	<router-view></router-view>
</div>

<div id="error"></div>

<script src="{{ asset('js/config.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
