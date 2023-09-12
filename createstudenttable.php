<?php
include("dbcon.php");
$sql="CREATE TABLE students (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(191) NOT NULL,
    email VARCHAR(191) NOT NULL,
    phone VARCHAR(191) NOT NULL,
    course VARCHAR(191) NOT NULL
)";
if(mysqli_query($con,$sql))
{
    echo "table is created";
}
else{
    echo "table not created".mysqli_error($con);
}
mysqli_close($con);

?>