<form action="Regform.php" method="post">
   Name: <input type="text" name="name"><br>
    Parentage: <input type="text" name="parentage"><br>
    Address: <input type="text" name="address"><br>
    DOB: <input type="date" name="date"><br>
    Gender:<br>
    <input type="radio" name="gender">Male
    <input type="radio" name="gender">Female<br>
    Password: <input type="password" name="password"><br>
    City: <select name="city">
        <option value="Srinagar">Srinagar</option>
        <option value="Budgam">Budgam</option>
    </select>
    <br>
    <input type="submit" value="Register">
    <input type="reset" value="Clear"><br>
</form> <br>
<?php
echo $_POST["name"];
echo $_POST["parentage"];
echo $_POST["address"];
echo $_POST["date"];
echo $_POST["gender"];
echo $_POST["password"];
echo $_POST["city"];
?>