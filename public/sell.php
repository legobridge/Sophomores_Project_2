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

        // Get session id
        $id = $_SESSION["id"];

        // Escape user entered strings
        $cat = $mysqli -> real_escape_string($_POST["category"]);
        $name = $mysqli -> real_escape_string($_POST["name"]);
        $desc = $mysqli -> real_escape_string($_POST["description"]);
        $contact = $mysqli -> real_escape_string($_POST["contact"]);
        $price = $mysqli -> real_escape_string($_POST["price"]);
        $date = $mysqli -> real_escape_string(date('F d, Y'));

        // Formulate query string
        $qu = "INSERT into `store` (`category`, `name`, `description`, `contact`, `price`, `date`) VALUES('$cat', '$name', '$desc', '$contact', '$price', '$date')";
        $mysqli -> query($qu);

        // Upload image file (TODO)
        
    }

?>
