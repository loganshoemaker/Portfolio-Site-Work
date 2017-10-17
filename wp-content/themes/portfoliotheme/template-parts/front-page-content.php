<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PortfolioTheme
 */

?>

<!-- Homepage Content -->

<!--<strong>From front-page-content.php</strong>-->

<?php if ( is_front_page() ) {
            // Front page stylesheet
            wp_enqueue_style( 'front-page-style', get_template_directory_uri() . '/front-page-styles.css' );
        }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
		<?php
        /*
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php portfoliotheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;
        
                */?>
	</header><!-- .entry-header -->
    
        <?php 
			the_content( sprintf(
				wp_kses(
		
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'portfoliotheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
            /*
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfoliotheme' ),
                    'after'  => '</div>',
                ) );
            */ 
        ?>
     
        <?php

            $posts = get_posts(array(
                'post_type' => 'page',
                'meta_key' => 'parent_page',
	             'meta_value' => 1
            ));

            if( $posts ):

        ?>

        <?php foreach( $posts as $post ): 

        setup_postdata( $post );?>

        <div class="home-category-page">
            <a href="<?php the_permalink(); ?>">

                <span><?php the_title(); ?></span>

                <div class="styled-separator"></div>

                <div class="home-category-page-image-container" style="background: url(<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>);">   
                </div>
            </a>    
        </div>
    
        <?php endforeach; ?>

        <?php wp_reset_postdata(); ?>

        <?php endif; ?>

	<footer class="entry-footer">
		<?php portfoliotheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
