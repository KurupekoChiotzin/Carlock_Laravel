<html>
<head><title>建立帳號</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<form action="register" method="POST">
    @csrf
    帳號:<br />
<input type="text" name="account">
<br />
密碼:<br />
<input type="password" name="password">
<br />
名字:<br />
<input type="text" name="name">
<br />
電子信箱:<br />
<input type="text" name="email">
<br />
電話:<br />
<input type="text" name="phone">
<br />
<input type="radio" name="guard" value="guard1">監護人
<input type="radio" name="guard" value="guard0">被監護人
<br/>
<input type="submit" name="submit" value="建立帳號">
</form>
</body>
</html>
