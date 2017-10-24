<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PortfolioTheme
 */
    wp_enqueue_style( 'page-style', get_template_directory_uri() . '/css/page-style.css' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <section id="projects">

        <div class="section-title">

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="styled-separator styled-seperator-1"></div>

        </div>   

    </section>

	<div class="content">

        <?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
