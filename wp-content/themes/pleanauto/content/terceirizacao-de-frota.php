<?php
    $args = array(
        'post_type' => 'terceirizacao_frota',
        'posts_per_page' => 1,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
        <section id="terceirizacao-de-frota">
            <div class="container d-flex flex-column align-items-center">
                <h2 class="text-center"><?php the_title() ?></h2>
                <?php if( have_rows('terceirizacao_de_frota') ): ?>
                    <div class="terceirizacao">
                        <div class="row">
                            <?php while( have_rows('terceirizacao_de_frota') ): the_row();
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
                <button class="btn primary-btn solicitar-orcamento">Solicitar orçamento</a>
            </div>
        </section>
<?php endwhile;
wp_reset_postdata();
endif; ?>