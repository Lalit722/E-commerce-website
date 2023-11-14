<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = mysqli_real_escape_string($mysqli, $_POST['Name']);
    $Username = mysqli_real_escape_string($mysqli, $_POST['Username']);
    $Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
    $Password = mysqli_real_escape_string($mysqli, $_POST['Password']);
    

    $insert_query = "INSERT INTO demo1 ( Name, Username, Email, Password) VALUES (Name, 'Username', '$Email', '$Password')";

    if (mysqli_query($mysqli, $insert_query)) {
        echo "Data inserted successfully";
        header("Location: index.html");
		exit();
    } else {
        echo "Error inserting data: " . mysqli_error($mysqli);
    }
}
?>