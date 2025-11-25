<?php 
    $pagina = get_queried_object();
    $page_id = $pagina->id;
    // Banner
    $banner = get_field('banner_principal', $page_id);
    // Topo
    $imagem_topo = get_field('imagem_topo', $page_id);
    $titulo_topo = get_field('titulo_topo', $page_id);
    $texto_topo = get_field('texto_topo', $page_id);
    // Terceirização de frota
    $titulo_terceirizacao_frota = get_field('titulo_terceirizacao_frota', $page_id);
    $plano_de_fundo_terceirizacao = get_field('plano_de_fundo_terceirizacao', $page_id);
    // Transforme sua frota
    $plano_de_fundo_transforme_sua_frota = get_field('plano_de_fundo_transforme_sua_frota', $page_id);
    $titulo_transforme_sua_frota = get_field('titulo_transforme_sua_frota', $page_id);
    // Vantagens de terceirizar
    $titulo_vantagens_de_terceirizar = get_field('titulo_vantagens_de_terceirizar', $page_id);
    // Formulário
    $titulo_formulario = get_field('titulo_formulario', $page_id);
    $subtitulo_formulario = get_field('subtitulo_formulario', $page_id);
    // FAQ
    $titulo_faq = get_field('titulo_faq', $page_id);
?>
<section id="page-para-empresas" class="page">
    <div id="banner">
        <img src="<?= $banner ?>" alt="<?= $pagina->post_title ?>" class="img-fluid w-100" />
    </div>
    <section id="bloco-empresa" style="height: <?= $imagem_topo['height'] . 'px' ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 texto">
                    <h2><?= $titulo_topo; ?></h2>
                    <p><?= $texto_topo; ?></p>
                </div>
            </div>
        </div>
        <?php if($imagem_topo) : ?>
            <div id="imagem-topo" style="background-image: url('<?= $imagem_topo['url']; ?>');"></div>
            <svg class="path-img" xmlns="http://www.w3.org/2000/svg" width="110.092" height="115.012" viewBox="0 0 110.092 115.012">
                <path data-name="Path 10" d="M354.757,1413.843c.155-21.754,0,112.593,0,112.593H464.848s-14.115,1.742-21.4-18.94c-.246-.483,0-24.411,0-24.411s4.467-38.323-34.5-44.773c-1.857-.648-32.8,0-32.8,0S354.6,1435.6,354.757,1413.843Z" transform="translate(-354.756 -1411.46)" fill="#fff"/>
            </svg>
        <?php endif; ?>
    </section>
    <section id="terceirizando" style="background-image: url('<?= $plano_de_fundo_terceirizacao['url']; ?>')">
        <div class="container">
            <h2 class="text-white text-center"><?= $titulo_terceirizacao_frota ?></h2>
            <?php if( have_rows('beneficios', $page_id) ): ?>
                <div id="beneficios">
                    <?php while( have_rows('beneficios', $page_id) ): the_row();
                        $titulo_beneficio = get_sub_field('titulo_beneficio');
                        $descricao_beneficio = get_sub_field('descricao_beneficio');
                    ?>
                        <div class="item">
                            <div class="d-flex flex-column content">
                                <h4 class="text-white fw-bold"><?= $titulo_beneficio ?></h4>
                                <p class="text-white mb-0"><?= $descricao_beneficio ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section id="transforme" style="background-image: url('<?= $plano_de_fundo_transforme_sua_frota['url'] ?>');height: <?= $plano_de_fundo_transforme_sua_frota['height'] . 'px' ?>">
        <div class="container h-100 d-flex justify-content-start align-items-center">
            <div class="text">
                <h2 class="text-white"><?= nl2br($titulo_transforme_sua_frota); ?></h2>
                <a href="#formulario" class="btn primary-btn">Fale com um consultor</a>
            </div>
        </div>
    </section>
    <section id="vantagens">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="text-center"><?= $titulo_vantagens_de_terceirizar; ?></h2>
            <?php if( have_rows('vantagens', $page_id) ): ?>
                <div class="vantagens list-grid">
                    <?php while( have_rows('vantagens', $page_id) ): the_row();
                        $imagem_vantagem = get_sub_field('imagem_vantagem');
                        $titulo_vantagem = get_sub_field('titulo_vantagem');
                        $descricao_vantagem = get_sub_field('descricao_vantagem');
                    ?>
                        <div class="item">
                            <div class="d-flex flex-column align-items-center text-center content">
                                <div class="img-item">
                                    <img src="<?= $imagem_vantagem ?>" alt="<?= $titulo_vantagem ?>" class="w-100">
                                    <span class="index"><?= get_row_index(); ?></span>
                                    <h4 class="text-white fw-bold"><?= $titulo_vantagem ?></h4>
                                    <svg class="path-img" xmlns="http://www.w3.org/2000/svg" width="110.092" height="115.012" viewBox="0 0 110.092 115.012">
                                        <path data-name="Path 10" d="M354.757,1413.843c.155-21.754,0,112.593,0,112.593H464.848s-14.115,1.742-21.4-18.94c-.246-.483,0-24.411,0-24.411s4.467-38.323-34.5-44.773c-1.857-.648-32.8,0-32.8,0S354.6,1435.6,354.757,1413.843Z" transform="translate(-354.756 -1411.46)" fill="#fff"/>
                                    </svg>
                                </div>
                                <p><?= $descricao_vantagem ?></p>
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