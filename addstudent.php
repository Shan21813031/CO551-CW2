<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

//studentid, password, dob, firstname, lastname, house, town, county, country, postcode

?>
<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<form enctype="multipart/form-data" action="addstudentaction.php" method="post">
	Enter first name :
	<input type='text' name='firstName' /><br/>
	Enter last name :
	<input type='text' name='lastName'/><br/>
    Enter password :
	<input type='text' name='pword'/><br/>
    Enter date of birth (YYYY-MM-DD) :
	<input type='text' name='dob'/><br/>
    Enter first line of address :
	<input type='text' name='firstAddress'/><br/>
    Enter town or city :
	<input type='text' name='city'/><br/>
    Enter county :
	<input type='text' name='county'/><br/>
    Enter country :
	<input type='text' name='country'/><br/>
	Enter postcode :
	<input type='text' name='postcode'/><br/><br/>
	Student image :
    <input  type="file" name="studentpic" accept="image/jpeg" class="form-control" />
	<input type='submit' value='Save Data' />
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
