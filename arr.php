<?php
    // Array Declare
    // $arr = array();
    // $arr[] = "Quang";
    // $arr[] = "Linh";
    // $arr[] = "Dev";
    
    // foreach($arr as $i => $value){
    //     echo $i . $value . "<br/>";
    // }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';

    // if(!empty($arr)){
    //     foreach($arr as $key => $value){
    //         echo $value . "<br/>";
    //     }
    // }

    // //Key can be String, Int, Null, Boolean
    // $array = array(
    //     1 => "Lose", 
    //     "Begin" => 2,
    //     null => "Number",
    //     // true => "Bool", // Data is overwritten when key = 1 (1 => "Lose",)
    //     false => "Bo"
    // );

    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';

    // //Assign the key to the array
    // $array1 = array(
    //          "a",
    //     8 => "b",
    //          "c",
    //          "d",
    // );

    // echo '<pre>';
    // print_r($array1);
    // echo '</pre>';

    
    echo "creat/ modifyting";
    $array2 = array(5 => 23, 22 => 67);
    $array2[] = 89;
    $array2["x"] = 71;

    echo "Value";
    $a = array_values($array2);
   
    echo '<pre>';
    print_r($a);
    echo '</pre>';

    echo "Key";
    $aa = array_keys($array2);
   
    echo '<pre>';
    print_r($aa);
    echo '</pre>';

    
    // //Display value of array and reset index
    // echo '<pre>';
    // print_r(array_values($array2));
    // echo '</pre>';

    
    // // unset($array2[5]); //delete value in array
    // unset($array2); // delete all array
    // if(isset($array2)){
    //     echo '<pre>';
    //     print_r($array2);
    //     echo '</pre>';
    // }
    // else{
    //     echo "Undefined variable: array2";
    // }

    //Array multi

    // $book = array(
    //     "book1" => array(
    //         "name" => "Dev",
    //         "author" => "Dev_Author",
    //         "page" => 100
    //     ),
    //     "book2" => array(
    //         "name" => "Developer",
    //         "author" => "Developer_Author",
    //         "page" => 200
    //     ),
    //     "book3" => array(
    //         "name" => "Bug",
    //         "author" => "Bug_Author",
    //         "page" => 300
    //     ),
    // );
    // echo '<pre>';
    // print_r($book);
    // echo '</pre>';
    // if(!empty($book)){
    //     foreach($book as $key => $value){
    //         $name = $value["name"];
    //         $author = $value["author"];
    //         $page = $value["page"];
    //     echo "Name book: " . $name . ", Author: " . $author . ", Page: " . $page . "<br/>";
    //     }
    // }
?>