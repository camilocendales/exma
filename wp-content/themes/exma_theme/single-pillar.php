<?php get_header(); ?>

<?php /* Start the Loop */
while ( have_posts() ) :
    the_post();
?>
<div class="Section_pillar">
    <div class="Section_pillar_video">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/banner_exma.png" alt="">
    </div>
    <div class="Section_pillar_bg <?php echo strtolower(get_the_title()); ?>">
        <div class="Section_pillar_card">
            <div class="Section_pillar_photo">
                <?php $image = get_field("image"); ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="pillar">
            </div>
            <div class="Section_pillar_info">
                <div class="Section_pillar_info_resume">
                    <p class="Section_pillar_info_type <?php echo strtolower(get_the_title()); ?>">PILARES DE CONTENIDOS</p>
                    <h1 class="Section_pillar_info_title <?php echo strtolower(get_the_title()); ?>"><?php the_title(); ?></h1>
                    <p class="Section_pillar_info_text"><?php the_field("resume"); ?></p>
                    <div class="Section_pillar_info_social <?php echo strtolower(get_the_title()); ?>">
                        <?php $image_skill_1 = get_field("image_skill_1");
                        if( $image_skill_1 != '' ) {?>
                            <img src="<?php echo esc_url($image_skill_1['url']); ?>" alt="skill">
                        <?php } ?>
                        <?php $image_skill_2 = get_field("image_skill_2");
                        if( $image_skill_2 != '' ) {?>
                            <img src="<?php echo esc_url($image_skill_2['url']); ?>" alt="skill">
                        <?php } ?>
                        <?php $image_skill_3 = get_field("image_skill_3");
                        if( $image_skill_3 != '' ) {?>
                            <img src="<?php echo esc_url($image_skill_3['url']); ?>" alt="skill">
                        <?php } ?>
                        <?php $image_skill_4 = get_field("image_skill_4");
                        if( $image_skill_4 != '' ) {?>
                            <img src="<?php echo esc_url($image_skill_4['url']); ?>" alt="skill">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="Section_pillar_relation <?php echo strtolower(get_the_title()); ?>">
            <p class="Section_pillar_relation_title">Descubre nuestros speakers</p>
            <div class="Section_pillar_relation_block">
                <?php
                    $speaker = new WP_Query( array( 'post_type' => 'speaker', 'orderby' => 'rand',
                    'order'   => 'ASC', 'category_name' => strtolower(get_the_title()) , 'posts_per_page' => 4));
                    if ( $speaker->have_posts() ) :
                    while ( $speaker->have_posts() ) : $speaker->the_post();  
                    $categ = get_the_category($id); 
                ?>
                <a class="Section_pillar_relation_info <?php echo isset($categ[0]->slug)? $categ[0]->slug : '' ?>" href="<?php the_permalink(); ?>">
                    <?php $imagen = get_field("image_general");
                        if (isset($imagen['url']) == '') {?>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/speaker_min_1.png" />
                        <?php } 
                        else { ?>
                        <img src="<?php echo esc_url($imagen['url']); ?>" />
                    <?php } ?>
                    <section>
                        <h1 class="Section_pillar_relation_info_title <?php echo isset($categ[0]->slug)? $categ[0]->slug : '' ?>"><?php the_title(); ?></h1>
                        <p class="Section_pillar_relation_info_position"><?php the_field("cargo"); ?></p>
                    </section>
                </a>
                <?php 
                    endwhile; endif; 
                ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>