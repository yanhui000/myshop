<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('login/do_register')}}" method="post">
    <table border="1">
        <tr>
            <td>用户名</td>
            <td><input type="text" name="l_name"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="l_pwd"></td>
        </tr>

        <tr>
            <td><input type="submit" value="注册"></td>
            <td></td>
        </tr>

    </table>
    @csrf
</form>
</body>
</html>