<?php 
    $pagina = get_queried_object();
    $page_id = $pagina->id;
    // Banner
    $banner = get_field('banner_principal', $page_id);
    $titulo_banner = get_field('titulo_banner', $page_id);
    // Sobre nós
    $titulo_sobre_nos = get_field('titulo_sobre_nos', $page_id);
    $texto_sobre_nos = get_field('texto_sobre_nos', $page_id);
    $imagem_sobre_nos = get_field('imagem_sobre_nos', $page_id);
    // Nossa jornada
    $plano_de_fundo_nossa_jornada = get_field('plano_de_fundo_nossa_jornada', $page_id);
    $titulo_nossa_jornada = get_field('titulo_nossa_jornada', $page_id);
    $texto_nossa_jornada = get_field('texto_nossa_jornada', $page_id);
    // Missão, visão e valores
    $missao = get_field('missao', $page_id);
    $visao = get_field('visao', $page_id);
    $valores = get_field('valores', $page_id);
    // Vídeo
    $titulo_video = get_field('titulo_video', $page_id);
    $subtitulo_video = get_field('subtitulo_video', $page_id);
    $midia = get_field('video', $page_id);
    $thumbnail_video = get_field('thumbnail_video', $page_id);
?>
<section id="page-quem-somos" class="page">
    <div id="banner">
        <div class="w-100 h-100 img-banner">
            <img src="<?= $banner ?>" alt="<?= $pagina->post_title ?>" class="img-fluid" />
        </div>
        <?php if($titulo_banner) : ?>
            <div class="container">
                <h2 class="text-black"><?= $titulo_banner; ?></h2>
            </div>
        <?php endif; ?>
    </div>
    <section id="sobre-nos">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 texto">
                    <h2 class="mt-5 mb-3 text-uppercase"><?= $titulo_sobre_nos ?></h2>
                    <p class="pe-5 mb-0"><?= $texto_sobre_nos ?></p>
                </div>
                <div class="col-md-6 col-12 imagem">
                    <img src="<?= $imagem_sobre_nos ?>" alt="<?= $titulo_sobre_nos ?>" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section id="nossa-jornada" style="background-image: url('<?= $plano_de_fundo_nossa_jornada; ?>')">
        <div class="container">
            <div class="content">
                <h2 class="text-white text-center"><?= nl2br($titulo_nossa_jornada); ?></h2>
                <?= $texto_nossa_jornada ?>
            </div>
        </div>
    </section>
    <section id="missao-visao-valores">
        <div class="container">
            <div class="content">
                <div class="item missao">
                    <div class="top">
                        <h3>Missão</h3>
                        ÍCONE
                    </div>
                    <p><?= $missao ?></p>
                </div>
                <div class="item visao">
                    <div class="top">
                        <h3>Visão</h3>
                        ÍCONE
                    </div>
                    <p><?= $visao ?></p>
                </div>
                <div class="item valores">
                    <div class="top">
                        <h3>Valores</h3>
                        ÍCONE
                    </div>
                    <p><?= $valores ?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="video">
        <div class="container">
            <h2 class="text-center"><?= $titulo_video ?></h2>
            <p class="text-center subtitulo"><?= $subtitulo_video ?></p>
            <div class="content">
                <?php 
                    if ($midia) : 
                        $extensao = pathinfo($midia['url'], PATHINFO_EXTENSION);
                        $extensao = strtolower($extensao);

                        // verifica se é vídeo
                        if (in_array($extensao, ['mp4','webm','ogg'])) : ?>

                            <video 
                                autoplay 
                                muted 
                                loop 
                                playsinline 
                                class="w-100"
                                poster="<?php echo esc_url($thumbnail_video['url']); ?>"
                            >
                                <source src="<?php echo esc_url($midia['url']); ?>" type="video/<?php echo esc_attr($extensao); ?>">
                            </video>

                        <?php else : ?>

                            <img src="<?php echo esc_url($midia['url']); ?>" alt="<?php echo esc_attr($midia['alt']); ?>">

                        <?php endif; ?>
                        <svg class="path-img" xmlns="http://www.w3.org/2000/svg" width="110.092" height="115.012" viewBox="0 0 110.092 115.012">
                            <path data-name="Path 10" d="M354.757,1413.843c.155-21.754,0,112.593,0,112.593H464.848s-14.115,1.742-21.4-18.94c-.246-.483,0-24.411,0-24.411s4.467-38.323-34.5-44.773c-1.857-.648-32.8,0-32.8,0S354.6,1435.6,354.757,1413.843Z" transform="translate(-354.756 -1411.46)" fill="#fff"/>
                        </svg>
                        <svg class="icon-video" xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61">
                            <g data-name="Group 401" transform="translate(-616.229 -2301.229)">
                                <circle id="Ellipse_6" data-name="Ellipse 6" cx="30.5" cy="30.5" r="30.5" transform="translate(616.229 2301.229)" fill="#7b38a7"/>
                                <path id="Path_21" data-name="Path 21" d="M5,5.568A2.568,2.568,0,0,1,8.862,3.349l15.4,8.984a2.568,2.568,0,0,1,0,4.439L8.862,25.76A2.568,2.568,0,0,1,5,23.541Z" transform="translate(634.009 2316.516)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </g>
                        </svg>
                    <? endif; 
                ?>
            </div>
        </div>
    </section>
</section>