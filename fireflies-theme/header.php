<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fireflies</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); //includes scripts and stylesheets ?>
</head>

<body <?php body_class(); //displays class names for the body ?>>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
            <img id="navbar-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-glow.png"
                alt="Logo">
        </a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fas fa-bars" id="hamburger-menu"></i>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item mx-2">
                    <a class="nav-link text-nowrap" href="<?php echo get_site_url(); ?>#why-fireflies">Why Fireflies</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-nowrap" href="<?php echo get_site_url(); ?>#ways-to-spread-love">Ways to Spread Love</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-nowrap" href="<?php echo get_site_url(); ?>#footer">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>