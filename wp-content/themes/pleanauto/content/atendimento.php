<?php
    $slug = 'atendimento';
    $titulo = get_field('titulo', $slug);
    $subtitulo = get_field('subtitulo', $slug);
    $imagem = get_field('imagem', $slug);
    $imagem_mobile = get_field('imagem_mobile', $slug);
    $whatsapp = get_field('whatsapp', $slug);
    $mensagem_padrao = get_field('mensagem_padrao', $slug);
    $numero = preg_replace('/\D+/', '', $whatsapp);
    
    $numero = '55' . $numero;
    
    $link_whatsapp = "https://wa.me/{$numero}?text={$mensagem_padrao}";

?>
<section id="atendimento" class="d-flex align-items-center">
    <?php if(wp_is_mobile()) : ?>
        <img src="<?= $imagem_mobile ? $imagem_mobile : $imagem ?>" alt="<?= $titulo ?>" class="w-100">
    <?php else : ?>
        <img src="<?= $imagem ?>" alt="<?= $titulo ?>" class="w-100">
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column align-items-center content">
                <h2 class="text-white mb-3"><?= $titulo; ?></h2>
                <p class="text-white"><?= $subtitulo; ?></p>
                <a href="<?= esc_url($link_whatsapp); ?>" class="btn primary-btn" target="_blank" rel="noopener noreferrer">Iniciar atendimento</a>
            </div>
        </div>
    </div>
</section>