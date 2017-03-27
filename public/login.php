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
        // Validate submission
        if (empty($_POST["email"]))
        {
            apologize("You must provide your E-Mail.");
        }
        else if (empty($_POST["pass"]))
        {
            apologize("You must provide your password.");
        }


        // Query database and attempt login
        // if details match, do the following
        $login_result = login($_POST["email"], $_POST["pass"]);
        if ($login_result !== FALSE)
        {
            // Remember that user is now logged in by storing user's ID in session
            $_SESSION["id"] = $login_result;
            
            // Redirect to dashboard
            redirect("/");
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }

?>