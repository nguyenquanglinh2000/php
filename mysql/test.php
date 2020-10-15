<?php 
    $localhost = 'localhost';
    $username = 'root';
    $password = '';

    // //Connect server
    // $link = mysqli_connect($localhost, $username, $password) or die('Connect false');

    // // Create Data
    // $sql = "CREATE DATABASE create_data_new";
    // if(mysqli_query($link, $sql))
    // {
    //     echo 'Create successfully';
    // }else
    // {
    //     echo 'Create false' . mysqli_error($link);
    // }
    //mysqli_close($link);

    //-------------------------------------------



    // //Connect server -> database
    $database_name = 'create_data_new';

    $link_create_table = mysqli_connect($localhost, $username, $password, $database_name) or die("Connect false");

    // // Create Table
    // $cre_tb  = "CREATE TABLE information(
    //     first_name TEXT(20),
    //     last_name TEXT(20),
    //     email VARCHAR(30)
    // )";
    // if(mysqli_query($link_create_table, $cre_tb)){
    //     echo 'Create successfully';
    // }
    // else{
    //     echo 'Create false';
    // }
    // mysqli_close($link_create_table);


    //-------------------------------------------



    // Insert data

    $insert_data = "INSERT INTO information(first_name, last_name, email) VALUE ('Nguyen', 'Quang Linh', 'quanglinh@gmail.com')";
    if(mysqli_query($link_create_table, $insert_data)){
        echo 'Insert successfully';
    }
    else{
        echo 'Insert false';
    }
    mysqli_close($link_create_table);    

?>