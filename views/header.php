<!DOCTYPE html>

<html>

    <head>

        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="/css/homestyles.css" rel="stylesheet"/>
        
        <?php if (isset($title)): ?>
            <title>OhElEx: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>OhElEx</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="OhElEx" src="/img/logo.png"></a>
                </div>

                <ul>
                <?php if (!empty($_SESSION["id"])): ?>
                    <li class="topnavlink"><a href="/sell.php">Sell An Item</a></li>
                    <li class="topnavlink"><a href="/changepwd.php">Change Password</a></li>
                <?php endif ?>
                    <li class="topnavlink"><a href="/store.php">Go to Store</a></li>
                <?php if (!empty($_SESSION["id"])): ?>
                    <li class="topnavlink"><a href="/logout.php">Log Out</a></li>
                <?php endif ?>
                </ul>
            </div>
            
            <div id="middle">         
