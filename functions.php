<?php
 
  if(!defined('ABSPATH')) {
    exit;
  }

  if(!class_exists('TemaHotel')) {
    class TemaHotel {
      function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'meusScripts'));
        add_action('after_setup_theme', array($this, 'configurarTema'));
      }
      
      public function configurarTema() {
        add_theme_support('post-thumbnails');  //TODO: verificar o que é
        add_theme_support('title-tag');
        register_nav_menus(
          array(
            'menu_principal' => 'Menu Principal',
            'menu_rodape' => 'Menu Rodapé'
          )
        );
      }
      
      public function meusScripts() {
        wp_enqueue_style('estilo-hotel', get_template_directory_uri().'style.css');
      }

    }
  } else {
    $temaHotel = new TemaHotel();
  }