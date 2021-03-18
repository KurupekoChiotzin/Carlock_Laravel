<html>
<head><title>請求座標</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action="requestLocation" method="POST">
    @csrf
    ID:<br />
    <input type="text" name="id">
    <br />
    <input type="submit" name="submit" value="送出">
</form>
</body>
</html>
