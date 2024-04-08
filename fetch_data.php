<?php

$con = new mysqli("localhost", "sixdgt", "1234", "php_xml_example");

if($con->connect_error){
    die("Error: {$con->connect_error}");
} else {
    $sql = "SELECT * FROM kyc";

    $result = $con->query($sql);

    $response = array();

    if(mysqli_num_rows($result) > 0){
        // using foreach loop to get data
        while($data = mysqli_fetch_array($result)){
            $response[] = [
                "full_name" => $data['full_name'],
                "email" => $data['email'],
                "contact" => $data['contact'],
                "address" => $data['address'],
            ];
        }
        // foreach($row as $result){
        //     // array_push() this method takes two parameter
        //     // first parameter new array & second old/secondary array
        //     // all data from secondary array are added to new
        //     array_push($response, $row);
        // }
        echo json_encode($response);
    } else {
        echo "<h1>No Data Found</h1>";
    }
}