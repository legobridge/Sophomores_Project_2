<?php
    
    // configuration
    require("../controllers/helpers.php"); 

    $category = 'all';
    
    // if $_GET["category"] is not empty
    if (!empty($_GET["category"]))
    {
        $category = $_GET["category"];
    }
    
    $rows = get_category_items($category);
    
    $rows["title"] = strtoupper($category);
    
    render("store.php", $rows);
?>
