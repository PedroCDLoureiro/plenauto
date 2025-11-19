<section id="por-que-alugar">
    <div class="container">
        <div class="row align-items-center">
            <?php
            $args = array(
                'post_type' => 'por_que_alugar',
                'posts_per_page' => 1,
            );
            $query = new WP_Query($args);
            
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); 
                    $chapeu = get_field('chapeu');
                    $descricao = get_field('descricao');                
                ?>
                    <div class="col-md-6 col-12 pilares">
                        <?php if($chapeu) : ?>
                            <h4><?= $chapeu; ?></h4>
                        <?php endif; ?>
                        <h2><?= get_the_title(); ?></h2>
                        <?php if($descricao) : ?>
                            <div class="descricao">
                                <?= $descricao; ?>
                            </div>
                        <?php endif; ?>
                        <?php if( have_rows('pilares') ): ?>
                            <div class="pilares">
                                <?php while( have_rows('pilares') ): the_row();
                                    $destaque = get_sub_field('destaque');
                                    $descricao_pilar = get_sub_field('descricao_pilar');
                                ?>
                                    <p><img src="<?= WP_TEMPLATE; ?>/assets/images/check.svg" class="me-2"><span><?= $destaque; ?></span> – <?= $descricao_pilar ?></p>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 col-12 d-flex justify-content-end img-pilares">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>