<!DOCTYPE html>
<html lang="en" data-theme="storkmentor">

<head>
    <meta charset="UTF-8">
    <link rel='icon' href='/favicon.ico' type='image/x-icon' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>

    <?php bb_inject_inertia(); ?>

    <?php wp_footer(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/app.css">

    <chat-widget style="--chat-widget-primary-color: #f6623e; --chat-widget-active-color:#f6623e ;--chat-widget-bubble-color: #f6623e" location-id="PoAetvngq6CJEjlRit6C" sub-heading="Enter your question below and we will get right back to you." prompt-avatar="https://firebasestorage.googleapis.com/v0/b/highlevel-backend.appspot.com/o/locationPhotos%2FPoAetvngq6CJEjlRit6C%2Fchat-widget-person?alt=media&token=b158280c-b2a3-4904-a900-c1dadef37313"></chat-widget>
    <script src="https://widgets.leadconnectorhq.com/loader.js" data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js"> </script>
</body>

</html>