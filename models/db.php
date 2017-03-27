<?php

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    require_once("../controllers/helpers.php");

    $mysqli = new mysqli("localhost", "sysadmin", "v1kCjsvLYytrBTGV", "ohelex");

    function login($email, $pass)
   	{
        global $mysqli;
        $email = $mysqli -> real_escape_string($email);
        $pass = $mysqli -> real_escape_string($pass);
        $qu = "SELECT * FROM users WHERE email = '$email'";
        
        if ($result = $mysqli -> query($qu))
        {
            $row = $result -> fetch_array();

            // Compare hash of user's input against hash that's in database
            if (password_verify($pass, $row["pass"]))
                return $row["id"];
            else
                return FALSE;
        }
   	}

   	function register($email, $name, $gender, $pass, $college)
   	{
        global $mysqli;
        
   	}

    function update_password($id, $pass)
    {
        global $mysqli;
        $new_pass = password_hash($pass, PASSWORD_DEFAULT);
        $qu = "UPDATE users SET pass = '$pass' WHERE id = '$id'";
        $mysqli -> query($qu);
    }

?>
