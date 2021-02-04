<?php get_header(); ?>

<div class="blog-background-section">
    <div class="section auto-margin blog-section">
        <h2 class="center blog-page-heading">Blog posts & news</h2>
        <article class="blog-wrapper-home">
            <?php
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('posts_per_page=6' . '&paged=' . $paged);
            while ($wp_query->have_posts()) : $wp_query->the_post();
                get_template_part("/components/post");
            endwhile;
            ?>
        </article>
        
        <nav class="pagination">
            <?php pagination_bar($wp_query); ?>
        </nav>
        <?php wp_reset_postdata(); ?>
    </div>
</div> 

<?php get_footer(); ?>