<?php
/**
* Template Name: Burburry template
*/

?>
<?php //here does template name know what to display
// colon replace {} in conditinals
?>
<?php if( have_post() ):?>
    <?php while( have_posts() ): ?>
      <?php the_post(); ?>
      <section class = "banner-example">
        <?php the_title();?>
        <?php//shows the title of the page?>
        <?php  the_content(); ?>
        <?php //shows the contant on the page  ?>
        <?php  the_post_thumbnail() ?>
        <h3>Rene better make this work or your fucked</h3>
      </section>
    <?php endwhile; ?>
<?php endif;?>
