<?php 
    $pagina = get_queried_object();
    $page_id = $pagina->id;
    // Banner
    $banner = get_field('banner_principal', $page_id);
    $titulo_banner = get_field('titulo_banner', $page_id);
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
    <div id="banner" class="mask-on">
        <img src="<?= $banner ?>" alt="<?= $pagina->post_title ?>" class="img-fluid w-100" />
        <?php if($titulo_banner) : ?>
            <div class="container">
                <h2 class="text-white"><?= $titulo_banner; ?></h2>
            </div>
        <?php endif; ?>
    </div>
    <section id="assinatura">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 offset-lg-1 col-md-4 offset-0 col-12">
                    <h2><?= nl2br($titulo_topo); ?></h2>
                    <p class="fw-bold mb-0"><?= nl2br($subtitulo_topo); ?></p>
                </div>
                <div class="col-lg-7 offset-md-1 col-md-7 col-12">
                    <h3 class="fw-bold"><?= $titulo_secundario_topo; ?></h3>
                    <p class="mb-0 descricao"><?= $texto_topo; ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
        $bloco_beneficios_style = '';
        $svg_style = '';
        if (!wp_is_mobile() && !empty($imagem_beneficios['height'])) {
            $bloco_beneficios_style = 'style="height: ' . intval($imagem_beneficios['height']) . 'px"';
        }
        else{
            $svg_style = 'bottom: ' . intval($imagem_beneficios['height'] - 65) . 'px';
            $icone_style = 'bottom: ' . intval($imagem_beneficios['height'] - 55) . 'px';
        }
    ?>
    <section id="bloco-beneficios" <?= $bloco_beneficios_style ?>>
        <?php if($imagem_beneficios) : ?>
            <div id="imagem-topo" style="background-image: url('<?= $imagem_beneficios['url']; ?>');height: <?= $imagem_beneficios['height'] . 'px'; ?>;"></div>
            <svg style="<?= $svg_style; ?>" class="path-img" xmlns="http://www.w3.org/2000/svg" width="110.092" height="115.012" viewBox="0 0 110.092 115.012">
                <path data-name="Path 10" d="M354.757,1413.843c.155-21.754,0,112.593,0,112.593H464.848s-14.115,1.742-21.4-18.94c-.246-.483,0-24.411,0-24.411s4.467-38.323-34.5-44.773c-1.857-.648-32.8,0-32.8,0S354.6,1435.6,354.757,1413.843Z" transform="translate(-354.756 -1411.46)" fill="#fff"/>
            </svg>
            <img src="<?= $icone_beneficios['url'] ?>" class="icone-beneficios" style="<?= $icone_style ?>" />
        <?php endif; ?>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 offset-md-6 col-12 texto">
                    <div class="content">
                        <h2>
                            <span><?= $titulo_beneficios; ?></span><br>
                            <?= $destaque_titulo_beneficios; ?>
                        </h2>
                        <?php if( have_rows('beneficios', $page_id) ): ?>
                            <div class="beneficios">
                                <?php while( have_rows('beneficios', $page_id) ): the_row();
                                    $titulo_beneficio = get_sub_field('titulo_beneficio');
                                    $descricao_beneficio = get_sub_field('descricao_beneficio');
                                ?>
                                <div class="d-flex align-items-start gap-2 beneficio">
                                    <img src="<?= WP_TEMPLATE; ?>/assets/images/check.svg" class="me-2">
                                    <div class="content">
                                        <h4><?= $titulo_beneficio ?></h4>
                                        <p><?= $descricao_beneficio ?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <a href="#veiculos" class="btn primary-btn">Simular assinatura</a>
                </div>
            </div>
        </div>
    </section>
    <section id="passo-a-passo">
        <div class="container">
            <h2 class="text-white text-center"><?= $titulo_passo_a_passo ?></h2>
            <p class="text-white text-center subtitulo"><?= $subtitulo_passo_a_passo ?></p>
            <?php if( have_rows('passo_a_passo', $page_id) ): ?>
                <div class="passo-a-passo">
                    <?php while( have_rows('passo_a_passo', $page_id) ): the_row();
                        $titulo_passo = get_sub_field('titulo_passo');
                        $descricao_passo = get_sub_field('descricao_passo');
                    ?>
                        <div class="passo-item">
                            <div class="d-flex align-items-center content">
                                <span class="index"><?= get_row_index(); ?></span>
                                <div class="textos">
                                    <h4 class="text-white fw-bold"><?= $titulo_passo ?></h4>
                                    <p class="text-white mb-0"><?= $descricao_passo ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
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
                        $link_externo = get_field('link_externo');
                    ?>
                        <div class="d-flex flex-column veiculo-item">
                            <?php if($imagem) : ?>
                                <div class="imagem-veiculo">
                                    <img src="<?= $imagem['url']; ?>" alt="<?= $modelo; ?>" />
                                </div>
                            <?php endif; ?>
                            <div class="d-flex flex-column justify-content-between infos-veiculo">
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
                                <div class="d-flex flex-column bottom">
                                    <p class="mt-4 mb-2">A partir de</p>
                                    <p class="valor"><strong>R$ <?= $valor ?></strong>/mês</p>
                                    <a href="<?= $link_externo; ?>" class="btn primary-btn">Monte o seu</a>
                                </div>
                            </div>
                        </div>
                   <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </section>
    <section id="inclusoes">
        <div class="container">
            <h2 class="primary-color text-center"><?= $titulo_inclusoes ?></h2>
            <p class="text-center subtitulo"><?= $subtitulo_inclusoes ?></p>
            <?php if( have_rows('inclusoes', $page_id) ): ?>
                <div class="inclusoes">
                    <?php while( have_rows('inclusoes', $page_id) ): the_row();
                        $imagem_inclusao = get_sub_field('imagem_inclusao');
                        $titulo_inclusao = get_sub_field('titulo_inclusao');
                        $descricao_inclusao = get_sub_field('descricao_inclusao');
                    ?>
                        <div class="inclusao-item">
                            <div class="d-flex flex-column justify-content-center align-items-center text-center gap-3 content">
                                <img src="<?= $imagem_inclusao['url'] ?>" alt="<?= $titulo_inclusao ?>">
                                <h4 class="fw-bold mb-0"><?= $titulo_inclusao ?></h4>
                                <p class="mb-0"><?= $descricao_inclusao ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section id="formulario">
        <div class="container">
            <div class="content">
                <h2 class="text-white text-center mb-3"><?= $titulo_formulario ?></h2>
                <p class="text-white text-center subtitulo"><?= $subtitulo_formulario ?></p>
                <div class="formulario">
                    <?= do_shortcode('[contact-form-7 id="ea0643c" title="Formulário Atendimento"]') ?>
                </div>
            </div>
        </div>
    </section>
    <section id="faq">
        <div class="container">
            <h2 class="text-center"><?= $titulo_faq ?></h2>
            <div class="faq-list with-categories">
                <?php if( have_rows('categorias', $page_id) ): 
                    $i = 0;
                    
                    while( have_rows('categorias', $page_id) ): the_row();
                        $titulo_categoria = get_sub_field('titulo_categoria');
                ?>
                    <div class="faq-category <?= $i >= 4 ? 'faq-hidden' : '' ?>">
                        <h3 class="d-flex justify-content-between category-title"><?= $titulo_categoria ?><svg class="arrow-category" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#7b38a7" d="M201.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 338.7 54.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></h3>
                        <?php if (have_rows('perguntas', $page_id)):
                            while (have_rows('perguntas', $page_id)): the_row();
                                $pergunta = get_sub_field('pergunta_faq');
                                $resposta = get_sub_field('resposta_faq');
                        ?>
                            <div class="faq-item">
                                <div class="faq-question">
                                    <span><?= $pergunta ?></span>
                                    <svg class="arrow-question" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#7b38a7" d="M201.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 338.7 54.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                                </div>
                                <div class="faq-answer">
                                    <p><?= $resposta ?></p>
                                </div>
                            </div>
                        <?php
                            endwhile; 
                        endif; 
                        ?>
                    </div>
                    <?php 
                    $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
            <?php if($i > 4) : ?>
                <div class="text-center w-100">
                    <button id="faq-toggle" class="btn primary-btn">Ver mais</button>
                </div>
            <?php endif; ?>
        </div>
    </section>
</section>