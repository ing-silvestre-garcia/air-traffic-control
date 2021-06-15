<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/api">Add</a></li>
			<li>Edit</li>
			<li>Delete</li>
		</ul>
	</nav>
	@yield('content')
</body>
</html>