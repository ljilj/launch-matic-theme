<?php get_header(); ?>

<main>
    <?php
    while (have_posts()) {
        the_post();
        $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));

        if (get_field('banner_image')) {
            ?>
            <div class="postthumbnail-header" style="background-image: url('<?php echo get_field('banner_image') ?>')">
            </div>
        <?php } else { ?>
            <div class="postthumbnail-header" style="background-image: url('<?php echo $featured_image ?>')">
            </div>
        <?php } ?>
        <div class="post-content">
            <h1><?php the_title(); ?></h1>
            <div class="meta d-flex">
                <div class="date-content"><?php the_time('F j, Y'); ?></div>
                <div class="author-meta"><?php the_author(); ?></div>
                <div class="post-category"><?php
                    $category_detail = get_the_category($post->ID); 
                    foreach ($category_detail as $cd) {
                        echo "<a href='/category/" . $cd->slug . "'>" . $cd->cat_name . "</a>";
                    }
                    ?>
                </div>  
            </div>
            <div class="content-wrapper"><?php the_content(); ?></div>
            <div class="author-info d-flex">
                <div class="thumnbail-wrapper">
                    <div class="author-thumbnail">
                        <?php
                        echo get_avatar(get_the_author_email(), '96');
                        ?>
                    </div>
                </div>
                <div class="author-bio-wrapper">
                    <h4><?php the_author(); ?></h4>
                    <?php echo nl2br(get_the_author_meta('description')); ?>
                </div>
            </div>

            <div class="share-wrapper">
                <h4>Share this post</h4>   
                <?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,linkedin'  icon_order='f,t,l,p,x,r' show_icons='1'  social_image='']") ?>
            </div>
            <div class="related-posts-wrapper">
                <?php
                $terms = get_the_terms(get_the_ID(), 'category');
                $term_list = wp_list_pluck($terms, 'slug');
                $related_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'post__not_in' => array(get_the_ID()),
                    'orderby' => 'rand',
                );
                $related = new WP_Query($related_args);

                if ($related->have_posts()) :
                    ?>
                    <div class="post-navigation">
                        <h2>Related posts</h2>
                        <ul>
                            <?php
                            while ($related->have_posts()): $related->the_post();
                                $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
                                ?>
                                <li>
                                      <a title=" <?php the_title(); ?>" href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image ?>" /></a>
                                      <h5>
                                        <?php
                                        echo wp_trim_words(get_the_title(),6, '...');
                                        ?></h5>
                                    <div class="d-flex">
                                        <div class="post-date">
                                            <?php the_time('F j, Y'); ?>
                                        </div>
                                        <div class="read-more">
                                            <a title=" <?php the_title(); ?>" href="<?php the_permalink(); ?>">Read More ></a>
                                        </div>
                                    </div></li>
                            <?php endwhile; ?> 
                        </ul>
                    </div>
                    <?php
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div> 
    <?php } ?>
</main>
<?php
get_footer();
