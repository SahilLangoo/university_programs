<!DOCTYPE html>
<html>
<head>
    <title>Hello PHP</title>
</head>
<body>
<fieldset>
    <legend align =center>Form</legend>
    <form action="Get.php" method="get" accept-charset="utf-8">
        Name:<input type="text" name="name" placeholder="Name"><br>
        Age:<input type="number" name="age" placeholder="Age"><br>
        Password:<input type="password" name="password" value="" placeholder="Password"><br>
        <input type="submit">
    </form>
</fieldset><br>
<div align=center>

    Your Name is: <?php
    echo $_GET["name"];?> <br>
    Your Age is: <?php
    echo $_GET["age"];?> <br>
    Your Password is: <?php
    echo $_GET["password"];?>

</div>


</body>
</html>