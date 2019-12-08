<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<h1>Welcome home! {{ session('uname') }}</h1>
	<br>
	<a href="{{route('student.add')}}">Add Employee</a> |
	<a href="{{ route('student.index') }} ">User List</a> |
	<a href="{{ route('logout.index') }}">logout</a>

</body>
</html>
