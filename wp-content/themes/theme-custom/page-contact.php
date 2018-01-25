<?php /*Template Name: contact.php*/?>
<!-- Form register -->
<?php get_header();
include("navbar.php");?>
<div class="container" style="padding-top: 100px;">
  <div class="row">
    <div class="col-6" style="display: block; margin: auto">
      <form>
        <p class="h5 text-center mb-4"><?php the_field('titre_contact')?></p>

        <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="orangeForm-name" class="form-control">
            <label for="orangeForm-name"><?php the_field('nom_contact')?></label>
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" id="orangeForm-email" class="form-control">
            <label for="orangeForm-email"><?php the_field('email')?></label>
        </div>
        <div class="md-form">
         <i class="fa fa-pencil prefix grey-text"></i>
         <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
         <label for="form8"><?php the_field('message')?></label>
        </div>
        <div class="text-center">
            <button class="btn btn-primary"><?php the_field('bouton_envoyer')?></button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Form register -->
