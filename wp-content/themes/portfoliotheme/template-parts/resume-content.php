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
        
        <section id="projects">
            
            <h1>Projects</h1>

            <?php
                $projects = get_posts(array(
                'post-type' => 'post',
                'category'  => '8'
            ));

            foreach ($projects as $post) : setup_postdata($post);?>

                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

            <?php endforeach;?>
            
        </section>    

        
        
                    
        <!-- Positions Section -->
        <section id="positions">

            <h1>Positions</h1>

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

            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <p><?php echo get_field('location'); ?></p>
            <p><?php echo $startDate->format('Y M'); ?></p>
            <p><?php echo $endDate->format('Y M'); ?></p>

            <?php endforeach; ?> 
            
        </section>
        
    </div>
    
</article>