<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<h1>Add Student</h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post" enctype="multipart/form-data" >
	{{csrf_field()}}
	<table border="0">

		<tr>
			<td>Product Name </td>
			<td><input type="text" name="pname" value=""></td>
		</tr>
		<tr>
		<tr>
			<td>Quantity</td>
			<td><input type="text" name="quantity" value=""></td>
			<tr>

		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value=""></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach
</body>
</html>
