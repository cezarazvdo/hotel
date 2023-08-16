<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php wp_head(); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <title>test</title>
    </head>
    <body class='body'>
        <?php get_header() ?>
        <?php get_footer() ?>
    </body>
</html>
<?php wp_footer();