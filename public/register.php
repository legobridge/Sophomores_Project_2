<?php

    // configuration
    require("../controllers/helpers.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["email"]))
        {
            apologize("you must enter an E-Mail.");    
        }
        else if (empty($_POST["pass"]))
        {
            apologize("you must enter a password.");
        }
        else if ($_POST["pass"] != $_POST["confirmation"])
        {
            apologize("the entered passwords must match.");
        }
        
        // Escape user entered strings
        $email = $mysqli -> real_escape_string($_POST['email']);
        $name = $mysqli -> real_escape_string($_POST['name']);
        $gender = $mysqli -> real_escape_string($_POST['gender']);
        $pass = $mysqli -> real_escape_string(password_hash($_POST['pass'], PASSWORD_DEFAULT));
        $college = $mysqli -> real_escape_string($_POST['college']);

        // Formulate query string
        $qu = "INSERT IGNORE INTO `users` (`email`, `name`, `gender`, `pass`, `college`) VALUES('$email', '$name', '$gender', '$pass', '$college')";

        $result = $mysqli -> query($qu);

        if ($result === FALSE)
        {
            apologize("E-Mail already exists in database, please try again.");
        }
        else
        {
            $result = $mysqli -> query("SELECT LAST_INSERT_ID() AS id");
            $rows = $result -> fetch_array();
            $_SESSION["id"] = $rows[0]["id"];
            redirect("/");
        }
    }

?>
