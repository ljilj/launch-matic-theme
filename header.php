<!DOCTYPE html>
<html>

    <head>
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">
        <?php wp_enqueue_script('jquery'); ?>
        <?php wp_head(); ?>

        <!-- razlicite velicine ikonica na kartici - Android Chrome koristi Apple touch icon-->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png">
        <!-- webmanifest - kolekcija web tehnologija
        progresivne web aplikacije (PWA)
        mogu se preuzeti unapred i raditi van mreze
        pruza informacije o web aplikaciji u JSON tekstualnoj datoteci (u images folderu)
        omogucava brzi pristup i bogatije iskustvo
        PWA manifests - ukljucuje njegovo ime, autora, ikone, verziju, opis i listu potrebnih resursa -->
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/site.webmanifest">
        <!-- Windows 8.0, 8.1  -->
        <meta name="msapplication-TileColor" content="#da532c">       
        <!-- meta oznaka u boji za temu da bismo postavili boju trake sa alatkama  -->
        <meta name="theme-color" content="#3600AA">
    </head>
</head>

<body>
    <header class="center-y center-x">
        <div class="section stretch strech min-padding-lr">

            <a href="/" ><img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"></a>
            
            <nav class="nav">
                <a href="<?php echo get_site_url() ?>" class="
                <?php
                if (is_front_page()) {
                    echo 'active-nav';
                }
                ?>">Home</a>
                <a href="<?php echo get_site_url() ?>/about" class="
                <?php
                if (get_query_var('pagename') == "about") {
                    echo 'active-nav';
                }
                ?>">About</a>
                <a href="<?php echo get_site_url() ?>/blog" class="
                <?php
                if (get_query_var('pagename') == "blog") {
                    echo 'active-nav';
                }
                ?>">Blog</a>
                <a href="<?php echo get_site_url() ?>/download" class="
                <?php
                if (get_query_var('pagename') == "download") {
                    echo 'active-nav';
                }
                ?>">Download</a>
            </nav>


            <div class="show-mobile">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="mobile-menu">
                <nav class="mobile-nav">
                    <a href="<?php echo get_site_url() ?>" class="
                    <?php
                    if (is_front_page()) {
                        echo 'active-nav';
                    }
                    ?>">Home</a>
                    <a href="<?php echo get_site_url() ?>/about" class="
                    <?php
                    if (get_query_var('pagename') == "about") {
                        echo 'active-nav';
                    }
                    ?>">About</a>
                    <a href="<?php echo get_site_url() ?>/blog" class="
                    <?php
                    if (get_query_var('pagename') == "blog") {
                        echo 'active-nav';
                    }
                    ?>">Blog</a>
                    <a href="<?php echo get_site_url() ?>/download" class="
                    <?php
                    if (get_query_var('pagename') == "download") {
                        echo 'active-nav';
                    }
                    ?>">Download</a>
                </nav>
            </div>
    </header>