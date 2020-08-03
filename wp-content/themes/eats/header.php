<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo($show); ?> ">
    <meta name="application-name" content="Eats">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link type="text/plain" rel="author" href="humans.txt" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="prerender" href="https://www.eats.com" /> -->
    <?php if (is_search()) { ?>
        <meta name="robots" content="index, nofollow">
    <?php } ?>

    <!-- Apple App -->
    <!-- <meta name="apple-mobile-web-app-title" content="Eats"> -->

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="/Favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/Favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/Favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/Favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/Favicons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/Favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/Favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/Favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/Favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/Favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/Favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/Favicons/favicon-160x160.png" sizes="160x160" />
    <meta name="msapplication-TileColor" content="#202020" />
    <meta name="msapplication-TileImage" content="/Favicons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/Favicons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/Favicons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/Favicons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/Favicons/mstile-310x310.png" /> -->

    <!-- ###############################BEGIN WP-HEAD############################### -->
    <?php wp_head(); ?>
    <!-- ###############################ENDING WP-HEAD############################### -->

    <style>
        .sr-only {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important;
        }

        .sr-only:focus {
            background-color: #eee;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000;
            /* Above WP toolbar. */
        }
    </style>
</head>

<body id="body" <?php body_class(); ?>>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php

    // Logo
    $NavLogo = file_get_contents(get_stylesheet_directory_uri() . '/src/img/logo.svg');

    // Menu
    $NavMenuMsgClose = "Hide Menu";
    $NavMenuIconClose = file_get_contents(get_stylesheet_directory_uri() . '/src/img/icons/close.svg');
    $NavMenuMsgOpen = "Show Menu";
    $NavMenuIconOpen = file_get_contents(get_stylesheet_directory_uri() . '/src/img/icons/menu.svg');

    // Search
    $NavSearchMsgClose = "Hide Search";
    $NavSearchIconClose = file_get_contents(get_stylesheet_directory_uri() . '/src/img/icons/close.svg');
    $NavSearchMsgOpen = "Show Search";
    $NavSearchIconOpen = file_get_contents(get_stylesheet_directory_uri() . '/src/img/icons/search.svg');
    ?>

    <div class="overflow-frame">
        <header id="header">
            <input type="checkbox" id="navMenu" name="navMenu" tabindex="-1" />

            <div class="container mx-auto">
                <div class="flex">
                    <div id="nav-menu-btn">
                        <label for="navMenu" class="toggle-btn" tabindex="0">
                            <div class="open">
                                <span class="sr-only"><?php $NavMenuMsgOpen; ?></span>
                                <?php echo $NavMenuIconOpen; ?>
                            </div>
                            <div class="close hidden">
                                <span class="sr-only"><?php $NavMenuMsgClose; ?></span>
                                <?php echo $NavMenuIconClose; ?>
                            </div>
                        </label>
                    </div>

                    <div id="nav-logo">
                        <a href="/" title="Return Home">
                            <?php echo $NavLogo ?><span>Eats.</span>
                        </a>
                    </div>

                    <input type="checkbox" id="navSearch" name="navSearch" tabindex="-1" />

                    <div id="nav-search">
                        <div class="frame">
                            <label for="navSearch" class="toggle-btn" tabindex="0">
                                <div class="open">
                                    <span class="sr-only"><?php $NavSearchMsgOpen; ?></span>
                                    <?php echo $NavSearchIconOpen; ?>
                                </div>
                                <div class="close hidden">
                                    <span class="sr-only"><?php $NavSearchMsgClose; ?></span>
                                    <?php echo $NavSearchIconClose; ?>
                                </div>
                            </label>

                            <div class="form">
                                <?php get_template_part('components/searchform'); ?>
                            </div>
                        </div>
                    </div>

                    <div id="nav-menu">
                        <?php wp_nav_menu(array(
                            'menu' => "Main Nav",
                            'depth' => 0,
                            'container' => false, 'menu_class' => false,
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        )); ?>
                    </div>
                </div>
            </div>
        </header>