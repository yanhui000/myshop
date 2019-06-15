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
<form action="{{url('do_add_goods')}}" method="post" enctype="multipart/form-data">
    <table>
        <tr></tr>
    </table>
    @csrf

    <input type="file" name="goods_file">
    <input type="submit" value="提交">
</form>
</body>
</html>