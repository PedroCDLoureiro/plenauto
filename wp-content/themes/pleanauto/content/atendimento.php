<?php
    $slug = 'atendimento';
    $titulo = get_field('titulo', $slug);
    $subtitulo = get_field('subtitulo', $slug);
    $imagem = get_field('imagem', $slug);
?>
<section id="atendimento" class="d-flex align-items-center">
    <img src="<?= $imagem ?>" alt="<?= $titulo ?>" class="w-100">
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column align-items-center content">
                <h2 class="text-white mb-3"><?= $titulo; ?></h2>
                <p class="text-white"><?= $subtitulo; ?></p>
                <div class="input-field">
                    <input type="text" name="telefone">
                    <button class="btn primary-btn">Iniciar atendimento</button>
                </div>
            </div>
        </div>
    </div>
</section>