<?php
    $na=$_POST['username'];
    $em=$_POST['email'];
    $pwd=$_POST['password'];

    $con = mysqli_connect("localhost", "root","", "village_development_system");
    if(!$con){
        echo mysqli_connect_error();
    }
    else{
        $q = "insert into administrator values('$na', '$em', '$pwd')";
        mysqli_query($con, $q);
        $res = mysqli_affected_rows($con);

        if($res>0)
        /* echo "You are successfully registered"; */
         header("Location: administrator.html"); 
        
        else
        echo "some problem occured";
    }
    ?>


<!-- Admin Sing-Up Page -->