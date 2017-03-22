<?php

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    require_once("../controllers/helpers.php");

    $mysqli = new mysqli("localhost", "sysadmin", "v1kCjsvLYytrBTGV", "ohelex");

    function login($email, $pass)
   	{

   	}

   	function register($email, $name, $gender, $pass, $college)
   	{

   	}

    function update_password($id, $pass)
    {
    	$qu = "UPDATE users SET pass = '" . password_hash($pass, PASSWORD_DEFAULT) . "' WHERE id = '" . $id . "'";
	    global $mysqli;
	    $mysqli -> query($qu);
    }

?>
