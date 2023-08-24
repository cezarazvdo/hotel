<?php
 
  if(!defined('ABSPATH')) {
    exit;
  }

  if(!class_exists('TemaHotel')) {
    class TemaHotel {
      function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'custom_styles'));
        add_action('after_setup_theme', array($this, 'theme_config'));
      }
      
      public function theme_config() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        register_nav_menus(
          array(
            'menu_principal' => 'Menu Principal',
            'menu_rodape' => 'Menu Rodapé'
          )
        );
      }
      
      public function custom_styles() {
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('header_style', get_template_directory_uri().'/assets/css/header.css');
        wp_enqueue_style('footer_style', get_template_directory_uri().'/assets/css/footer.css');
        wp_enqueue_style('presentation_style', get_template_directory_uri().'/assets/css/presentation.css');
        wp_enqueue_style('highlights_style', get_template_directory_uri().'/assets/css/highlights.css');
      }

    }
  }
  
  if(class_exists('TemaHotel')) {
    $temaHotel = new TemaHotel();
  }