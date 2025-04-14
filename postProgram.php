<?php
// Check if the form is submitted
/* if ($_SERVER['REQUEST_METHOD'] == 'POST') { */
    // Get form data
    $district=$_POST['district'];
    $village=$_POST['village'];
    $date = $_POST['date'];
    $program = $_POST['program'];

    // Create a connection to the database
    $con = mysqli_connect("localhost", "root", "", "village_development_system");

    // Check if the connection was successful
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query to insert data into the volunteer_programs table
    $q = "INSERT INTO programs (district, village, date, programs) VALUES ('$district', '$village', '$date', '$program')";

    // Execute the query
    if (mysqli_query($con, $q)) {
        // Check if the data was inserted successfully
        $res = mysqli_affected_rows($con);
        if ($res > 0) {
            // Successfully inserted the data
            echo "You have successfully posted the program.";
        } else {
            // If no rows were affected, show an error
            echo "Some problem occurred while posting the program.";
        }
    } else {
        // If the query fails, show the error message
        echo "Error: " . mysqli_error($con);
    }

    // Close the database connection
/*     mysqli_close($con);
} */
?>
