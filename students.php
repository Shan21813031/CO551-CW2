<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

?>

<!doctype html>
<html lang="en"l>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<center>
<h1>Student Table</h1>
<form enctype = "multipart/form-data" method = "post" action="studentsaction.php">
<table border ="2">
<tr>
<th>Students</th>
</tr>
<?php

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{

    echo "<tr>";
    echo "<td><input type = 'checkbox' name = 'checkbox[]' value = '".$row['studentid']."'>" . '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 100px; height: 100px;">' . $row['studentid'] . "</td>" . "<td>" . $row['dob'] . "</td>" ."<td>" . $row['firstname'] . "</td>" ."<td>" . $row['lastname'] . "</td>" ."<td>" . $row['house'] . "</td>" . "<td>" . $row['town'] . "</td>" . "<td>" . $row['county'] . "</td>" . "<td>" . $row['country'] . "</td>" . "<td>" . $row['postcode'] . "</td>";
    echo "</tr>";
    // studentid, password, dob, firstname, lastname, house, town, county, country, postcode
}
echo "</table>"
?>

<input type = "submit" name = "delete" id = "delete" value = "Delete Student Record(s)">

</form>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

