
<?php
session_start();

include '../db/dbconnect.php';

$aid=$_SESSION ['aid'];
$content=htmlspecialchars($_POST['post-area']);

$sql = "INSERT INTO post VALUES (0, $aid,'$content',NOW(),NOW())";

if($con->query($sql)){
    echo "Post Added";
    $con->close();
    header("location:../profile.php");
}
else{
    echo $con->error;
    $con->close();
}
