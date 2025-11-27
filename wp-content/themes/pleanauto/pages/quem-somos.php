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
                        <svg xmlns="http://www.w3.org/2000/svg" width="32.818" height="28.67" viewBox="0 0 32.818 28.67">
                            <path id="flag-banner-fold" d="M52.629,40.547a1.193,1.193,0,0,0-1-.547H39.691a1.193,1.193,0,0,0-1.086.7L37.3,43.58h-16.1a1.193,1.193,0,0,0-.883,2l5.237,5.761L20.311,57.1a1.193,1.193,0,0,0,.883,2H32.1a1.193,1.193,0,0,0,1.086-.7l1.31-2.881h9.313l-5.2,11.44a1.193,1.193,0,1,0,2.172.988L52.711,41.687A1.193,1.193,0,0,0,52.629,40.547Zm-21.3,16.16H23.891l4.153-4.568a1.193,1.193,0,0,0,0-1.605l-4.153-4.568h12.32Zm13.561-3.58H35.577l4.882-10.74h9.313Z" transform="translate(-20.001 -40)" fill="#fff"/>
                        </svg>
                    </div>
                    <p><?= $missao ?></p>
                </div>
                <div class="item visao">
                    <div class="top">
                        <h3>Visão</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="42.622" height="28.415" viewBox="0 0 42.622 28.415">
                            <path id="eye" d="M50.5,61.632a25.112,25.112,0,0,0-4.91-6.821,22.858,22.858,0,0,0-32.556,0,25.012,25.012,0,0,0-4.91,6.821,1.421,1.421,0,0,0,0,1.154,25.119,25.119,0,0,0,4.91,6.82,22.863,22.863,0,0,0,32.556,0,25.119,25.119,0,0,0,4.91-6.82A1.421,1.421,0,0,0,50.5,61.632ZM29.311,73.573a19.553,19.553,0,0,1-14.195-5.9,23.7,23.7,0,0,1-4.1-5.461,23.678,23.678,0,0,1,4.1-5.461,19.553,19.553,0,0,1,14.195-5.9,19.553,19.553,0,0,1,14.195,5.9,23.7,23.7,0,0,1,4.106,5.461C46.332,64.6,40.753,73.573,29.311,73.573Zm0-19.89a8.524,8.524,0,1,0,8.524,8.524A8.524,8.524,0,0,0,29.311,53.683Zm0,14.207a5.683,5.683,0,1,1,5.683-5.683A5.683,5.683,0,0,1,29.311,67.89Z" transform="translate(-8 -48)" fill="#fff"/>
                        </svg>
                    </div>
                    <p><?= $visao ?></p>
                </div>
                <div class="item valores">
                    <div class="top">
                        <h3>Valores</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30.154" height="29.104" viewBox="0 0 30.154 29.104">
                            <path id="star" d="M45,26.557a2.128,2.128,0,0,0-1.852-1.463l-7.665-.618L32.522,17.32a2.125,2.125,0,0,0-3.932,0l-2.957,7.155-7.668.62a2.138,2.138,0,0,0-1.217,3.749l5.846,5.044L20.812,41.43a2.128,2.128,0,0,0,3.183,2.315l6.56-4.038,6.564,4.038A2.13,2.13,0,0,0,40.3,41.43l-1.788-7.544,5.846-5.044A2.134,2.134,0,0,0,45,26.557Zm-1.993.711-6.326,5.456a1.039,1.039,0,0,0-.333,1.028l1.933,8.158a.048.048,0,0,1-.022.062c-.023.018-.03.014-.049,0L31.1,37.6a1.039,1.039,0,0,0-1.089,0L22.9,41.975c-.019.012-.025.016-.049,0a.048.048,0,0,1-.022-.062l1.933-8.158a1.039,1.039,0,0,0-.333-1.028L18.1,27.271c-.016-.013-.03-.025-.017-.065s.023-.035.043-.038l8.3-.67a1.039,1.039,0,0,0,.873-.642l3.2-7.744c.01-.022.014-.032.045-.032s.035.01.045.032L33.8,25.856a1.039,1.039,0,0,0,.877.639l8.3.67c.019,0,.031,0,.043.038S43.026,27.255,43.005,27.268Z" transform="translate(-15.479 -15.501)" fill="#fff" stroke="#fff" stroke-width="1"/>
                        </svg>
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