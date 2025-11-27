<?php
    $slug = 'nossos_enderecos';
    $titulo = get_field('titulo', $slug);
    $subtitulo = get_field('subtitulo', $slug);
    $link_botao = get_field('link_botao', $slug);
?>
<section id="nossos-enderecos">
    <div class="container d-flex flex-column align-items-center">
        <h2 class="text-center text-white">Nossos Endereços</h2>
        <?php if( have_rows('enderecos', $slug) ): ?>
            <div class="enderecos">
                <?php while( have_rows('enderecos', $slug) ): the_row();
                    $titulo = get_sub_field('titulo');
                    $endereco = get_sub_field('endereco');
                    $endereco_mapa = urlencode($endereco);
                    $mapa_url = "https://www.google.com/maps?q={$endereco_mapa}&output=embed";
                    $telefone = get_sub_field('telefone');
                ?>
                    <div class="item">
                        <div class="d-flex flex-column content">
                            <div class="map-wrapper">
                                <iframe
                                    src="<?= $mapa_url ?>"
                                    width="231"
                                    height="192"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                            <h4 class="text-white px-3 mb-0"><?= $titulo ?></h4>
                            <div class="d-flex flex-column px-3 gap-2 w-100 infos-endereco">
                                <div class="d-flex align-items-center gap-2 endereco">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ffffff" d="M512 48c0-8.3-4.3-16-11.3-20.4s-15.9-4.8-23.3-1.1L352.5 88.1 180 29.4c-13.7-4.7-28.7-3.8-41.9 2.3L13.8 90.3C5.4 94.2 0 102.7 0 112L0 464c0 8.2 4.2 15.9 11.1 20.3s15.6 4.9 23.1 1.4l127.3-59.9 170.7 56.9c13.7 4.6 28.5 3.7 41.6-2.5l124.4-58.5c8.4-4 13.8-12.4 13.8-21.7l0-352zM144 82.1l0 299-96 45.2 0-299 96-45.2zm48 303.3l0-301.1 128 43.5 0 300.3-128-42.7zM368 134l96-47.4 0 298.2-96 45.2 0-296z"/></svg>
                                    <a href="https://www.google.com/maps?q=<?= $endereco; ?>" class="text-white mb-0" target="_blank"><?= $endereco; ?></a>
                                </div>
                                <div class="d-flex align-items-center gap-2 telefone">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.79" height="12.79" viewBox="0 0 12.79 12.79">
                                        <path data-name="Path 847" d="M8.975,10.588a.589.589,0,0,0,.715-.179l.209-.274a1.179,1.179,0,0,1,.943-.472h1.768a1.179,1.179,0,0,1,1.179,1.179v1.768a1.179,1.179,0,0,1-1.179,1.179A10.611,10.611,0,0,1,2,3.179,1.179,1.179,0,0,1,3.179,2H4.947A1.179,1.179,0,0,1,6.126,3.179V4.947a1.179,1.179,0,0,1-.472.943L5.379,6.1a.589.589,0,0,0-.172.727,8.253,8.253,0,0,0,3.768,3.763" transform="translate(-1.5 -1.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                    </svg>
                                    <a href="tel:<?= $telefone; ?>" class="text-white mb-0"><?= $telefone; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>