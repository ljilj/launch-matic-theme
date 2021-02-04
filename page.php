<?php
get_header();
get_template_part("/components/modal");

// Download page
if (get_query_var('pagename') == "download") {
    ?>
    <main style="position:relative">
        <div class=" hero-section page-banner" style="background-image:
             url(<?php echo get_template_directory_uri(); ?>/images/download-bg-top.png);
             background-repeat: no-repeat;
             background-position: left top, right -190px;
             background-size: auto;">
            <div class="hero-section center-x">
                <div class="header-text section" style="background-image:
                     url(<?php echo get_template_directory_uri(); ?>/images/download-mockup.png); background-repeat: no-repeat; background-position: right center; background-size: 540px auto">
                    <div class=" center-y-block left" style="position:absolute; width:600px; position:relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sketch.svg" alt="">
                        <h1 class="left">Screenshot Mockup Sketch Freebie</h1>
                        <p style="width:80%">A free Sketch template for iOS & Android app screenshots. Design connected screenshots easily and for all required devices.</p>
                        <div class="left-to-right" style="padding-top:1em;">
                            <?php echo btn_main_compact("Download (13.2MB)", "*"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-x artify iphone-max-section" style="height: 950px; background-image: url(<?php echo get_template_directory_uri(); ?>/images/iphonex.svg),
             url(<?php echo get_template_directory_uri(); ?>/images/download-section-2.png);
             background-position: right bottom, left -18em">
            <h2>iPhone X Max</h2>

        </div> 
        <div class="center-x artify iphone-small mobile-sections" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/iphone8.svg);background-position-x: left;">
            <h2>iPhone 8 Plus</h2>
        </div> 
        <div class="center-x artify pixel-mobile mobile-sections" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/pixel.svg);background-position-x: right;">
            <h2>Pixel 3</h2>
        </div>
        <div class="fullwidth download-full">
            <div class="section center-x auto-margin artify">
                <div class="center-x artify stretch strech center-y">
                    <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/images/hero-mockup.png">
                    <div class="mobile-padding" style="padding:4em">
                        <h1 class="left">Get it for free!</h1>
                        <p style="width:80%">Aliquam ut lorem nunc. Donec hendrerit, odio tristique consequat dictum, dui erat venenatis tellus, quis accumsan dolor ipsum.</p>
                        <?php echo btn_main_compact("Download (13.2MB)", "*"); ?>
                    </div>
                    <img class="show-mobile" src="<?php echo get_template_directory_uri(); ?>/images/hero-mockup.png">
                </div>
            </div>
            <div style="height:6em;">
            </div> 
        </div> 
    </main>
    <?php
} 


// About page
else if (get_query_var('pagename') == "about") {
    ?>
    <main style="position:relative">
        <div class="hero-section center-y about-banner" style="background-image:
             url(<?php echo get_template_directory_uri(); ?>/images/graph-about-2.png),
             url(<?php echo get_template_directory_uri(); ?>/images/graph-about-1.png);
             background-repeat: no-repeat;
             background-position: top left, right;
             background-size: auto;"> 
            <div class="section auto-margin header-text">
                <h1>We are an ASO agency that specializes in screenshot design & conversion rates</h1>
                <div class="center-x" style="padding-top:1em;">
                    <?php echo btn_main_compact("Let’s work together", "*"); ?>
                </div>
            </div>
        </div>
        <div class="bg-client fullwidth">
            <div class="section auto-margin" style="overflow:auto">
                <h2 class="center-x">Our clients</h2>
                <div class="stretch auto-margin clients left-to-right our-client-wrapper" style="width:min-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/c1.png" alt="client image 1" width="80px" height="80px">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/c2.png" alt="client image 2" width="80px" height="80px">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/c3.png" alt="client image 3" width="80px" height="80px">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/c4.png" alt="client image 4" width="80px" height="80px">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/c5.png" alt="client image 5" width="80px" height="80px">
                </div>
            </div>
            <div class="design-bgs fullwidth">
                <div class="section auto-margin section-bottom-margin ">
                    <h2 class="center padding-bottom-2">Our designs</h2>
                    <?php echo do_shortcode('[slide-anything id="104"]') ?>
                    <div class="owl-carousel owl-theme" id="blog-slider">
                        <?php
                        $getposts = new WP_Query(array(
                            "posts_per_page" => -1,
                            'post_type' => 'designs',
                        ));
                        while ($getposts->have_posts()) {
                            $getposts->the_post();
                            get_template_part("/components/designs");
                        }
                        ?> 
                    </div>  
                </div>
            </div>
        </div>
        <div class="fullwidth download-full about-form-wrapper">
            <div class="section auto-margin">
                <h2 class="center-x">We’d love to work with you</h2>
                <label class="center-x">Tell us a little more about your project and we'll get back to you to talk details.</label>
                <div class="contact">
                    <?php echo do_shortcode('[contact-form-7 id="124" title="Contact form 1"]'); ?>
                </div>
                <div class="mobile-div" style="height:10em"></div>
            </div> 
        </div> 
    </div>
    </main>
    <?php
}

else {
    ?>
    <main>
        <div class="section">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

            <?php } ?>
        </div>
    </main>
    <?php
}
get_footer();
?>