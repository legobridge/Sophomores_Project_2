<!DOCTYPE html>

<html>

    <head>

        <link href="/Project_2/public/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>OhElEx: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>OhElEx</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/Project_2/public/js/jquery-1.11.3.min.js"></script>

        <script src="/Project_2/public/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/Project_2/public/"><img alt="OhElEx" src="/Project_2/public/img/logo.png"/></a>
                </div>
                <ul>
                <?php if (!empty($_SESSION["id"])): ?>
                    <li><a href="/Project_2/public/sell.php">Sell An Item</a></li>
                    <li><a href="/Project_2/public/changepwd.php">Change Password</a></li>
                <?php endif ?>
                    <li><a href="/Project_2/public/store.php">Go to Store</a></li>
                <?php if (!empty($_SESSION["id"])): ?>
                    <li><a href="/Project_2/public/logout.php"><strong>Log Out</strong></a></li>
                <?php endif ?>
                </ul>
            </div>

            <div id="middle">
