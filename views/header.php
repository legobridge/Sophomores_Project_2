<!DOCTYPE html>

<html>

    <head>

        <link href="../public/css/styles.css" rel="stylesheet"/>
        <link href="../public/css/sellstyles.css" rel="stylesheet"/>
        <link href="../public/css/homestyles.css" rel="stylesheet"/>
        
        <?php if (isset($title)): ?>
            <title>OhElEx: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>OhElEx</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="../public/js/jquery-1.11.3.min.js"></script>

        <script src="../public/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="../public/"><img alt="OhElEx" src="../public/img/logo.png"></a>
                </div>

                <ul>
                <?php if (!empty($_SESSION["id"])): ?>
                <li><a href="../public/sell.php">Sell An Item</a></li>
                <li><a href="../public/changepwd.php">Change Password</a></li>
                <?php endif ?>
                <li><a href="../public/store.php">Go to Store</a></li>
                <?php if (!empty($_SESSION["id"])): ?>
                <li><a href="../public/logout.php"><strong>Log Out</strong></a></li>
                <?php endif ?>
                </ul>
            </div>
            
            <div id="middle">         
