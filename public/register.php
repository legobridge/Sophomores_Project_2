<?php

    // configuration
    require("../controllers/helpers.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("registration_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(register(
            $_POST['email'],
            $_POST['name'],
            $_POST['gender'],
            $_POST['pass'],
            $_POST['college']
            ))
        {
            // Redirect to dashboard
            redirect('/Project_2/public/');
        }

        // else apologize
        apologize("E-Mail already exists in database, please try again.");
    }

?>
