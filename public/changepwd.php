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
        if (empty($_POST["password"]))
        {
            apologize("you must enter a password.");    
        }
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("the entered passwords must match.");
        }
        else
        {
            $qu = "UPDATE users SET pass = " . password_hash($_POST["password"], PASSWORD_DEFAULT) . " WHERE id = " . $_SESSION["id"];
            $mysqli -> query($qu);
            redirect("/");
        }
    }

?>
