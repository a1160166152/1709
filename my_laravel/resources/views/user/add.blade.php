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
<form action="/addSave" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    用户名:<input type="text" name="username"><br><br>
    密码:<input type="password" name="password"><br><br>
    <input type="submit" value="提交"><br><br>
</form>
</body>
</html>