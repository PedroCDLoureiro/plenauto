<?php
    $slug = 'para_sua_empresa';
    $titulo = get_field('titulo', $slug);
    $descricao = get_field('descricao', $slug);
    $imagem = get_field('imagem', $slug);
    $imagem_mobile = get_field('imagem_mobile', $slug);
?>
<section id="para-sua-empresa" class="d-flex align-items-center">
    <div class="container">
        <?php if(wp_is_mobile()) : ?>
            <img src="<?= $imagem_mobile ? $imagem_mobile : $imagem ?>" alt="<?= $titulo ?>" class="w-100">
        <?php else : ?>
            <img src="<?= $imagem ?>" alt="<?= $titulo ?>" class="w-100">
        <?php endif; ?>
        <div class="text">
            <h3 class="mb-1">Para sua Empresa</h3>
            <h2 class="mb-2"><?= $titulo; ?></h2>
            <?= $descricao ?>
            <a href="<?= get_permalink(get_page_by_path('para-empresas')); ?>/#bloco-empresa" class="btn primary-btn mt-1 anchor-scroll">leia mais</a>
        </div>
    </div>
</section>