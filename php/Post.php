<!DOCTYPE html>
<html>
<head>
	<title>Hello PHP</title>
</head>
<body>
<fieldset>
    <legend align =center>Form</legend>
    <form action="Post.php" method="post" accept-charset="utf-8">
        Name:<input type="text" name="name"><br>
        Age:<input type="number" name="age"><br>
        Password:<input type="password" name="password" value="" placeholder=""><br>
        <input type="submit">
    </form>
</fieldset><br>
<div align=center>
    Your Name is: <?php
    echo $_POST["name"];?> <br>
    Your Age is: <?php
    echo $_POST["age"];?> <br>
    Your Password is: <?php
    	echo $_POST["password"];?>

</div>

	
</body>
</html>