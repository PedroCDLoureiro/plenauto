<?php
    $args = array(
        'post_type' => 'para_voce',
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
        <section id="para-voce" class="d-flex align-items-center" style="background-image: url('<?= $img_url; ?>');height: <?= $img_height + 50; ?>px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase fw-bold mb-1">Para você</h3>
                        <h2 class="mb-3"><?php the_title() ?></h2>
                        <a href="<?= get_permalink(get_page_by_path('para-voce')); ?>" class="btn primary-btn">leia mais</a>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
wp_reset_postdata();
endif; ?>