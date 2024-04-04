<?php

$con = new mysqli("localhost", "sixdgt", "1234", "php_xml_example");

if($con->connect_error){
    die("Error: {$con->connect_error}");
} else {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO kyc(`full_name`, `email`, `contact`, `address`, `password`) VALUES('$full_name', '$email', '$contact', '$address', '$password')";

    if($con->query($sql) === TRUE){
        echo "Kyc submitted successfully";
    } else {
        echo "Something went wrong.";
    }
}