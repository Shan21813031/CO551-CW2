<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php
    
   ///Data Migration used: https://github.com/fzaninotto/Faker


    include("_includes/config.inc");
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

   require_once ("vendor/autoload.php");

   $faker = Faker\Factory::create();

   for($x = 0; $x <= 5; $x++){

      $sql="INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)

      VALUES ('{$faker->randomNumber($nbDigits = 8, $strict = true)}','{$faker->password}',
      '{$faker->date($format = 'Y-m-d', $max = 'now')}','{$faker->firstName($gender = 'null'|'male'|'female')}','{$faker->lastName}','{$faker->streetAddress}',
      '{$faker->city}','{$faker->state}','{$faker->country}','{$faker->postcode}')";

      $result = mysqli_query($conn, $sql);

   }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>