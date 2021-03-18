<html>
<head><title>更改密碼</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action="changepwd" method="POST">
    @csrf
    Account:<br />
    <input type="text" name="account">
    <br />
    NEW Password:<br />
    <input type="password" name="newpwd">
    <br />
    <input type="submit" name="submit" value="更改密碼">
</form>
</body>
</html>
