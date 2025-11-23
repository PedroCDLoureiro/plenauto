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

acf_add_options_page([
    'page_title'  => 'Por que alugar?',
    'menu_title'  => 'Por que alugar?',
    'menu_slug'   => 'por_que_alugar',
    'post_id'     => 'por_que_alugar',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

// Para sua empresa

acf_add_options_page([
    'page_title'  => 'Para sua empresa',
    'menu_title'  => 'Para sua empresa',
    'menu_slug'   => 'para_sua_empresa',
    'post_id'     => 'para_sua_empresa',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

// Terceirização de frota

acf_add_options_page([
    'page_title'  => 'Terceirização de frota',
    'menu_title'  => 'Terceirização de frota',
    'menu_slug'   => 'terceirizacao_frota',
    'post_id'     => 'terceirizacao_frota',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

// Para você

acf_add_options_page([
    'page_title'  => 'Para você',
    'menu_title'  => 'Para você',
    'menu_slug'   => 'para_voce',
    'post_id'     => 'para_voce',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

// Atendimento

acf_add_options_page([
    'page_title'  => 'Atendimento',
    'menu_title'  => 'Atendimento',
    'menu_slug'   => 'atendimento',
    'post_id'     => 'atendimento',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

// Por que assinar?

acf_add_options_page([
    'page_title'  => 'Por que assinar?',
    'menu_title'  => 'Por que assinar?',
    'menu_slug'   => 'por_que_assinar',
    'post_id'     => 'por_que_assinar',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

// Sustentabilidade e Tecnologia

acf_add_options_page([
    'page_title'  => 'Sustentabilidade e Tecnologia',
    'menu_title'  => 'Sustentabilidade e Tecnologia',
    'menu_slug'   => 'sustentabilidade_tecnologia',
    'post_id'     => 'sustentabilidade_tecnologia',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

// Nossos endereços

acf_add_options_page([
    'page_title'  => 'Nossos endereços',
    'menu_title'  => 'Nossos endereços',
    'menu_slug'   => 'nossos_enderecos',
    'post_id'     => 'nossos_enderecos',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

// Dados rodapé

acf_add_options_page([
    'page_title'  => 'Dados rodapé',
    'menu_title'  => 'Dados rodapé',
    'menu_slug'   => 'dados_rodape',
    'post_id'     => 'dados_rodape',
    'capability'  => 'edit_posts',
    'position'    => 29,
    'redirect'    => false
]);

?>