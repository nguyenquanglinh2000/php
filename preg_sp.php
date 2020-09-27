<?php 
        function check_input($value, $type ="email"){
            switch ($type){
                case "email":
                    $check = '#^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$#';
                break;
                // case "user":
                //     $check = '##^([a-zA-Z0-9])+([a-zA-Z0-9\._-])$#';
                // break;
                case "pass":
                    $check = '#(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,8}$#';
                break;
                // case "web":
                //     $check = '^(http?://(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$';
                // break;
            }
            
            $flag = preg_match($check, $value);
            return $flag;
        }

?>