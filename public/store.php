<?php
    
    // configuration
    require("../controllers/helpers.php"); 

    $category = 'all';
    
    // if user reached page via POST (as by submitting a form via POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $category = $_POST["$category"];
    }
    
    $rows = get_category_items($category);
    
    $rows["title"] = "Store";
    
    render("store.php", $rows);
?>
