<?php

function template_header($title){

    // Get the amount of items in the shopping cart, this will be displayed in the header.
    $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

    echo <<<EOT
    <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <header>
            <div class="content-wrapper">
                <h1>Budget Gadget</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
                        <i class="fas fa-shopping-cart"></i><span>$num_items_in_cart</span>
                    </a>
                </div>
            </div>
        </header>
        <main>
    EOT; // equivalent to a double quote ""
}

function template_footer(){
    $year = date('Y');
    echo <<<EOT
            </main>
            <footer>
                <div class="content-wrapper">
                    <p>&copy; $year, Budget Gadget eStore</p>
                </div>
            </footer>
            <script src="./assets/js/script.js"></script>
        </body>
    </html>
    EOT;
}