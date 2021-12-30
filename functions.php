<?php

if (!defined('WNOROWSKA_THEME_DIR')) {
    define('WNOROWSKA_THEME_DIR', get_theme_root() . '/' . get_template());
}

if (!defined('WNOROWSKA_THEME_URL')) {
    define('WNOROWSKA_THEME_URL', WP_CONTENT_URL . '/themes' . '/' . get_template());
}

require_once WNOROWSKA_THEME_DIR . '/libs/posttypes.php';



//if contact/aboutUs data is not set

function SHOW_ADMIN_PANEL_MESSAGE()
{
    $phone = esc_attr(get_option('WNOROWSKA_REQUIRE_PHONE'));
    $email = esc_attr(get_option('WNOROWSKA_REQUIRE_E-MAIL'));
    $adress = esc_attr(get_option('WNOROWSKA_REQUIRE_ADRESS'));
    $instagram = esc_attr(get_option('WNOROWSKA_REQUIRE_INSTAGRAM'));
    $facebook = esc_attr(get_option('WNOROWSKA_REQUIRE_FB'));
    $about = esc_attr(get_option('WNOROWSKA_REQUIRE_ABOUT'));

    if (empty($phone) && empty($email) && empty($adress) && empty($instagram) && empty($facebook)) {
        echo '<div style="background: red; color: #fff;" class="error"><p><strong>Szablon WNOROWSKASTUDIO wymaga podania danych kontaktowych!</strong></p></div>';
    }
    if (empty($about)) {
        echo '<div style="background: red; color: #fff;" class="error"><p><strong>Szablon WNOROWSKASTUDIO wymaga podania opisu firmy!</strong></p></div>';
    }
}
add_action('admin_notices', 'SHOW_ADMIN_PANEL_MESSAGE');


//contact data settings

function WNOROWSKA_ADMIN_INIT()
{
    register_setting('WNOROWSKA-THEME-CONTACT', 'WNOROWSKA_REQUIRE_PHONE');
    register_setting('WNOROWSKA-THEME-CONTACT', 'WNOROWSKA_REQUIRE_E-MAIL');
    register_setting('WNOROWSKA-THEME-CONTACT', 'WNOROWSKA_REQUIRE_ADRESS');
    register_setting('WNOROWSKA-THEME-CONTACT', 'WNOROWSKA_REQUIRE_INSTAGRAM');
    register_setting('WNOROWSKA-THEME-CONTACT', 'WNOROWSKA_REQUIRE_FB');
    register_setting('WNOROWSKA-THEME-ABOUT', 'WNOROWSKA_REQUIRE_ABOUT');
}

add_action('admin_init', 'WNOROWSKA_ADMIN_INIT');

function WNOROWSKA_SETTINGS_PAGE()
{
?>

    <div class="wrap">
        <h2>Ustawienia - strona kontaktowa</h2>

        <form action="options.php" method="post">
            <?php settings_fields('WNOROWSKA-THEME-CONTACT'); ?>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="WNOROWSKA_REQUIRE_PHONE">Numer Telefonu:</label>
                <input name="WNOROWSKA_REQUIRE_PHONE" id="WNOROWSKA_REQUIRE_PHONE" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_PHONE')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="WNOROWSKA_REQUIRE_E-MAIL">E-mail:</label>
                <input name="WNOROWSKA_REQUIRE_E-MAIL" id="WNOROWSKA_REQUIRE_E-MAIL" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_E-MAIL')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="WNOROWSKA_REQUIRE_ADRESS">Adress:</label>
                <input name="WNOROWSKA_REQUIRE_ADRESS" id="WNOROWSKA_REQUIRE_ADRESS" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_ADRESS')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="WNOROWSKA_REQUIRE_INSTAGRAM">Link do Instagrama:</label>
                <input name="WNOROWSKA_REQUIRE_INSTAGRAM" id="WNOROWSKA_REQUIRE_INSTAGRAM" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_INSTAGRAM')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="WNOROWSKA_REQUIRE_FB">Link do facebooka:</label>
                <input name="WNOROWSKA_REQUIRE_FB" id="WNOROWSKA_REQUIRE_FB" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_FB')); ?>">
            </h3>

            <input style="margin-top: 3vh; width: 150px; cursor: pointer" type="submit" value="Zapisz" />
        </form>
    </div>
<?php
}

function WNOROWSKA_SETTINGS_CONTACT()
{
    add_theme_page('WNOROWSKASTUDIO - Ustawienia strony kontaktowej', 'Kontakt - WNOROWSKASTUDIO', 'manage_options', 'WNOROWSKA-THEME-CONTACT', 'WNOROWSKA_SETTINGS_PAGE');
}

add_action('admin_menu', 'WNOROWSKA_SETTINGS_CONTACT');


function WNOROWSKA_SETTINGS_ABOUT()
{
?>

    <div class="wrap">
        <h2>Ustawienia - O mnie</h2>

        <form action="options.php" method="post">
            <?php settings_fields('WNOROWSKA-THEME-ABOUT'); ?>
            <h3 style="display: flex; flex-direction: column">
                <label style="margin-bottom: 1vh;" for="WNOROWSKA_REQUIRE_ABOUT">Edytuj treść strony</label>
                <textarea name="WNOROWSKA_REQUIRE_ABOUT" id="WNOROWSKA_REQUIRE_ABOUT" style="width: 100%; height: 50vh"><?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_ABOUT')); ?></textarea>
            </h3>

            <input style="margin-top: 3vh; width: 150px; cursor: pointer" type="submit" value="Zapisz" />
        </form>
    </div>
<?php
}

function WNOROWSKA_SETTINGS_ABOUTUS()
{
    add_theme_page('WNOROWSKASTUDIO - O mnie', 'O mnie - WNOROWSKASTUDIO', 'manage_options', 'WNOROWSKA-THEME-ABOUT', 'WNOROWSKA_SETTINGS_ABOUT');
}

add_action('admin_menu', 'WNOROWSKA_SETTINGS_ABOUTUS');

//navigation

if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'main_nav' => 'Główne menu nawigacji'
    ));
}
