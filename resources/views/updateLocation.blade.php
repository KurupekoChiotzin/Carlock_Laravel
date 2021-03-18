<html>
<head><title>上傳座標</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<form action="updateLocation" method="POST">
    @csrf
    LNG:<br />
    <input type="text" name="lng">
    <br />
    LAT:<br />
    <input type="text" name="lat">
    <br />
    <input type="submit" name="submit" value="上傳">
</form>
</body>
</html>
