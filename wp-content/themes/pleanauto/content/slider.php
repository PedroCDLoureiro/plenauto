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
                    ?>
                    <div class="slider-item">
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
                                <h2 class="slider-title"><?php the_content(); ?></h2>
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
