<?php 

//  Slider
function create_slider_post_type() {
    $args = array(
        'labels' => array(
            'name'               => 'Slider Topo',
            'singular_name'      => 'Slider Topo',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Slider Topo',
            'edit_item'          => 'Editar Slider Topo',
            'new_item'           => 'Novo Slider Topo',
            'view_item'          => 'Ver Slider Topo',
            'search_items'       => 'Procurar Slider Topo',
            'not_found'          => 'Nenhum Slider Topo encontrado',
            'not_found_in_trash' => 'Nenhum Slider Topo encontrado na lixeira',
            'all_items'          => 'Todos os Slider Topo',
            'archives'           => 'Arquivos de Slider Topo',
            'attributes'         => 'Atributos de Slider Topo',
            'insert_into_item'   => 'Inserir no Slider Topo',
            'uploaded_to_this_item' => 'Carregado para este Slider Topo',
            'filter_items_list'  => 'Filtrar lista de Slider Topo',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array( 'title'),
        'rewrite' => array( 'slug' => 'slider' ), 
    );

    register_post_type( 'slider', $args );
}
add_action( 'init', 'create_slider_post_type' );

// Por que alugar?
function create_por_que_alugar_post_type() {
    $args = array(
        'labels' => array(
            'name'               => 'Por que alugar?',
            'singular_name'      => 'Por que alugar?',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo',
            'edit_item'          => 'Editar Por que alugar?',
            'new_item'           => 'Novo Por que alugar?',
            'view_item'          => 'Ver Por que alugar?',
            'search_items'       => 'Procurar',
            'not_found'          => 'Nenhum Por que alugar? encontrado',
            'not_found_in_trash' => 'Nenhum Por que alugar? encontrado na lixeira',
            'all_items'          => 'Todos',
            'archives'           => 'Arquivos de Por que alugar?',
            'attributes'         => 'Atributos de Por que alugar?',
            'insert_into_item'   => 'Inserir no Por que alugar?',
            'uploaded_to_this_item' => 'Carregado para este Por que alugar?',
            'filter_items_list'  => 'Filtrar lista de Por que alugar?',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array( 'title', 'thumbnail' ),
        'rewrite' => array( 'slug' => 'por_que_alugar' ), 
    );

    register_post_type( 'por_que_alugar', $args );
}
add_action( 'init', 'create_por_que_alugar_post_type' );

// Para sua empresa
function create_para_sua_empresa_post_type() {
    $args = array(
        'labels' => array(
            'name'               => 'Para sua empresa',
            'singular_name'      => 'Para sua empresa',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo',
            'edit_item'          => 'Editar Para sua empresa',
            'new_item'           => 'Novo Para sua empresa',
            'view_item'          => 'Ver Para sua empresa',
            'search_items'       => 'Procurar',
            'not_found'          => 'Nenhum Para sua empresa encontrado',
            'not_found_in_trash' => 'Nenhum Para sua empresa encontrado na lixeira',
            'all_items'          => 'Todos',
            'archives'           => 'Arquivos de Para sua empresa',
            'attributes'         => 'Atributos de Para sua empresa',
            'insert_into_item'   => 'Inserir no Para sua empresa',
            'uploaded_to_this_item' => 'Carregado para este Para sua empresa',
            'filter_items_list'  => 'Filtrar lista de Para sua empresa',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'rewrite' => array( 'slug' => 'para_sua_empresa' ), 
    );

    register_post_type( 'para_sua_empresa', $args );
}
add_action( 'init', 'create_para_sua_empresa_post_type' );

// Terceirização de frota
function create_terceirizacao_frota_post_type() {
    $args = array(
        'labels' => array(
            'name'               => 'Terceirização de frota',
            'singular_name'      => 'Terceirização de frota',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo',
            'edit_item'          => 'Editar Terceirização de frota',
            'new_item'           => 'Novo Terceirização de frota',
            'view_item'          => 'Ver Terceirização de frota',
            'search_items'       => 'Procurar',
            'not_found'          => 'Nenhum Terceirização de frota encontrado',
            'not_found_in_trash' => 'Nenhum Terceirização de frota encontrado na lixeira',
            'all_items'          => 'Todos',
            'archives'           => 'Arquivos de Terceirização de frota',
            'attributes'         => 'Atributos de Terceirização de frota',
            'insert_into_item'   => 'Inserir no Terceirização de frota',
            'uploaded_to_this_item' => 'Carregado para este Terceirização de frota',
            'filter_items_list'  => 'Filtrar lista de Terceirização de frota',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array( 'title'),
        'rewrite' => array( 'slug' => 'terceirizacao_frota' ), 
    );

    register_post_type( 'terceirizacao_frota', $args );
}
add_action( 'init', 'create_terceirizacao_frota_post_type' );

// Para você
function create_para_voce_post_type() {
    $args = array(
        'labels' => array(
            'name'               => 'Para você',
            'singular_name'      => 'Para você',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo',
            'edit_item'          => 'Editar Para você',
            'new_item'           => 'Novo Para você',
            'view_item'          => 'Ver Para você',
            'search_items'       => 'Procurar',
            'not_found'          => 'Nenhum Para você encontrado',
            'not_found_in_trash' => 'Nenhum Para você encontrado na lixeira',
            'all_items'          => 'Todos',
            'archives'           => 'Arquivos de Para você',
            'attributes'         => 'Atributos de Para você',
            'insert_into_item'   => 'Inserir no Para você',
            'uploaded_to_this_item' => 'Carregado para este Para você',
            'filter_items_list'  => 'Filtrar lista de Para você',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array( 'title', 'thumbnail' ),
        'rewrite' => array( 'slug' => 'para_voce' ), 
    );

    register_post_type( 'para_voce', $args );
}
add_action( 'init', 'create_para_voce_post_type' );

// Sobre Nós
function create_sobre_nos_post_type() {
    $args = array(
        'labels' => array(
            'name'               => 'Sobre Nós',
            'singular_name'      => 'Sobre Nós',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo',
            'edit_item'          => 'Editar Sobre Nós',
            'new_item'           => 'Novo Sobre Nós',
            'view_item'          => 'Ver Sobre Nós',
            'search_items'       => 'Procurar',
            'not_found'          => 'Nenhum Sobre Nós encontrado',
            'not_found_in_trash' => 'Nenhum Sobre Nós encontrado na lixeira',
            'all_items'          => 'Todos',
            'archives'           => 'Arquivos de Sobre Nós',
            'attributes'         => 'Atributos de Sobre Nós',
            'insert_into_item'   => 'Inserir no Sobre Nós',
            'uploaded_to_this_item' => 'Carregado para este Sobre Nós',
            'filter_items_list'  => 'Filtrar lista de Sobre Nós',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
        'supports' => array( 'title' ),
        'rewrite' => array( 'slug' => 'sobre_nos' ), 
    );

    register_post_type( 'sobre_nos', $args );
}
add_action( 'init', 'create_sobre_nos_post_type' );

?>