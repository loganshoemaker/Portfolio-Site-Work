<?php
/**
 * Template part for displaying resume items
 *
 * @package PortfolioTheme
 */
    wp_enqueue_style( 'resume-style', get_template_directory_uri() . '/resume-styles.css' );
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
		<?php /*
        
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
		endif; */?>
	</header><!-- .entry-header -->

	<div class="entry-content">

        <!-- Positions Section -->
        <section id="positions">
            
            <h1>Positions</h1>
            <div class="styled-separator styled-seperator-1"></div>
            
            <?php
                /* Get posts and order by custom field (start_date) */
                $positions = get_posts(array(
                'post_type'			=> 'post',
                'category'          => 7,
                'meta_key'			=> 'start_date',
                'orderby'			=> 'meta_value',
                'order'				=> 'DESC'
            ));        

            foreach ($positions as $post) :  setup_postdata($post); 
                $startDate = get_field('start_date', false, false);
                $startDate = new DateTime($startDate);
                $endDate = get_field('end_date', false, false);
                $endDate = new DateTime($endDate);
            ?>
            
                <div class="position">
                    <span class="item-title"><?php the_title(); ?></span><br>
                    <div class="resume-item-meta">
                        <span class="location"><?php echo get_field('location'); ?></span><br>               
                        <span><?php echo $startDate->format('Y M'); ?> - </span>
                        <span><?php echo $endDate->format('Y M'); ?></span>
                    </div>                    
                    <?php the_content(); ?>
                    <span>Skills Used: <?php echo get_field('skills_used'); ?></span>
                </div>    

            <?php endforeach; ?> 
            
        </section>
        
    </div>

</article>
