<?php get_header(); ?>
<?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post(); 
?>
<div class="Section">
    <div class="Section_pdf">
        <iframe  class="Pdf_embed" src="<?php the_field("pdf"); ?>" width="1000" height="750" 
            type="application/pdf" title="PDFEmbed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>