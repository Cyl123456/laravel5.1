<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
</head>
<body>
	<form action="{{url('/form')}}" method="post">
		<h3>post</h3>
		<input type="submit" value="提交">
		{{ csrf_field() }}
	</form>
    

    <form action="{{url('/del')}}" method="post">
		<h3>delete</h3>
		<input type="submit" value="提交">
		{{ csrf_field() }}
		{{ method_field('delete') }}
	</form>


	<form action="{{url('/pt')}}" method="post">
		<h3>put</h3>
		<input type="submit" value="提交">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
	</form>
</body>
</html>