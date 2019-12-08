<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<h1>Welcome home! {{ session('uname') }}</h1>
	<br>
	<a href="{{route('job.add')}}">Add Product</a> |
	<a href="{{ route('job.index') }} ">Product List</a> |
	<a href="{{ route('logout.index') }}">logout</a>

</body>
</html>
