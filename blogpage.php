<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="section auto-margin section-bottom-margin">
        <h2 class="center padding-bottom-2">Blog posts & news</h2>
       <article>

		<?php 
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=6' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    
		 <?php get_template_part("/components/post");?>

		<?php endwhile; ?>

	<nav class="pagination">
        <?php pagination_bar( $wp_query ); ?>
    </nav>

		<?php wp_reset_postdata(); ?>

	</article>
       </div>
    
<?php get_footer(); ?>