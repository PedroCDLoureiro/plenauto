        <?php 
            $slug = "dados_rodape";
            $x = get_field('x', $slug);
            $youtube = get_field('youtube', $slug);
            $instagram = get_field('instagram', $slug);
            $facebook = get_field('facebook', $slug);
            $whatsapp = get_field('whatsapp', $slug);
            $email = get_field('email', $slug);
        ?>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-12 d-flex flex-column align-items-center logo">
                        <img src="<?= WP_TEMPLATE; ?>/assets/images/logo.png" alt="Plenauto">
                        <div class="mt-3 d-flex gap-2 redes-sociais">
                            <?php if($x) : ?>
                                <div class="rede x" >
                                    <a href="<?= $x ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#2d2d2d" d="M357.2 48L427.8 48 273.6 224.2 455 464 313 464 201.7 318.6 74.5 464 3.8 464 168.7 275.5-5.2 48 140.4 48 240.9 180.9 357.2 48zM332.4 421.8l39.1 0-252.4-333.8-42 0 255.3 333.8z"/></svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if($youtube) : ?>
                                <div class="rede youtube" >
                                    <a href="<?= $youtube ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#2d2d2d" d="M549.7 124.1C543.5 100.4 524.9 81.8 501.4 75.5 458.9 64 288.1 64 288.1 64S117.3 64 74.7 75.5C51.2 81.8 32.7 100.4 26.4 124.1 15 167 15 256.4 15 256.4s0 89.4 11.4 132.3c6.3 23.6 24.8 41.5 48.3 47.8 42.6 11.5 213.4 11.5 213.4 11.5s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zM232.2 337.6l0-162.4 142.7 81.2-142.7 81.2z"/></svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if($instagram) : ?>
                                <div class="rede instagram" >
                                    <a href="<?= $instagram ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path fill="#2d2d2d" d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if($facebook) : ?>
                                <div class="rede facebook" >
                                    <a href="<?= $facebook ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#2d2d2d" d="M80 299.3l0 212.7 116 0 0-212.7 86.5 0 18-97.8-104.5 0 0-34.6c0-51.7 20.3-71.5 72.7-71.5 16.3 0 29.4 .4 37 1.2l0-88.7C291.4 4 256.4 0 236.2 0 129.3 0 80 50.5 80 159.4l0 42.1-66 0 0 97.8 66 0z"/></svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1 col-12 d-flex flex-column align-items-center justify-content-center links">
                        <div class="institucional">
                            <h3>Institucional</h3>
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu_institucional', 
                                    'menu_class' => 'd-flex flex-column menu',
                                ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 d-flex flex-column align-items-center justify-content-center links">
                        <div class="servicos">
                            <h3>Serviços</h3>
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu_servicos', 
                                    'menu_class' => 'd-flex flex-column menu',
                                ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 d-flex flex-column align-items-center justify-content-center links">
                        <div class="atendimento">
                            <h3>Atendimento</h3>
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#fff" d="M380.9 97.1c-41.9-42-97.7-65.1-157-65.1-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480 117.7 449.1c32.4 17.7 68.9 27 106.1 27l.1 0c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3 18.6-68.1-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6zM325.1 300.5c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                                    <a href="https://wa.me/<?= preg_replace('/\D/', '', $whatsapp); ?>" target="_blank"><?= $whatsapp ?></a>
                                </li>
                                <li>
                                    <a href="mailto:<?= $email ?>"><?= $email ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="copyright" class="text-center">
            Criação e Desenvolvimento <a href="https://www.newhumans.com.br/" target="_blank">Agência New Humans</a> | Plataforma <a href="https://addsuite.com.br/" target="_blank">Add Suite</a> - Tecnologia e Comunicação para Transformação Digital
        </div>
    </body>
</html>