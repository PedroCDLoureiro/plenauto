<?php
    $slug = 'por_que_assinar';
    $titulo = get_field('titulo', $slug);
    $subtitulo = get_field('subtitulo', $slug);
    $link_botao = get_field('link_botao', $slug);
?>
<section id="por-que-assinar">
    <div class="container d-flex flex-column align-items-center">
        <h2 class="text-center"><?= $titulo; ?></h2>
        <p class="text-center mb-5 subtitulo"><?= $subtitulo; ?></p>
        <?php if( have_rows('beneficios', $slug) ): ?>
            <div class="beneficios list-grid">
                <?php while( have_rows('beneficios', $slug) ): the_row();
                    $imagem_beneficio = get_sub_field('imagem_beneficio');
                    $titulo_beneficio = get_sub_field('titulo_beneficio');
                    $descricao_beneficio = get_sub_field('descricao_beneficio');
                ?>
                    <div class="item">
                        <div class="d-flex flex-column align-items-center text-center content">
                            <div class="img-item">
                                <img src="<?= $imagem_beneficio['url'] ?>" alt="<?= $titulo_beneficio ?>" class="w-100">
                                <span class="index"><?= get_row_index(); ?></span>
                                <h4 class="text-white fw-bold"><?= $titulo_beneficio ?></h4>
                            </div>
                            <p><?= $descricao_beneficio ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <a href="<?= $link_botao; ?>" class="btn primary-btn solicitar-orcamento" target="_blank">Simule sua assinatura</a>
    </div>
</section>