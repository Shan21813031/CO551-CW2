<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

if (isset($_POST['delete'])){
    $checkArray = $_POST['checkbox'];
    foreach($checkArray as $id){
        mysqli_query($conn,"Delete From student Where studentid =" . $id);
    }
    header("Location:students.php");
}

?>