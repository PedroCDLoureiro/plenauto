<?php
    $slug = 'terceirizacao_frota';
    $titulo = get_field('titulo', $slug);
?>
<section id="terceirizacao-de-frota">
    <div class="container d-flex flex-column align-items-center">
        <h2 class="text-center"><?= $titulo; ?></h2>
        <?php if( have_rows('terceirizacao_de_frota', $slug) ): ?>
            <div class="terceirizacao">
                <div class="row">
                    <?php while( have_rows('terceirizacao_de_frota', $slug) ): the_row();
                        $imagem_terceirizacao = get_sub_field('imagem_terceirizacao');
                        $titulo_terceirizacao = get_sub_field('titulo_terceirizacao');
                        $descricao_terceirizacao = get_sub_field('descricao_terceirizacao');
                    ?>
                        <div class="col-md-3 col-sm-6 col-12 item">
                            <div class="d-flex flex-column align-items-center text-center content">
                                <img src="<?= $imagem_terceirizacao ?>" alt="<?= $titulo_terceirizacao ?>">
                                <h4 class="primary-color fw-bold"><?= $titulo_terceirizacao ?></h4>
                                <p><?= $descricao_terceirizacao ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <button class="btn primary-btn solicitar-orcamento">Solicitar orçamento</button>
    </div>
</section>