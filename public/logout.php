<?php

    // configuration
    require("../controllers/helpers.php"); 

    // Log out current user, if any
    logout();

    // Redirect user to home page
    redirect("dashboard.php");

?>
