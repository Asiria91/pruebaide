<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testid
 */

get_header();
?>

         <?php  ?>
     
		<main class="clear">
      <div class="grid">

			<?php get_sidebar(); ?>

		<div class="col-large-8 col-wooser-9">
          <div class="main-content">
            <div class="hero hero--mask hero--default">
                <div class="compartment">
                  <h1 class="hero__title"><?php echo get_the_title(); ?></h1>
                </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/interior.jpg" alt="undefined">
              </div>
              

            

              <div class="section">
              <div class="compartment">
                        <?php if ( have_posts() ) : the_post(); ?>
    							<?php echo the_content(); ?>
							<?php endif; ?>
            </div>	
    	 </div><!-- .section -->

    	</div>
    </div>
</div>

		</main><!-- #main -->

<?php

get_footer();
