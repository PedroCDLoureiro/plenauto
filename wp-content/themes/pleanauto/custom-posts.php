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
        'supports' => array( 'title', 'editor' ),
        'rewrite' => array( 'slug' => 'slider' ), 
    );

    register_post_type( 'slider', $args );
}
add_action( 'init', 'create_slider_post_type' );

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