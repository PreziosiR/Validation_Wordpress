<?php
/*
  Plugin Name: monPlugin
  Description: dit Bonjour j'aime les poneys
  Version: 0.1
*/

 add_shortcode('hello', 'displayPoney');

 function displayPoney($atts)
 {
   /*var dump($atts);die;
   $a = shortcode_atts( array('size' => 0), $atts);
   return "size = {$a['size']}px";
   */
   return "j'aime les poneys";
 }
