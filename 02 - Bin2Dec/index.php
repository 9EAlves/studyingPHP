<!DOCTYPE html>
<html>
<head>
	<title>HEX2BI</title>
</head>
<body>
<form action="bin2dec.php" method="post">
 <p>BINARY NUMBER: <input type="text" name="binary" maxlength="8" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" /></p>
 <p><input type="submit" /></p>
</form>


</body>
</html>