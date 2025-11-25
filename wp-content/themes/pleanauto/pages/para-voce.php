<?php 
    $pagina = get_queried_object();
    $page_id = $pagina->id;
    // Banner
    $banner = get_field('banner_principal', $page_id);
    // Topo
    $imagem_topo = get_field('imagem_topo', $page_id);
    $titulo_topo = get_field('titulo_topo', $page_id);
    $subtitulo_topo = get_field('subtitulo_topo', $page_id);
    $titulo_secundario_topo = get_field('titulo_secundario_topo', $page_id);
    $texto_topo = get_field('texto_topo', $page_id);
    // Benefícios
    $titulo_beneficios = get_field('titulo_beneficios', $page_id);
    $destaque_titulo_beneficios = get_field('destaque_titulo_beneficios', $page_id);
    $imagem_beneficios = get_field('imagem_beneficios', $page_id);
    $icone_beneficios = get_field('icone_beneficios', $page_id);
    // Passo a passo
    $titulo_passo_a_passo = get_field('titulo_passo_a_passo', $page_id);
    $subtitulo_passo_a_passo = get_field('subtitulo_passo_a_passo', $page_id);
    // Inclusões
    $titulo_inclusoes = get_field('titulo_inclusoes', $page_id);
    $subtitulo_inclusoes = get_field('subtitulo_inclusoes', $page_id);
    // Formulário
    $titulo_formulario = get_field('titulo_formulario', $page_id);
    $subtitulo_formulario = get_field('subtitulo_formulario', $page_id);
    // FAQ
    $titulo_faq = get_field('titulo_faq', $page_id);
?>
<section id="page-para-voce" class="page">
    <div id="banner">
        <img src="<?= $banner ?>" alt="<?= $pagina->post_title ?>" class="img-fluid w-100" />
    </div>
    <section id="assinatura">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-12">
                    <h2><?= $titulo_topo; ?></h2>
                    <p><?= $subtitulo_topo; ?></p>
                </div>
                <div class="col-md-7 offset-md-2 col-12">
                    <h3><?= $titulo_secundario_topo; ?></h3>
                    <p><?= $texto_topo; ?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="bloco-beneficios" style="height: <?= $imagem_beneficios['height'] . 'px' ?>">
        <?php if($imagem_beneficios) : ?>
            <div id="imagem-topo" style="background-image: url('<?= $imagem_beneficios['url']; ?>');"></div>
            <svg class="path-img" xmlns="http://www.w3.org/2000/svg" width="110.092" height="115.012" viewBox="0 0 110.092 115.012">
                <path data-name="Path 10" d="M354.757,1413.843c.155-21.754,0,112.593,0,112.593H464.848s-14.115,1.742-21.4-18.94c-.246-.483,0-24.411,0-24.411s4.467-38.323-34.5-44.773c-1.857-.648-32.8,0-32.8,0S354.6,1435.6,354.757,1413.843Z" transform="translate(-354.756 -1411.46)" fill="#fff"/>
            </svg>
        <?php endif; ?>
    </section>
    <section id="passo-a-passo">
        <div class="container">
            <h2 class="text-white text-center"><?= $titulo_passo_a_passo ?></h2>
            <p class="text-white text-center"><?= $subtitulo_passo_a_passo ?></p>
        </div>
    </section>
    <section id="veiculos">
        <div class="container">
            <div class="list-grid-veiculos">
                <?php
                $args = array(
                    'post_type' => 'veiculos',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($args);
                
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); 
                        $modelo = get_the_title();
                        $imagem = get_field('imagem');
                        $versao = get_field('versao');
                        $ano = get_field('ano');
                        $valor = get_field('valor');
                    ?>
                        <div class="veiculo-item">
                            <?php if($imagem) : ?>
                                <div class="imagem-veiculo">
                                    <img src="<?= $imagem['url']; ?>" alt="<?= $modelo; ?>" />
                                </div>
                            <?php endif; ?>
                            <div class="infos-veiculo">
                                <div class="d-flex justify-content-between gap-3 top">
                                    <div class="">
                                        <h3 class="primary-color"><?= $modelo; ?></h3>
                                        <p class="versao"><?= $versao ?></p>
                                    </div>
                                    <div>
                                        <p class="ano"><?= $ano ?></p>
                                        <p class="text-center cores-disponiveis">Cores disponíveis</p>
                                        <div class="d-flex flex-wrap mt-1 cores">
                                            <?php if (have_rows('cores_disponiveis', $page_id)): 
                                                while (have_rows('cores_disponiveis', $page_id)): the_row();
                                                    $cor = get_sub_field('cor');
                                            ?>
                                                <span style="background-color: <?= $cor ?>;<?= $cor == "#ffffff" ? 'border: 1px solid #000;' : ''; ?>"></span>
                                            <?php 
                                                endwhile; 
                                            endif; 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-4 mb-2">A partir de</p>
                                <p class="valor"><strong>R$ <?= $valor ?></strong>/mês</p>
                                <a href="<?= get_permalink(); ?>" class="btn primary-btn">Monte o seu</a>
                            </div>
                        </div>
                   <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </section>
    <section id="formulario">
        <div class="container">
            <div class="content">
                <h2 class="text-white text-center mb-3"><?= $titulo_formulario ?></h2>
                <p class="text-white text-center subtitulo"><?= $subtitulo_formulario ?></p>
                <div class="formulario">
                    <?= do_shortcode('[contact-form-7 id="df1403d" title="Formulário Orçamento"]') ?>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <h2 class="text-center"><?= $titulo_faq ?></h2>

            <div class="faq-list">
                <?php if (have_rows('perguntas', $page_id)): 
                    $i = 0;
                    while (have_rows('perguntas', $page_id)): the_row();
                        $pergunta = get_sub_field('pergunta_faq');
                        $resposta = get_sub_field('resposta_faq');
                ?>
                    <div class="faq-item <?= $i >= 4 ? 'faq-hidden' : '' ?>">
                        <div class="faq-question">
                            <span><?= $pergunta ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#7b38a7" d="M201.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 338.7 54.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                        </div>
                        <div class="faq-answer">
                            <p><?= $resposta ?></p>
                        </div>
                    </div>
                <?php 
                    $i++;
                    endwhile; 
                endif; 
                ?>
            </div>
            <div class="text-center w-100">
                <button id="faq-toggle" class="btn primary-btn">Ver mais</button>
            </div>
        </div>
    </section>
</section>