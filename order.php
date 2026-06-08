<?php

include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $clothes = mysqli_real_escape_string($conn, $_POST['clothes']);
    $additional_info = mysqli_real_escape_string($conn, $_POST['additional_info']);

    $sql = "INSERT INTO orders
    (full_name, phone, address, clothes, additional_info)
    VALUES
    ('$full_name', '$phone', '$address', '$clothes', '$additional_info')";

    if(mysqli_query($conn, $sql)) {

        echo "<script>
        alert('Submission Successful!');
        window.location='order.html';
        </script>";

    } else {

        echo "<script>
        alert('Error! Data not saved.');
        window.history.back();
        </script>";

    }
}

mysqli_close($conn);

?>
