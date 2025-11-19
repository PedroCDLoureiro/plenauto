<?php
    $slug = 'para_sua_empresa';
    $titulo = get_field('titulo', $slug);
    $descricao = get_field('descricao', $slug);
    $imagem = get_field('imagem', $slug);
?>
<section id="para-sua-empresa" class="d-flex align-items-center">
    <div class="container">
        <img src="<?= $imagem ?>" alt="<?= $titulo ?>" class="w-100">
        <div class="text">
            <h3 class="mb-1">Para sua Empresa</h3>
            <h2 class="mb-2"><?= $titulo; ?></h2>
            <?= $descricao ?>
            <a href="<?= get_permalink(get_page_by_path('para-voce')); ?>" class="btn primary-btn mt-1">leia mais</a>
        </div>
    </div>
</section>