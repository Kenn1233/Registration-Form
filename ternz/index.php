<html>
<head><title>Registration</title></head>
<body>
<center>
<form action="validate.php" method="POST">
FIRSTNAME: <br>
<input type="text" name="fName" placeholder = "First Name" value="" required >
<br>

MIDDLENAME: <br>
<input type="text" name="mName" placeholder = "Middle Name" value="" required >
<br>

LASTNAME: <br>
<input type="text" name="lName" placeholder = "Last Name" value="" required>
<br>

USERNAME: <br>
<input type="text" name="uName" placeholder = "Username" value="" required>
<br>

EMAIL: <br>
<input type="email" name="email" placeholder = "Email" value="" required>
<br>

PASSWORD: <br>
<input type="password" name="password" placeholder = "Password" value="" required>
<br>

RE-TYPE PASSWORD: <br>
<input type="password" name="repassword" placeholder = "Re-type Password" value="" required>
<br>
<input type="hidden" name="accStat" value="active">
<input type="submit" name="Reg" value="REGISTER">
<input type="reset" name="reset" value="CLEAR">

</center>
</form>
</body>
</html>