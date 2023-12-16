<?php 
    $servername = "localhost";
    $database = "fcmnestudiantes";
    $username = "root";
    $password = "";

    //crear conexión
    $conn = mysqli_connect($servername, $username, $password, $database );

    //chequear conexión

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);
?>