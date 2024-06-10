<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Nav Tab Example</title>
    <style>
        .nav {
            list-style-type: none;
            padding: 0;
        }
        .nav li {
            display: inline;
            margin-right: 10px;
        }
        .nav a {
            text-decoration: none;
            padding: 5px 10px;
            color: black;
            border: 1px solid black;
            border-radius: 5px;
        }
        .nav .active a {
            background-color: #007bff;
            color: white;
        }
        .nav .active a {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

$current_page = basename($_SERVER['PHP_SELF']);

<li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">

<body>
    <?php
    // Determine the current page
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>

    <ul class="nav">
        <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
            <a href="index.php">Home</a>
        </li>
        <li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
            <a href="about.php">About</a>
        </li>
        <li class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">
            <a href="services.php">Services</a>
        </li>
        <li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
            <a href="contact.php">Contact</a>
        </li>
    </ul>

</body>
</html>
