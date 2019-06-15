<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{url('do_update')}}" method="post">
		@csrf
		<table border="1">
			<input type="hidden" name="u_id" value="{{$data->u_id}}">
			<tr>
				<td>姓名</td>
				<td><input type="text" value="{{$data->u_name}}" name="u_name"></td>
			</tr>
			<tr>
				<td>性别</td>
				<td>
					@if($data->u_sex==1)
					<input type="radio" name="u_sex" value="1" checked>男
					<input type="radio" name="u_sex" value="2">女
					@else
					<input type="radio" name="u_sex" value="1">男
					<input type="radio" name="u_sex" value="2" checked>女
					@endif
				</td>
			</tr>
			<tr>
				<td>年龄</td>
				<td>
					<input type="text" value="{{$data->u_age}}" name="u_age">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="修改" name="">
				</td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>