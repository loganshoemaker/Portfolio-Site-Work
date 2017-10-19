<?php
/**
 * Template part for displaying resume items
 *
 * @package PortfolioTheme
 */
    wp_enqueue_style( 'resume-style', get_template_directory_uri() . '/portfolio-styles.css' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
        
	</header><!-- .entry-header -->

	<div class="entry-content">
        
        <section id="projects">
            
            <div class="section-title">

                <h1>Projects</h1>
            
                <div class="styled-separator styled-seperator-1"></div>
                
            </div>          
                           
            <?php
                /* Get posts and order by custom field (start_date) */
                $portfolio_items = get_posts(array(
                    'post_type'			=> 'portfolio_item',
                    'meta_key'            => 'order',
                    'orderby'             => 'meta_value_num',
                    'order'               => 'DESC',
            ));        
            
            $num = 1;?>

            <a href="#portfolio-id-1" class="next next-first"></a>   
                    
            <?php $count = count($portfolio_items); ?>
            
            <?php foreach ($portfolio_items as $post) : setup_postdata($post);?>

                <article class="project" id="portfolio-id-<?php echo $num; ?>" style="background-image: url(<?php echo get_field('background-image'); ?>)">
                    
                    <h1><?php the_title(); ?></h1>
                    <div class="content"><?php the_content(); ?></div>

                    <?php $num = $num + 1; ?>

                    <a href="#portfolio-id-<?php echo $num; ?>" class="next next-article"></a>                     

                </article>  
            
            <?php endforeach;?>
            
        </section>    
      
    </div>
    
</article>
