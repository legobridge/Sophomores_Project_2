<?php

	// enable sessions
    session_start();
    // require authentication for all pages except /login.php, /logout.php, and /register.php
    if (!in_array($_SERVER["PHP_SELF"], ["/Project_2/public/store.php", "/Project_2/public/login.php", "/Project_2/public/logout.php", "/Project_2/public/register.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("/Project_2/public/login.php");
        }
    }
    
?>
