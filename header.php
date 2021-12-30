<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>

    <?php if (is_search()) : ?>
        <meta name="robots" content="noindex, nofollw" />
    <?php endif; ?>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/icon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nav.min.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header>
        <nav>
            <div id="nav_logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="logo"></a>
                </a>
            </div>
            <?php wp_nav_menu(array(
                'name' => 'Menu główne'
            )) ?>
            </div>
            <div id="nav_contactBox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt="phone"><span><?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_PHONE')) ?></span>
        </nav>
        <div id="nav_toggler">
            <span></span><span></span><span></span>
        </div>
    </header>