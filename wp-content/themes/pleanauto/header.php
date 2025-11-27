<?php
if (!defined('ABSPATH')) exit;
?>
<?php
// Garante que o WordPress está sendo carregado corretamente
if (!defined('ABSPATH')) exit; 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sliders.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/main.min.js"></script>
<script>
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
    <?php wp_body_open(); ?>
<header class="site-header<?= !is_front_page() ? ' not-home' : ''; ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-5">
                <div class="logo">
                    <a href="<?php echo WP_URL; ?>/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_branca.svg" alt="<?php bloginfo( 'name' ); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-7 d-flex justify-content-end menu-header">
                <nav id="nav-desk" class="main-navigation">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu', 
                            'menu_class' => 'menu',
                        ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>