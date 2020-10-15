<?php 

    //Connect server

    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $database_name = 'create_data_new';
    $connect = mysqli_connect($localhost, $username, $password, $database_name) or die("Connect false");

    
    // Create table
    
    // $cr_tb = "CREATE TABLE MyGuests (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //     )";

    // if(mysqli_query($connect, $cr_tb)){
    //     echo 'Create successfully';
    // }
    // else{
    //     echo 'Create false';
    // }


    // echo"<br/ >";

    // //Insert data
    
    // $insert_data = "INSERT INTO MyGuests(firstname, lastname, email )
    //  VALUES('NGUYEN QUANG LINH', 'dev', 'dev@mail.com')";
    // if(mysqli_query($connect, $insert_data)){
    //     $last_id = mysqli_insert_id($connect);
    //     echo "Insert successfuly, last id inserted: " . $last_id;
    // }
    // else{
    //     echo "Insert false";
    // }
    // mysqli_close($connect);


    // Delete data

    $del = "DELETE FROM MyGuests WHERE lastname='DEV'";
    if(mysqli_query($connect,$del)){
        echo "Delete successfuly";
    }

    // UPDATE data


    // $update_data = "UPDATE MyGuests SET lastname='DEV' WHERE id=12";
    // if(mysqli_query($connect, $update_data)){
    //     echo "Update successfuly";
    // }
?>