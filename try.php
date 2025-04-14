<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table with database</title>
    <style >
        .data-table{
            margin:auto;
            border: 2px solid black;
            font-size:20px;
            color:red;
        }
    </style>
</head>
<body>
    <table class="data-table" border=1>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","village_development_system");
        if($conn -> connect_error){
            die("Connection failed:".$conn->connect_error);
        }
        $sql="SELECT name, email, pwd from Administrator";
        $result = $conn-> query($sql);

        if($result -> num_rows > 0){
            while ($row = $result -> fetch_assoc()){
                echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["pwd"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn -> close();
        ?>
    </table>
</body>
</html>