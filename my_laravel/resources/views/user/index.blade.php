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
<a href="/add">添加</a>

    <table border="1" cellspacing="0" style="text-align: center">
        <tr>
            <td>id</td>
            <td>username</td>
            <td>password</td>
            <td>login_times</td>
            <td>login_last</td>
            <td>edit\delete</td>
        </tr>
        @foreach($users as $val)
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->username}}</td>
                <td>{{$val->password}}</td>
                <td>{{$val->login_times}}</td>
                <td>{{$val->login_last}}</td>
                <td>
                    <a href="/edit/{{$val->id}}">修改</a>
                    <a href="/delete/{{$val->id}}">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
