<?php
    $na=$_POST['username'];
    $em=$_POST['email'];
    $pwd=$_POST['password'];

    $con = mysqli_connect("localhost", "root","", "village_development_system");
    if(!$con){
        echo mysqli_connect_error();
    }
    else{
        $q = "insert into volunteer values('$na', '$em', '$pwd')";
        mysqli_query($con, $q);
        $res = mysqli_affected_rows($con);

        if($res>0)
        echo "You are successfully registered";
        
        else
        echo "some problem occured";
    }
    ?>