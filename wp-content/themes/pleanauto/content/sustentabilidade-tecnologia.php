<?php
    $slug = 'sustentabilidade_tecnologia';
    $titulo = get_field('titulo', $slug);
    $subtitulo = get_field('subtitulo', $slug);
?>
<section id="sustentabilidade-tecnologia">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5 col-12 d-flex flex-column align-items-center justify-content-center titulo">
                <h2 class="text-white mb-3"><?= $titulo ?></h2>
                <p class="text-white subtitulo"><?= $subtitulo ?></p>
            </div>
            <div class="col-lg-9 col-md-7 col-12 depoimentos">
                <?php if( have_rows('depoimentos', $slug) ): ?>
                    <div id="slider-depoimentos">
                        <?php while( have_rows('depoimentos', $slug) ): the_row();
                            $imagem_depoimento = get_sub_field('imagem_depoimento');
                            $nome_depoimento = get_sub_field('nome_depoimento');
                            $cargo_depoimento = get_sub_field('cargo_depoimento');
                            $texto_depoimento = get_sub_field('texto_depoimento');
                            $avaliacao_depoimento = get_sub_field('avaliacao_depoimento');
                        ?>
                            <div class="d-flex flex-column item">
                                <div class="d-flex justify-content-end">
                                    <div class="avaliacao">
                                        <div class="rating-fill" style="width: <?= ($avaliacao_depoimento / 5) * 100 ?>%;"></div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-start gap-3 content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35.217" height="26.246" viewBox="0 0 35.217 26.246">
                                        <g id="Group_242" data-name="Group 242" transform="translate(-435.783 -4033.877)">
                                            <path data-name="Union 1" d="M.382,18.546c0-.044,0-.087,0-.13l-.1.114s.084-9.4,0-9.371A11.322,11.322,0,0,1,6.649.835c5.106-2.291,6.152.859,6.152.859a1.887,1.887,0,0,1,0,1.88,2.261,2.261,0,0,1-1.973,1.388C4.541,6.6,5.349,11.136,5.349,11.136l1.735-.279-.038.043a7.5,7.5,0,0,1,.895-.053,7.7,7.7,0,0,1,0,15.4A7.63,7.63,0,0,1,.382,18.546Z" transform="translate(435.5 4033.877)" fill="#7b38a7"/>
                                            <path data-name="Union 2" d="M.382,18.546c0-.044,0-.087,0-.13l-.1.114s.084-9.4,0-9.371A11.322,11.322,0,0,1,6.649.835c5.106-2.291,6.152.859,6.152.859a1.887,1.887,0,0,1,0,1.88,2.261,2.261,0,0,1-1.973,1.388C4.541,6.6,5.349,11.136,5.349,11.136l1.735-.279-.038.043a7.5,7.5,0,0,1,.895-.053,7.7,7.7,0,0,1,0,15.4A7.63,7.63,0,0,1,.382,18.546Z" transform="translate(455.5 4033.877)" fill="#7b38a7"/>
                                        </g>
                                    </svg>
                                    <p class="depoimento"><?= $texto_depoimento ?></p>
                                </div>
                                <div class="d-flex align-items-center infos-depoimento">
                                    <div class="d-flex align-items-center justify-content-center image-depoimento">
                                        <img src="<?= $imagem_depoimento['url'] ?>" alt="<?= $nome_depoimento ?>">
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <span class="nome"><?= $nome_depoimento ?></span>
                                        <span class="cargo"><?= $cargo_depoimento ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>