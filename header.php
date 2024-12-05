<?php
/**
 * The header for the Genbrugsplanter theme.
 *
 * Displays the <head> section and the opening of the <body> and <header> tags.
 *
 * @package Genbrugsplanter
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,900;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>
    <?php wp_title(); ?>
  </title>
    <?php wp_head(); ?>
  </head>
  <body>