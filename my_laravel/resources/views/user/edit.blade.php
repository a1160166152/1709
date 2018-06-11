<?php

?>

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
    <form action="/editSave" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$data->id}}">
        用户名:<input type="text" name="username" value="{{$data->username}}"><br><br>
        密码:<input type="password" name="password" value="{{$data->password}}"><br><br>
        <input type="hidden" name="login_times" value="{{$data->login_times}}">
        <input type="submit" value="提交"><br><br>
    </form>
</body>
</html>