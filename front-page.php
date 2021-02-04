<?php get_header(); ?>
<?php get_template_part("/components/modal"); ?>

<main style="position:relative">
    <div class="hero-section">
        <img class="rellax top-img-1 hide-mobiles" data-rellax-speed="10" src="<?php echo get_template_directory_uri(); ?>/images/yellobg-1.png" >
        <img class="rellax top-img-2" data-rellax-speed="20"  src="<?php echo get_template_directory_uri(); ?>/images/yellow-bg-2.png"  >
        <img class="mobile-bg"   src="<?php echo get_template_directory_uri(); ?>/images/mobile-bg.png"  >
        <div class="hero-section center-x home-banner">
            <div class="header-text section center-x align-center">
                <div class="banner-text wow fadeInUp" data-wow-delay="0.1s" style=" width:600px; position:relative">
                    <h1 class="left">Design screenshots without a designer</h1>
                    <p style="width:80%">Introducing LaunchMatic. Increase your installs with visually stunning iOS & Android screenshots, created instantly.</p>
                    <div class="left-to-right" style="overflow:visible; margin:auto; width:max-content">
                        <form action="submit" class="left-to-right">
                            <input class="email-input email-white" style="background-color:white;" type="email" placeholder="Your email address" />
                            <div style="width:1.5em;" class="hide-mobile"></div>
                            <button class="email-btn email-btn-color button-btn"> <span class="hide-mobiles">Join Early Access </span><img class="show-mobile" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" ></button>
                        </form> 
                    </div>
                </div>
                <div class="mobile-images center-x align-center">
                    <img alt= "img1" class="rellax fadeInUp wow" data-rellax-speed="4"  data-wow-delay="0.5s" src="<?php echo get_template_directory_uri(); ?>/images/First 3.png" />
                    <img alt= "img2" class="rellax fadeInUp wow" data-rellax-speed="8"  data-wow-delay="0.1s" src="<?php echo get_template_directory_uri(); ?>/images/Second 2.png" />
                </div>
            </div>
        </div>
    </div> 


    <div class="section auto-margin section-bottom-margin highlight-wrapper ">
        <h2 class="center padding-bottom-2 wow fadeInUp" data-wow-delay="1s">Highlights</h2>
        <div class="container-card-grid">
            <div class="card-grid wow fadeInUp" data-wow-delay="0.5s">
                <div>
                    <img src=" <?php echo get_template_directory_uri(); ?>/images/pre-made-templates-icon.svg">
                    <div>
                        <h3>Pre-made Templates</h3>
                        <p>Choose from a huge selection of highly customizable pre-made templates </p>
                    </div>
                </div>
                <div class="card-grid-select"></div>
            </div>
            <div class="card-grid wow fadeInUp" data-wow-delay="0.8s">
                <div>
                    <img src=" <?php echo get_template_directory_uri(); ?>/images/caption-locatization-icon.svg">
                    <div>
                        <h3>Caption Locatization</h3>
                        <p>Supporting all 60 languages available on iOS/Android is overwhelming. Let us do the work</p>
                    </div>
                </div>
                <div class="card-grid-select"></div>
            </div>
            <div class="card-grid wow fadeInUp" data-wow-delay="1s">
                <div>
                    <img src=" <?php echo get_template_directory_uri(); ?>/images/one-siza-fits-all-icon.svg">
                    <div>
                        <h3>One Size Fits All</h3>
                        <p>A single design automatically generates designs for all other iOS and Android devices, instantly</p>
                    </div>
                </div>
                <div class="card-grid-select"></div>
            </div>
            <div class="card-grid wow fadeInUp" data-wow-delay="1.2s">
                <div>
                    <img src=" <?php echo get_template_directory_uri(); ?>/images/app-store-optimized-icon.svg">
                    <div>
                        <h3>App Store Optimized</h3>
                        <p>Templates are created in-house by ASO Experts who focus on best formats to increase your conversion</p>
                    </div>
                </div>
                <div class="card-grid-select"></div>
            </div>
            <div class="card-grid wow fadeInUp" data-wow-delay="1.4s">
                <div>
                    <img src=" <?php echo get_template_directory_uri(); ?>/images/Vector-1.svg">
                    <div>
                        <h3>Completely Customizable</h3>
                        <p>Change everything from the background, screens, captions, custom images, devices and more.</p>
                    </div>
                </div>
                <div class="card-grid-select"></div>
            </div>
            <div class="card-grid wow fadeInUp" data-wow-delay="1.6s">
                <div>
                    <img src=" <?php echo get_template_directory_uri(); ?>/images/automatic-screenshots-upload-icon.svg">
                    <div>
                        <h3>Pre-made Templates</h3>
                        <p>Stop the drag and drop with automatic screenshot upload for all devices and locales</p>
                    </div>
                </div>
                <div class="card-grid-select"></div>
            </div>
        </div>
    </div>


    <div class="design-bg fullwidth">
        <div class="section auto-margin section-bottom-margin">
            <h2 class="center padding-bottom-2">Our designs</h2>
                <?php echo do_shortcode("[slide-anything id='104']") ?>
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


    <div class="blog-bg fullwidth">
        <div class="section auto-margin section-bottom-margin ">
            <h2 class="center padding-bottom-2">Blog posts & news</h2>
            <div calss="container-card-grid" class="blog-wrapper-home">
                <?php
                $getposts = new WP_Query(array(
                    "posts_per_page" => 6
                ));
                while ($getposts->have_posts()) {
                    $getposts->the_post();
                    get_template_part("/components/post");
                }
                ?>
            </div>
            <div class="center-x padding-top-4">
                <?php echo btn_main("All posts", "*"); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>