<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Small Business</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <?php wp_head(); ?>
</head>
<body>
    <nav class="header-nav">
 <h2><a href="<?php echo home_url(); ?>" class="logo">Small Business</a></h2>
        <?php
        $args = array(
            'theme_location' => 'primary'
        );
        ?>

        <?php wp_nav_menu($args); ?>
    </nav>

