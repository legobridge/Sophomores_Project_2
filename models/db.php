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

    function sell($cat, $name, $desc, $contact, $price)
    {
        global $mysqli;
        
        // Get session id
        $id = $_SESSION["id"];

        // Escape user entered strings
        $cat = $mysqli -> real_escape_string($cat);
        $name = $mysqli -> real_escape_string($name);
        $desc = $mysqli -> real_escape_string($desc);
        $contact = $mysqli -> real_escape_string($contact);
        $price = $mysqli -> real_escape_string($price);
        $date = $mysqli -> real_escape_string(date('F d, Y'));

        // Formulate query string
        $qu = "INSERT into `store` (`category`, `name`, `description`, `contact`, `price`, `date`) VALUES('$cat', '$name', '$desc', '$contact', '$price', '$date')";
        $mysqli -> query($qu);

        // Upload image file (TODO)
        
    }
?>
