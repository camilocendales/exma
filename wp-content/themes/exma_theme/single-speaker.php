<?php get_header(); ?>

<?php /* Start the Loop */
while ( have_posts() ) :
    the_post();
    $speaker_id = $id;
    $type = get_the_category($speaker_id); 
?>
<div class="Section_speaker <?php echo isset($type[0]->slug)? $type[0]->slug : '' ?>">
    <div class="Section_speaker_card">
        <div class="Section_speaker_info">
            <div class="Section_speaker_info_resume">
                <p class="Section_speaker_info_type <?php echo isset($type[0]->slug)? $type[0]->slug : '' ?>"><?php echo isset($type[0]->name)? $type[0]->name : '' ?> SPEAKERS</p>
                <h1 class="Section_speaker_info_title <?php echo isset($type[0]->slug)? $type[0]->slug : '' ?>"><?php the_title(); ?></h1>
                <p class="Section_speaker_info_text"><?php the_field("resume"); ?></p>
                <div class="Section_speaker_info_social <?php echo isset($type[0]->slug)? $type[0]->slug : '' ?>">
                    <?php $linkedin = get_field("linkedin");
                     if( $linkedin != '' ) {?>
                    <a href="<?php the_field('linkedin');?>" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <?php } ?>
                    <?php $twitter = get_field("twitter");
                     if( $twitter != '' ) {?>
                    <a href="<?php the_field('twitter');?>" target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <?php } ?>
                    <?php $facebook = get_field("facebook");
                     if( $facebook != '' ) {?>
                    <a href="<?php the_field('facebook');?>" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <?php } ?>
                    <?php $instagram = get_field("instagram");
                     if( $instagram != '' ) {?>
                    <a href="<?php the_field('instagram');?>" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <?php } ?>
                    <?php $youtube = get_field("youtube");
                     if( $youtube != '' ) {?>
                    <a href="<?php the_field('youtube');?>" target="_blank">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <?php } ?>
                </div>
            </div>
            </div>
        <div class="Section_speaker_photo">
            <?php $image = get_field("image"); ?>
            <?php $image_mobile = get_field("image_mobile"); ?>
            <p class="Section_speaker_info_type <?php echo isset($type[0]->slug)? $type[0]->slug : '' ?>"><?php echo isset($type[0]->name)? $type[0]->name : '' ?> SPEAKERS</p>
            <picture>
                <source media="(max-width:849px)" srcset="<?php echo esc_url($image_mobile['url']); ?>" alt="speaker">
                <img src="<?php echo esc_url($image['url']); ?>" alt="speaker">
              </picture>
        </div>
    </div>
    <div class="Section_speaker_relation <?php echo isset($type[0]->slug)? $type[0]->slug : '' ?>">
        <p class="Section_speaker_relation_title">Descubre nuestros speakers</p>
        <div class="Section_speaker_relation_block">
            <?php
                $speaker = new WP_Query( array( 'post_type' => 'speaker', 'orderby' => 'rand',
                'order'   => 'ASC', 'post__not_in' => array($speaker_id) , 'posts_per_page' => 4));
                if ( $speaker->have_posts() ) :
                while ( $speaker->have_posts() ) : $speaker->the_post(); 
                $pillar = get_the_category($id); 
            ?>
            <a class="Section_speaker_relation_info <?php echo isset($pillar[0]->slug)? $pillar[0]->slug : '' ?>" href="<?php the_permalink(); ?>">
                <?php $imagen = get_field("image_general");
                    if (isset($imagen['url']) == '') {?>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/speaker_min_1.png" />
                    <?php } 
                    else { ?>
                    <img src="<?php echo esc_url($imagen['url']); ?>" />
                <?php } ?>
                <section>
                    <h1 class="Section_speaker_relation_info_title <?php echo isset($pillar[0]->slug)? $pillar[0]->slug : '' ?>"><?php the_title(); ?></h1>
                    <p class="Section_speaker_relation_info_position"><?php the_field("cargo"); ?></p>
                </section>
            </a>
            <?php 
                endwhile; endif; 
            ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>