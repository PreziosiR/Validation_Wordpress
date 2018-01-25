<?php
/*
  Template Name: presentation.php
*/
get_header();
include("navbar.php");
 ?>

 <h1><?php the_field('titre_presentation')?></h1>
 <div><img src="<?php the_field('image')?>"></div>
 <div><?php the_field('description')?></div>
