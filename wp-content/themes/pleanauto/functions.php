<?php
    DEFINE('WP_URL', get_bloginfo('url'));
    DEFINE('WP_NAME', get_bloginfo('name'));
    DEFINE('WP_TEMPLATE', get_bloginfo('template_url'));
    DEFINE('WP_DESCRIPTION', get_bloginfo('description'));

    require_once get_template_directory() . '/custom-posts.php';
    require_once get_template_directory() . '/custom-taxonomies.php';

    // Adiciona tag title
    add_theme_support('title-tag');

    // Adiciona thumbnails aos posts
    add_theme_support( 'post-thumbnails' );

    // Altera title das páginas
    add_filter('pre_get_document_title', function($title) {
        if (is_front_page()) {
            // Página inicial: somente o nome do site
            return get_bloginfo('name');
        } elseif (is_singular()) {
            // Post, página ou outro tipo singular: Nome do site | Nome da página
            return get_bloginfo('name') . ' | ' . get_the_title();
        } else {
            // Outras páginas (como categorias): Nome do site + Título padrão 
            return get_bloginfo('name') . ' | ' . $title;
        }
    }); 

    // Permitir upload de arquivos SVG
    function permitir_svg_upload($extension) {
        $extension['svg'] = 'image/svg+xml';
        return $extension;
    }
    add_filter('upload_mimes', 'permitir_svg_upload');

    // Troca página do login
    add_action('login_enqueue_scripts', 'cutom_login_logo');
    function cutom_login_logo() {
        echo "<style type=\"text/css\">
                body.login div#login h1 a {
                background-image: url(" . get_bloginfo('template_directory') . "/admin/image/logo.png);
                width: 218px;
                background-size: 218px 63px;
            }</style>";
    }
    add_action('login_head', 'my_login_css');
    add_action('admin_enqueue_scripts', 'my_login_css');
    function my_login_css() {
        echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory').'/admin/login.css">';
    }

    // Bootstrap

    function theme_enqueue_scripts() {
        // Adiciona o Bootstrap CSS
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    
        // Adiciona o Bootstrap JS
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
    
        // Adiciona o estilo principal do tema
        wp_enqueue_style('building', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

    // Styles

    function my_theme_enqueue_styles() {
        // CSS principal gerado pelo SASS
        wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

        // JS principal minificado
        wp_enqueue_script('main-script', get_template_directory_uri() . '/main.min.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

    // Menus

    function theme_setup() {
        
        register_nav_menus(array(
            'main_menu' => __('Menu Principal', 'text-domain'),
            'footer_menu' => __('Menu Footer', 'text-domain'),
        ));
    }
    add_action('after_setup_theme', 'theme_setup');

    // URL Portal do cliente
    function url_portal_do_cliente() {
        $post = get_page_by_path('dados-rodape', OBJECT, 'dados_rodape');
    
        if ($post) {
            $post_id = $post->ID;
            return get_field('portal_do_cliente', $post_id);
        }
    
        return null;
    }

    function atualizar_url_portal_no_menu($items, $args) {
        
        if ($args->theme_location === 'main_menu' || $args->theme_location === 'footer_menu') {
            
            $url_portal = url_portal_do_cliente();
            if ($url_portal) {
                $items = preg_replace(
                    '/<a href="#">(.*?)Portal do cliente(.*?)<\/a>/',
                    '<a href="' . esc_url($url_portal) . '">$1Portal do cliente$2</a>',
                    $items
                );
            }
        }
    
        return $items;
    }
    add_filter('wp_nav_menu_items', 'atualizar_url_portal_no_menu', 10, 2);
    
    // Adicionar botão de cores no TinyMCE (Editor Clássico)
    function enable_tinymce_colors( $buttons ) {
        array_push( $buttons, 'forecolor' ); // cor do texto
        array_push( $buttons, 'backcolor' ); // cor de fundo
        return $buttons;
    }
    add_filter( 'mce_buttons', 'enable_tinymce_colors' );
    
    
?>
