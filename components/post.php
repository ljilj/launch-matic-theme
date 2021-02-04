<?php $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_id())); ?>
<div class="post-item card-grid-2">
    <a title=" <?php the_title(); ?>" href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image ?>" /></a>
    <h2 class="pages-list"><?php the_title(); ?></h2>
    <?php if (get_post_type() == "post") { ?>
    <?php }
    ?>
    <div class="d-flex">
        <div class="post-date">
            <?php the_time('F j, Y'); ?>
        </div>
        <div class="read-more">
            <a title=" <?php the_title(); ?>"  href="<?php the_permalink(); ?>"><span>Read more</span> <img class="blue-icon" src="<?php bloginfo('template_url') ?>/images/left-arrow.svg" /> <img class="hover-icon" src="<?php echo get_template_directory_uri(); ?>/images/Arrow-hover.svg" alt="facebook" /></a>
        </div>
    </div>
</div>