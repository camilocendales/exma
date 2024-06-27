<?php /* Template Name: Membresias */ ?>
<?php get_header(); ?>

<div class="Section">
    <div class="Tickets_header">
        <p class="Ticket_info_type">VIVE LA EXPERIENCIA EXMA</p>
        <h1 class="Ticket_info_title">MEMBRESÍAS</h1>
    </div>
    <div class="Section_tickets">
        <div class="Tickets_colors_container">
            <div class="Move_arrows">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
            </div>
            <p>Selecciona tu memebresía</p>
            <div class="Tickets_colors">
                <?php
                    $membresia = new WP_Query( array( 'post_type' => 'membresia', 'orderby' => 'publish_date',
                    'order'   => 'DESC', 'posts_per_page' => -1));
                    if ( $membresia->have_posts() ) :
                    while ( $membresia->have_posts() ) : $membresia->the_post();
                ?>
                <div class="Colors_filter_container <?php echo $post->post_name; ?>">
                    <div class="Colors_filter <?php echo $post->post_name; ?>" onclick="filterTicket('<?php echo $post->post_name; ?>')"></div>
                    <p><?php echo strtolower(get_the_title()); ?></p>
                </div>
                <?php 
                    endwhile; endif; 
                ?>
            </div>
        </div>
        <?php
            $membresia = new WP_Query( array( 'post_type' => 'membresia', 'orderby' => 'publish_date',
            'order'   => 'DESC', 'posts_per_page' => -1));
            if ( $membresia->have_posts() ) :
            while ( $membresia->have_posts() ) : $membresia->the_post(); 
        ?>
        <div class="Tickets_container <?php echo $post->post_name; ?>">
            <div class="Tickets_container_info">
                <div class="Tickets_info <?php echo $post->post_name; ?>">
                    <h1><?php the_title(); ?></h1>
                    <?php the_field("lista"); ?>
                    <p>USD $<?php the_field("precio"); ?></p>
                    <small>* Una vez realizada la compra no hay cambios, cancelaciones, ni devoluciones por lo cual es muy importante verificar su compra antes de realizar el pago. <b>Todos nuestros precios están reflejados en dólares americanos.</b></small>
                </div>
               
                <div class="Tickets_button">
                    <?php $url_ticket = get_field("url_ticket"); ?>
                    <span class="Tickets_button_buy <?php echo $post->post_name; ?> <?php echo $url_ticket == ''? 'Sold_out' : 'Reserve' ?>"><a data-toggle="modal" data-target="#dollarModal_<?php echo $post->post_name; ?>"></a></span>
                </div>
                <!-- <div class="Tickets_button">
                    <?php $url_ticket = get_field("url_ticket"); ?>
                    <span class="Tickets_button_buy <?php echo $post->post_name; ?> <?php echo $url_ticket == ''? 'Sold_out' : 'Reserve' ?>"><a href="<?php the_field('url_ticket'); ?>" target="_blank"></a></span>
                </div> -->
            </div>
            <div class="Tickets_arena">
                <?php $imagen = get_field("arena");
                    if (isset($imagen['url']) == '') {?>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/arena_rojo+pic.png" /> 
                    <?php } 
                    else { ?>
                    <img src="<?php echo esc_url($imagen['url']); ?>" />
                <?php } ?>           
            </div>
            <div class="modal fade" id="dollarModal_<?php echo $post->post_name; ?>" tabindex="-1" role="dialog" aria-labelledby="dollarModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body dollar">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="Reservation">
                            <span class="Button_reservation"><a href="<?php the_field('url_ticket'); ?>" target="_blank"></a></span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <?php 
            endwhile; endif; 
        ?>
    </div>
</div>
<?php get_footer(); ?>