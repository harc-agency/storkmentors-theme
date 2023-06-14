<!DOCTYPE html>
<html lang="en" data-theme="storkmentor">

<head>
    <meta charset="UTF-8">
    <link rel='icon' href='favicon.ico' type='image/x-icon' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/app.css">

    <?php echo wp_head(); ?>

</head>

<body>
    <?php echo bb_inject_inertia(); ?>

    <?php echo wp_footer(); ?>
</body>

</html>