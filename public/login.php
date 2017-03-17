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
        // validate submission
        if (empty($_POST["email"]))
        {
            apologize("You must provide your E-Mail.");
        }
        else if (empty($_POST["pass"]))
        {
            apologize("You must provide your password.");
        }

        $qu = "SELECT * FROM users WHERE email = '" . htmlspecialchars($_POST["email"]) . "'";

        // query database for user
        $result = $mysqli -> query($qu);
        $rows = $result -> fetch_array();
        
        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["pass"], $row["pass"]))
            {
                // remember that user is now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];

                // redirect to dashboard
                redirect("/");
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }

?>
