<?php /* Template Name: Speakers */ ?>
<?php get_header(); ?>

<div class="Section">
    <div class="Section_speakers">
        <h1 class="Speakers_title"><?php the_title(); ?></h1>
        <a class="Speakers_banner" href="<?php echo home_url('/speaker/tony-robbins/'); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/banner_speakers.png" alt="Banner_speakers">
        </a>
        <?php $pillars = get_categories(); ?>
        <div class="Speakers_pillars_container">
            <div class="Move_arrows">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
            </div>
            <p>Mira los speakers por pilares</p>
            <div class="Speakers_pillars">
                <div class="Pillar_img" onclick="filterPillarAll()">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/speakers_pillar_all.png" alt="">
                    <p>Todos</p>
                </div>
                <?php foreach( $pillars as $pillar ) { 
                    if ($pillar->slug != 'sin-categoria') {?>
                <div class="Pillar_img <?php echo $pillar->slug; ?>" onclick="filterPillar('<?php echo $pillar->slug; ?>')">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/speakers_pillar_<?php echo $pillar->slug; ?>.png" alt="">
                    <p><?php echo $pillar->slug; ?></p>
                </div>
                    <?php } 
                }?>
            </div>
        </div>
        <div class="Speakres_grid">
            <?php
                $speaker = new WP_Query( array( 'post_type' => 'speaker', 'orderby' => 'publish_date',
                'order'   => 'ASC', 'posts_per_page' => -1));
                if ( $speaker->have_posts() ) :
                while ( $speaker->have_posts() ) : $speaker->the_post(); 
                $pillar = get_the_category($id); 
            ?>
            <a class="Speaker_info <?php echo isset($pillar[0]->slug)? $pillar[0]->slug : '' ?>" href="<?php the_permalink(); ?>">
                <?php $imagen = get_field("image_general");
                    if (isset($imagen['url']) == '') {?>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/speaker_min_1.png" />
                    <?php } 
                    else { ?>
                    <img src="<?php echo esc_url($imagen['url']); ?>" />
                <?php } ?>
                <section>
                    <h1 class="Speaker_info_title <?php echo isset($pillar[0]->slug)? $pillar[0]->slug : '' ?>"><?php the_title(); ?></h1>
                    <p class="Speaker_info_position"><?php the_field("cargo"); ?></p>
                </section>
            </a>
            <?php 
                endwhile; endif; 
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>