<?php

    // configuration
    require("../controllers/helpers.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // Query database and attempt login
        // if details match, do the following
        $login_result = login($_POST["email"], $_POST["pass"]);
        if ($login_result !== FALSE)
        {
            // Log in the user by storing user's ID in session
            $_SESSION["id"] = $login_result;
            
            // Redirect to dashboard
            redirect("./index.php");
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }

?>
