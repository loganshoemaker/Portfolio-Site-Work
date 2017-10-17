<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PortfolioTheme
 */

?>

	</div><!-- #content -->


	<footer id="colophon" class="site-footer">
        
        <?php /*
        
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfoliotheme' ) ); ?>">
            <?php
				/* translators: %s: CMS name, i.e. WordPress. */ 

        // commented out by logan @10/12/2017
        ?>
        
        <?php /*
				printf( esc_html__( 'Proudly powered by %s', 'portfoliotheme' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
        
        // commented out by logan @10/12/2017
        ?>
        
        <?php /*
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'portfoliotheme' ), 'portfoliotheme', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->

        */ ?>

	</footer><!-- #colophon -->

    <?php 
        wp_enqueue_script( 'front-page-script', get_template_directory_uri() . '/js/site.js' );
    ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
