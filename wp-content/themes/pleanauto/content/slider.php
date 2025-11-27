<section id="slider-top" class="page">
    <?php
    $args = array(
        'post_type' => 'slider',
        'posts_per_page' => -1,
    );
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) : ?>
        <div class="container-fluid">
            <div id="slider-topo" class="slider">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php 
                        $midia = get_field('midia_slider_topo');
                        $texto_principal = get_field('texto_principal');
                        $texto_secundario = get_field('texto_secundario');
                        $aplicar_mascara = get_field('aplicar_mascara');
                        $botao = get_field('botao');
                        $texto_botao = get_field('texto_botao');
                        $url_botao = get_field('url_botao');
                    ?>
                    <div class="slider-item<?= $aplicar_mascara ? ' mask-on' : ''; ?>">
                        <?php
                            if ($midia) : 
                                $extensao = pathinfo($midia['url'], PATHINFO_EXTENSION);
                                if (in_array(strtolower($extensao), ['mp4','webm','ogg'])) : ?>
                                    <div class="slider-video">
                                        <video autoplay muted loop playsinline class="w-100">
                                            <source src="<?php echo esc_url($midia['url']); ?>" type="video/<?php echo esc_attr($extensao); ?>">
                                        </video>
                                    </div>
                                <?php else : ?>
                                    <div class="slider-image">
                                        <img src="<?php echo esc_url($midia['url']); ?>" alt="<?php echo esc_attr($midia['alt']); ?>">
                                    </div>
                                <?php endif; 
                            endif; 
                        ?>
                        <div class="container">
                            <div class="slider-text">
                                <?php if($texto_principal) : ?>
                                    <h2 class="slider-title"><?= $texto_principal; ?></h2>
                                <?php endif; ?>
                                <?php if($texto_secundario) : ?>
                                    <h3 class="slider-title"><?= $texto_secundario; ?></h3>
                                <?php endif; ?>
                                <?php if($botao) : ?>
                                    <a href="<?= $url_botao; ?>" class="btn secondary-btn"><?= $texto_botao; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php
    endif;
    wp_reset_postdata();
    ?>
</section>
