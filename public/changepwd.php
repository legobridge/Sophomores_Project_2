<?php

    // configuration
    require("../controllers/helpers.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("cp_form.php", ["title" => "Change Password"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["pass"]))
        {
            apologize("you must enter a password.");
        }
        else if ($_POST["pass"] != $_POST["confirmation"])
        {
            apologize("the entered passwords must match.");
        }
        else
        {
            update_password($_SESSION["id"], $_POST["pass"]);
            redirect("/");
        }
    }

?>
