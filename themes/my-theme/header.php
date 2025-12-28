<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body <?php body_class(); ?>>
      <header class="header">
        <div class="container_header">
          <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/ChatGPT_Image_Dec_25__2025__10_17_21_AM-removebg-preview.png" alt="logo">

        </div>
        <?php wp_nav_menu(['theme_location'=>'primary']); ?>
      </header>
<main>
  

