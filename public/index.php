<?php

    // configuration
    require("../controllers/helpers.php");
    
    $rows = [];
    
    if (!empty($_SESSION["id"]))
    {
        $rows = get_user_items($_SESSION["id"]);
    }
    
    $rows["title"] = "Dashboard";
    
    render("dashboard.php", $rows);
?>
