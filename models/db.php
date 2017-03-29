<?php

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    require_once("../controllers/helpers.php");

    $mysqli = new mysqli("localhost", "jharvard", "crimson", "ohelex");

    function login($email, $pass)
   	{
        global $mysqli;

        // Escape user entered strings
        $email = $mysqli -> real_escape_string($email);
        $pass = $mysqli -> real_escape_string($pass);
        
        // Formulate query string
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

        // Escape user entered strings
        $email = $mysqli -> real_escape_string($email);
        $name = $mysqli -> real_escape_string($name);
        $gender = $mysqli -> real_escape_string($gender);
        $pass = $mysqli -> real_escape_string(password_hash($pass, PASSWORD_DEFAULT));
        $college = $mysqli -> real_escape_string($college);

        // Formulate query string
        $qu = "INSERT IGNORE INTO `users` (`email`, `name`, `gender`, `pass`, `college`) VALUES('$email', '$name', '$gender', '$pass', '$college')";

        if ($result = $mysqli -> query($qu))
        {
            $result = $mysqli -> query("SELECT LAST_INSERT_ID() AS id");
            $rows = $result -> fetch_array();

            // Log in the user by storing user's ID in session
            $_SESSION["id"] = $rows["id"];

            return TRUE;
        }
        return FALSE;
   	}

    function update_password($id, $pass)
    {
        global $mysqli;
        $new_pass = password_hash($pass, PASSWORD_DEFAULT);
        $qu = "UPDATE users SET pass = '$new_pass' WHERE id = '$id'";
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
        $qu = "INSERT into `store` (`category`, `name`, `description`, `contact`, `price`, `date`, `user_id`) VALUES('$cat', '$name', '$desc', '$contact', '$price', '$date', '$id')";
        // Process Query
        $mysqli -> query($qu);
        
        // Upload image file
        $result = $mysqli -> query("SELECT LAST_INSERT_ID() AS id");
        $rows = $result -> fetch_array();
        $target_file = "../models/img/" . $rows["id"];
        if (!move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file))
        {
            apologize("Sorry, there was an error uploading your file.");
        }
    }
    
    function get_category_items($category)
   	{
        global $mysqli;
        echo "boobs";
        echo $category;
        
        // Formulate query string
        if ($category == 'all')
        {
            $qu = "SELECT * FROM `store`";
        }
        else
        {
            $qu = "SELECT * FROM `store` WHERE `category` = '$category'";
        }
        
        // Fetch associative array of items
        $rows = [];
        if ($result = $mysqli -> query($qu))
        {
            while ($row = $result -> fetch_assoc()) 
            {
                $rows[] = $row;
            }
        }
        return $rows;
   	}
    
    function get_user_items($id)
   	{
        global $mysqli;

        // Formulate query string
        $qu = "SELECT * FROM `store` WHERE `user_id` = $id";        
        
        // Fetch associative array of items
        $rows = [];
        if ($result = $mysqli -> query($qu))
        {
            while ($row = $result -> fetch_assoc()) 
            {
                $rows[] = $row;
            }
        }
        return $rows;
   	}
   	
?>
