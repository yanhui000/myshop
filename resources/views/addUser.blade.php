<!DOCTYPE html>
<html>
<head>
	<title>注册</title>
</head>
<body>
	<form action="{{url('do_add')}}" method="post">
		@csrf
		<table border="1">
			<tr>
				<td>用户名</td>
				<td><input type="text" name="u_name"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td>
					<input type="password" name="u_pwd">
				</td>
			</tr>
		<tr>
			<td><input type="submit" value="注册" name=""></td>
			<td></td>
		</tr>
	</table>
	</form>
	
</body>
</html>