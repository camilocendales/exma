<?php /* Template Name: Comunicados */ ?>
<?php get_header(); ?>
    <div class="Section">
        <div class="Comunicados_section">
            <?php
                $comunicado = new WP_Query( array( 'post_type' => 'comunicado', 'orderby' => 'publish_date',
                'order'   => 'ASC', 'posts_per_page' => -1));
                $i = 0;
                if ( $comunicado->have_posts() ) :
                while ( $comunicado->have_posts() ) : $comunicado->the_post();
                $i++;
            ?>
            <?php $image = get_field("image"); ?>
             <a href="<?php the_permalink(); ?>" class="Comunicados_content" style="background-image: url(<?php echo esc_url($image['url']); ?>);">
                <p>COMUNICADO</p>
                <h2>#<?php echo $i; ?></h2>
            </a>
            <?php 
                endwhile; endif; 
            ?>
        </div>
    </div>
<?php get_footer(); ?>
