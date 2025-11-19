<?php
    $slug = 'para_voce';
    $titulo = get_field('titulo', $slug);
    $imagem = get_field('imagem', $slug);
?>
<section id="para-voce" class="d-flex align-items-center">
    <img src="<?= $imagem ?>" alt="<?= $titulo ?>" class="w-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase fw-bold mb-1">Para você</h3>
                <h2 class="mb-3"><?= $titulo; ?></h2>
                <a href="<?= get_permalink(get_page_by_path('para-voce')); ?>" class="btn primary-btn">leia mais</a>
            </div>
        </div>
    </div>
</section>