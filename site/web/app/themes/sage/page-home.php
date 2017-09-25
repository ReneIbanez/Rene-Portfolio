<?php
/**
* Template name: Home Template
**/
// template
?>
<?php
// substanshiat wordpress query objects for projects
$arguments = array("post_type"=>"project");
$projects_query = new WP_Query($arguments);
?>
<!-- Example of static code -->
<h1>Rene Ibanez</h1>
<?php while (have_posts()) : the_post(); ?>
<?php the_content();?>
<?php endwhile;?>

<section class = "home-banner" >
    <h1 class = "My-Name">Rene Ibanez</h1>
    <p class ="firstP">I‘m a Front-end Web Developer who thrives collaborating with other creative minds. I have a passion for mentoring youth and helping them overcome hardship. With everything I create, I look to make an impact on communities and serve as an inspiration for the members of my own. Think we would work well together to bring positive change? </p>
    <span><<h3>Let's Talk</h3>></span>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php //can use this for my banner image ?>
        <?php //the featured image attached to LL Post/pages are rendered using the_post_thumbnail function ?>
        <?php the_post_thumbnail(); ?>
        <?php //the content in the WYSIWYG Editor ?>
        <?php the_content(); ?>
    <?php endwhile;?>
</section>



<!--<h2>diss is gana b here</h2>
 <?php if($projects_query->have_posts() ): ?>
    <?php while ($projects_query ->have_posts() ): ?>
        <?php $projects_query->the_post(); ?>
        <h1><?php the_field('client'); //example of dynamic ?></h1>
        <h2><?php the_field('project_name')?></h2>
    <img src = "<?php the_field('thumb:nail'); ?>"/>
    <?php if( have_rows('tech_stack') ): ?>
    <?php while(have_rows('tech_stack') ):?>
        <?php the_row(); ?>
       <p><?php the_sub_field('languages'); ?></p>
        <?php endwhile;  ?>
     <?php endif ;?>
   <?php endwhile; ?>
<?php endif ;?>-->
