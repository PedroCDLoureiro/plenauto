<?php
    $slug = 'para_voce';
    $titulo = get_field('titulo', $slug);
    $imagem = get_field('imagem', $slug);
    $imagem_mobile = get_field('imagem_mobile', $slug);
?>
<section id="para-voce" class="d-flex align-items-center">
    <?php if(wp_is_mobile()) : ?>
        <img src="<?= $imagem_mobile ? $imagem_mobile : $imagem ?>" alt="<?= $titulo ?>" class="w-100">
    <?php else : ?>
        <img src="<?= $imagem ?>" alt="<?= $titulo ?>" class="w-100">
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-6">
                <h3 class="text-uppercase fw-bold mb-1">Para você</h3>
                <h2 class="mb-3"><?= $titulo; ?></h2>
                <a href="<?= get_permalink(get_page_by_path('para-voce')); ?>/#assinatura" class="btn primary-btn anchor-scroll">leia mais</a>
            </div>
        </div>
    </div>
</section>