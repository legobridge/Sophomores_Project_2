<?php

    // configuration
    require("../controllers/helpers.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("sell_form.php", ["title" => "Sell"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        dump($_POST);
        sell(
            $_POST["category"],
            $_POST["name"],
            $_POST["description"],
            $_POST["contact"],
            $_POST["price"]
            );
        
        // Redirect to dashboard
        redirect('./index.php');
    }

?>
