<?php
/*
  Template Name: accueil
*/
get_header();
include("navbar.php");
?>
<div><img src="<?php the_field('image_slider1')?>"></div>
<div><p <?php the_field('description1')?>></div>
<div><img src="<?php the_field('image_slider2')?>"></div>
<div><p <?php the_field('description2')?>></div>
<div><img src="<?php the_field('image_slider3')?>"></div>
<div><p <?php the_field('description3')?>></div>
