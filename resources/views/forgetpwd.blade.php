<html>
<head><title>遺失密碼</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<form action="forgetpwd" method="POST">
    @csrf
    帳號:<br />
    <input type="text" name="account">
    <br />
    電子信箱:<br />
    <input type="text" name="email">
    <br />
    <br/>
    <input type="submit" name="submit" value="送出">
</form>
</body>
</html>
