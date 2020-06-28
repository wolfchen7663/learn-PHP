<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="validate.php" method="POST">
        <input type="text" name="captcha" placeholder="验证码不区分大小写">
        <div>
            <img src="code.php" alt="验证码" onclick="this.src = 'code.php?' + Math.random()">
        </div>
        <button type="submit">提交</button>
    </form>
</body>

</html>