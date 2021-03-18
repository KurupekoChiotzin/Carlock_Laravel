<html>
<head><title>建立監護關係</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action="RSBuild" method="POST">
    @csrf
    token:<br />
    <input type="text" name="token">
    <br />
    <input type="submit" name="submit" value="建立">
</form>
</body>
</html>
