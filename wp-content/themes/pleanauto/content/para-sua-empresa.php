<?php
    $args = array(
        'post_type' => 'para_sua_empresa',
        'posts_per_page' => 1,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
        $thumb_id = get_post_thumbnail_id(get_the_ID());
        $thumb_data = wp_get_attachment_image_src($thumb_id, 'full');
        $img_url = $thumb_data[0];
        $img_width = $thumb_data[1];
        $img_height = $thumb_data[2];   
    ?>
        <section id="para-sua-empresa" class="d-flex align-items-center">
            <div class="container">
                <?php the_post_thumbnail('full', ['class' => 'w-100']); ?>
                <div class="text">
                    <h3 class="mb-1">Para sua Empresa</h3>
                    <h2 class="mb-2"><?php the_title() ?></h2>
                    <?php the_content(); ?>
                    <a href="<?= get_permalink(get_page_by_path('para-voce')); ?>" class="btn primary-btn mt-1">leia mais</a>
                </div>
            </div>
        </section>
<?php endwhile;
wp_reset_postdata();
endif; ?>