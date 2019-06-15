<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
			<td>操作</td>
		</tr>
		@foreach ($info as $v)
		<tr>
			<td>{{$v->u_name}}</td>
			<td>
				@if($v->u_sex==1)
				男
				@else
				女
				<input type="radio" name="u_sex" value="2" checked>女
				@endif
			</td>
			<td>{{$v->u_age}}</td>
			<td>
				<a href="{{url('del')}}?u_id={{$v->u_id}}">删除</a>
				<a href="{{url('update')}}?u_id={{$v->u_id}}">修改</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>