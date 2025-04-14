<?php
$con = mysqli_connect("localhost","root","","village_development_system");
if(!$con){
    echo mysqli_connect_error();
}
else{
    $q = "select * from administrator where email='$email' and pwd='$pwd'";
    $res = mysqli_query($con,$q);
    if($res>0)
    header("location:administrator.html");
}
?>


<!-- Admin log in page -->