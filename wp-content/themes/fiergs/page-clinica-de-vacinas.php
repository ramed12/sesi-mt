<?php
/*
Template Name: Página Clínica de Vacinas
*/

get_header('vacina');

/* echo get_field('banner'); */
echo get_field('banner');

?>
<div class="col-12 " style="position: relative; background-color: #EFEFEF;">
    <div class="col-12 py-5 px-5 pb-5" style="background-color: #EFEFEF;">
        <div class="container pt-5 pb-5">
            <div class="row col-10 pb-5">
                <div class="col-2 text-end py-3 pb-5">
                    <div class="col-12">
                        <span class="fa-stack fa-1x i-facebook">
                            <a href="https://www.facebook.com/sharer/sharer/php?u=&t=" title="Compartilhe no Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.title)); return false;">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </a>
                        </span>
                    </div>
                    <div class="col-12 mt-2">
                        <span class="fa-stack fa-1x i-linkedin">
                            <a href="http://www.linkedin.com/ShareArticle?mini=true&url=&title=&summary&source=" target="_blank" onclick="window.open('http://www.linkedin.com/ShareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
                            </a>
                        </span>
                    </div>
                    <div class="col-12 mt-2">
                        <span class="fa-stack fa-1x i-youtube">
                            <a href="mailto:?subject=&body=" target="_blank" onclick="window.open('mailto:subject=' + encodeURIComponent(document.title) + '&body=' + encodeURIComponent(document.URL)); return false;">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                            </a>
                        </span>
                    </div>
                    <div class="col-12 mt-2">
                        <span class="fa-stack fa-1x i-instagram">
                            <a href="https://www.youtube.com/channel/UCfYDyZ9XxOFw9J3ijgd8pYA">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fas fa-link fa-stack-1x fa-inverse"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-10 pb-5">
                    <div class="col-12">
                        <!-- <div class="single-title-news"><?php echo the_title(); ?></div> -->
                        <div class="col-12 text-center vacina-title text-blue">Você e sua familia livres de gripe!</div>
                        <div class="col-12 vacina-content py-5">
                            <p class="col-12 text-secondary">
                                Todos os anos, o SESI oferece às indústrias a Campanha de Vacinação Contra a Gripe, que contempla a conscientização sobre a iniciativa e a aplicação das vacinas nas dependências da empresa e em algumas de nossas unidades.
                            </p>
                            <p class="col-12 text-secondary">
                                O objetivo desse programa é levar aos trabalhadores e seus dependentes mais qualidade de vida, reduzindo os afastamentos e evitando os impactos econômicos e sociais gerados pela disseminação do vírus.
                            </p>
                            <p class="col-12 text-secondary">
                                Com as recentes transformações do mundo, mais do que nunca, acreditamos na eficácia da vacinação como prevenção contra a gripe e como agente da saúde pública.
                            </p>
                        </div>

                    </div>
                    <div class="col-12 py-5 pb-5">
                        <!-- <div class="single-date-news"><?php echo get_the_date('j/m/Y'); ?></div> -->
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- card-map -->

    <div class="col-12 card-map py-5 pt-5 ps-5">
        <style>
            .card-map {
                position: absolute;
                width: 75%;
                height: 50%;
                left: 13%;
                top: 45%;


                background: #FFFFFF;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 30px;
            }
        </style>
        <div class="row">
            <div class="col-12 px-5 text-center vacina-title text-blue">Encontre a Unidade mais próxima e imunize-se contra a gripe</div>
            <div class="col-4 py-5">
                <?php
                $args1 = array(
                    'post_type' => array('unidades'),
                    'cat'       => 16
                );

                $row = new WP_Query($args1);
                while ($row->have_posts()) {
                    $row->the_post();

                ?>
                    <div class="row">
                        <a href="" class="button-map col-6 ps-5" data-map="<?php echo get_field('localizacao'); ?>">
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/fiergs/assets/images/maps-mini-black.png" class="link-secondary" style="width: 32%; height: 32%;" /></a>
                        <div class="row col-6">
                            <h5><?php echo the_title(); ?></h5>
                            <a href="javascript;" class="py-2 link-secondary"><?php echo get_field('endereco'); ?></a>
                        </div>
                    </div>

                <?php }
                wp_reset_postdata();
                ?>
            </div>

            <div class="col-8 py-5">
                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.404432334234!2d-51.17170578535584!3d-29.91025693200768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197004d7a8411b%3A0x1dfa50d3e561b056!2sR.%20Aurora%2C%201220%20-%20Mal.%20Rondon%2C%20Canoas%20-%20RS%2C%2092020-510!5e0!3m2!1spt-BR!2sbr!4v1643813083076!5m2!1spt-BR!2sbr" width="92%" height="92%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="col-12" style="background-color: #04BCAB; height: 350px;">
        <br><br>
    </div>
</div>

<div class="col-12" style="background-color: #FFF;padding-bottom:100px">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center vacina-title">Outros assuntos relacionadas</div>
            <div class="col-12 py-5">
                <div class="row news">
                    <?php
                    $args2 = array(
                        'post_type' => array('noticias'),
                        'cat'       => 37
                    );

                    $row = new WP_Query($args2);
                    while ($row->have_posts()) {
                        $row->the_post();
                    ?>
                        <div>
                            <a href="<?php echo the_permalink() ?>">
                                <div style="background-color: #E5E5E5; border-radius: 30px;">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="vacina-news-image">
                                    <div class="vacina-news-title py-2 px-4"><?php echo the_title(); ?></div>
                                    <div class="vacina-news-excerpt py-2 px-4"><?php echo the_excerpt(); ?></div>
                                    <div class="vacina-news-date px-4 pb-4"><?php echo the_date('d/m/Y'); ?></div>
                                </div>
                            </a>
                        </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>
</div>


<!-- Modal -->
<!-- <div class="modal fade" id="vacinaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-end"><button type="button" class="btn-closed" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="py-3">
                    <h5 class="modal-vacina-title" id="modal-vacina-title">&nbsp;</h5>
                </div>
                <div class="modal-vacina-excerpt" id="modal-vacina-excerpt">&nbsp;</div>
                <div class="modal-vacina-content" id="modal-vacina-content">&nbsp;</div>
            </div>
        </div>
    </div>
</div> -->
<?php get_footer('clinica'); ?>