<section id="por-que-alugar">
    <div class="container">
        <div class="row align-items-center">
            <?php
                $slug = 'por_que_alugar';
                $chapeu = get_field('chapeu', $slug);
                $titulo = get_field('titulo', $slug);
                $descricao = get_field('descricao', $slug);
                $imagem = get_field('imagem', $slug);
            ?>
            <div class="col-md-6 col-12 pilares">
                <?php if($chapeu) : ?>
                    <h4><?= $chapeu; ?></h4>
                <?php endif; ?>
                <h2><?= $titulo; ?></h2>
                <?php if($descricao) : ?>
                    <div class="descricao">
                        <?= $descricao; ?>
                    </div>
                <?php endif; ?>
                <?php if( have_rows('pilares', $slug) ): ?>
                    <div class="pilares">
                        <?php while( have_rows('pilares', $slug) ): the_row();
                            $destaque = get_sub_field('destaque');
                            $descricao_pilar = get_sub_field('descricao_pilar');
                        ?>
                            <p><img src="<?= WP_TEMPLATE; ?>/assets/images/check.svg" class="me-2"><span><?= $destaque; ?></span> – <?= $descricao_pilar ?></p>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-end img-pilares">
                <img src="<?= $imagem ?>" alt="<?= $titulo ?>">
            </div>
        </div>
    </div>
</section>