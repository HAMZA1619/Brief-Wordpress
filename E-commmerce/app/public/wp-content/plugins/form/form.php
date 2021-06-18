<?php 
/**
 * Plugin Name:       Form
 * Description:       formulaire de contact.
 * Author:            Hamza ELGLAOUI
 */


          add_shortcode( 'cantact',  function(){
          return require __DIR__."/contact.php";
         });
          
          ?>