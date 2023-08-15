<?php
/*
Template Name: Página Vacina Para empresa
*/

get_header('vacina-empresa');  

echo get_field('banner');
?>
    <div class="col-12 mt-5">&nbsp;</div>
    <div class="container" >
        <div class="col-12" style="background-color: #FFF;border-radius: 30px;">
            <div class="row">
                <div class="py-4 text-center vacina-title">
                        Confira nosso portfólio de vacinas
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <ul class="vacina-empresa-menu">
                                    <li><a href="#">Para você</a></li>
                                    <li class="active"><a href="#">Para Empresa</a></li>
                                </ul>
                            </div>
                            <div class="col-12 pb-4">
                                <ul class="vacina-empresa-tipo">
                                    <?php
                                            $terms = get_terms(array(
                                                'taxonomy' =>'category',
                                                'order' => 'DESC', 
                                                'hide_empty' => false,        
                                                'include' => array(36,35,34,30,31,32,33)
                                            ));  
                                            $i =0;
                                    foreach($terms as $term){
                                    ?>
                                    <li <?php if($i == 0): ?>class="active" <?php endif; ?>><a href="#"><?php echo $term->name; ?></a></li> 
                                    <?php
                                    $i++;
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-12 text-center">
                                <div class="form-group left-inner-addon">
                                <input type="search" name="buscar" placeholder="Buscar" class="vacina-buscar icon-rtl" /> 
                                </div>
                            </div>
                            <div class="col-12 py-5">
                                <div class="container">
                                        <?php
                                                                    
                                            $args = array(
                                                'post_type' => array( 'vacinas' ),   
                                            );
                                            
                                            $data = new WP_Query( $args ); 
                                        ?>
                                    <div class="owl-carousel"> 
                                        <?php while($data->have_posts()){ 
                                                $data->the_post();    
                                        ?>
                                        <div class="text-white col-10">
                                            <div class="vacina-empresa-card-title"><?php echo the_title(); ?></div>
                                            <div class="vacina-empresa-card-content"><?php echo the_excerpt(); ?>
                                                <p class="text-center pt-4">
                                                <a href="#" class="vacina-empresa-card-btn-more btn-more-vacina" data-bs-toggle="modal" data-bs-target="#vacinaModal" data-excerpt="<?php echo the_excerpt(); ?>" data-title="<?php echo the_title(); ?>" data-content="<?php echo the_content(); ?>">leia mais</a>
                                                </p>
                                            </div>
                                        </div> 
                                        <?php } 
                                            wp_reset_postdata(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div> 

            <div class="container mt-5 mb-5 text-white"> 
                    <div class="col-12 p-5" style="background-color: #459B93;border-radius: 30px;">
                        <div class="row">
                        <?php
                            $args3 = array(
                                'post_type' => array( 'noticias' ),
                                'cat'       => 39  
                            );
                                                                
                            $row2 = new WP_Query( $args3 );
 
                            $i = 1;

                            while($row2->have_posts()){ 
                                $row2->the_post();
                         
                            if($i%2==0){
                        ?>
                        
                        <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="img-fluid" >
                        </div> 
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-12  offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1">
                            <div class="py-2 px-4 vacina-post-title"><?php echo the_title(); ?></div>
                            <div class="py-2 px-4 vacina-post-content"><?php echo the_content(); ?></div> 
                        </div>
                        <?php
                            }else{
                        ?>
                        
                        <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1 d-md-none d-xl-none d-lg-none d-xxl-none d-block">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="img-fluid" >
                        </div>  
                         <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-12">
                            <div class="py-2 vacina-post-title"><?php echo the_title(); ?></div>
                            <div class="py-2 vacina-post-content"><?php echo the_content(); ?></div> 
                        </div>
                        <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1 d-md-block d-xl-block d-lg-block d-xxl-block d-none">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="img-fluid" >
                        </div>  
                        
                        <?php }
                        $i++;
                        }
                        wp_reset_postdata();
                         ?>
                        </div>
                    </div> 
            </div>  
            
    <div class="col-12" style="background-color: #FFF;">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center vacina-title">O SESI faz parte da responsabilidade social coletiva!</div>
                <div class="col-12 vacina-content py-5">
                Com as recentes transformações do mundo, mais do que nunca, acreditamos na eficácia da vacinação como prevenção e agente da saúde pública. Ao estar em dia com a sua vacinação, você ajuda toda a comunidade a reduzir os casos de diversas doenças.
                </div>
            </div>
        </div> 
        <div class="col-12"> 
        <?php echo do_shortcode('[lgx-carousel cat="vacinas"]'); ?>
        </div>
    </div> 
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center vacina-title text-white">Fale agora com uma de nossas Clínicas de Vacinas</div>
                <div class="col-12 text-white py-5">
                    <div class="row">
                    <?php
                            $args1 = array(
                                'post_type' => array( 'unidades' ),
                                'cat'       => 16  
                            );
                                                                
                            $row = new WP_Query( $args1 );
                            $i = 1;
                            while($row->have_posts()){ 
                                $row->the_post();
                            if($i%2==0){
                    ?>
                          
                        <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12 py-4">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="img-fluid" >
                        </div>   
                        <div class="col-md-1 col-lg-1 col-xl-1 col-xxl-1 col-4 py-5 offset-lg-1 offset-xl-1 offset-xxl-1">
                            <a href="<?php echo get_field('localizacao'); ?>" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/themes/fiergs/assets/images/maps.png" class="img-fluid"></a>
                        </div>
                        <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-8 py-4">
                            <div class="py-2 vacina-post-title"><?php echo the_title(); ?></div>
                            <div class="py-2 vacina-post-content"><?php echo get_field('endereco'); ?></div>
                            <div class="py-2 vacina-post-content"><?php echo the_content(); ?></div>
                        </div>
                            <?php
                            }else{
                                ?>
                                <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12 py-4 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1 d-md-none d-xl-none d-lg-none d-xxl-none d-block">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="img-fluid" >
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 col-xxl-1 col-4  py-5">
                                    <a href="<?php echo get_field('localizacao'); ?>"  target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/themes/fiergs/assets/images/maps.png" class="img-fluid"></a>
                                </div>
                                <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-8 py-4">
                                    <div class="py-2 vacina-post-title"><?php echo the_title(); ?></div>
                                    <div class="py-2 vacina-post-content"><?php echo get_field('endereco'); ?></div>
                                    <div class="py-2 vacina-post-content"><?php echo the_content(); ?></div>
                                </div>
                                <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12 py-4 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1 d-md-block d-xl-block d-lg-block d-xxl-block d-none">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="img-fluid" >
                                </div> 
                                <?php
                            }
                            
                        $i++;
                        }
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div> 
    
    <div class="col-12" style="background-color: #FFF;padding-bottom:100px">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center vacina-title py-5">Vacinação do SESI na mídia</div>
                  <div class="col-12">
                <?php
                            $args2 = array(
                                'post_type' => array( 'noticias' ),
                                'cat'       => 37  
                            );
                                                                
                            $row = new WP_Query( $args2 ); 
                            while($row->have_posts()){ 
                                $row->the_post(); 
                ?>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12" >
                        <div class="col-12 shadow" style="background-color: #E5E5E5; border-radius: 30px;">
                            
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="vacina-news-image" >
                            <div class="vacina-news-title py-2 px-4"><?php echo the_title(); ?></div>
                            <div class="vacina-news-excerpt py-2 px-4"><?php echo the_excerpt(); ?></div>
                            <div class="vacina-news-date px-4 pb-4"><?php echo the_date( 'd/m/Y' ); ?></div>
                        </div>
                        </div>
                    </div>
                <?php }
                  wp_reset_postdata();
                ?>
                </div>
                <div class="col-12 text-center vacina-title py-5">Nossos clientes recomendam!</div>
            </div>
        </div>  
    </div>

    <div class="container">
        <div class="col-md-8 col-lg-8 col-xl-8 col-xxl-8 col-12 p-3 offset-md-2 offset-lg-2 offset-xl-2 offset-xxl-2 vacina-cit">
            <?php
                            $args4= array(
                                'post_type' => array( 'relatos' ),
                                'cat'       => 40  
                            );
                                                                
                            $row = new WP_Query( $args4 ); 
                            while($row->have_posts()){ 
                                $row->the_post(); 
        ?>
        <div class="row">
            <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="img-fluid" ></div>
            <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12 py-5">
                            <div class="vacina-news-excerpt  text-white"><?php echo the_content(); ?></div>
            </div>                 
        </div>  
        <?php 
            }
            wp_reset_postdata();
        ?>      

        </div>
            

    </div> 
        <div class="container py-5">
            <div class="row">
                    <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12"><img src="/wp-content/themes/fiergs/assets/images/logo_sesi_new.png" alt="img"></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12 py-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 footer-menu">
                        <div class="row">
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Para Você</div>
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Para Empresa</div>
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Clínicas</div>
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Notícias</div>
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Contato</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12">
                        <div class="row">
                            <div class="col-6 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="py-3">
                                    <img src="/wp-content/themes/fiergs/assets/images/whatsapp.png" >
                                </div>
                                <div class="footer-title">Fale Conosco</div>
                                <div class="footer-number">0800 051 8555</div>
                            </div>
                            <div class="col-6 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="py-3">
                                    <img src="/wp-content/themes/fiergs/assets/images/facebook.png" class="pe-3" >
                                    <img src="/wp-content/themes/fiergs/assets/images/instagram.png" >
                                </div>
                                <div class="footer-title">Siga o SESI nas Redes Sociais</div>
                                <div class="footer-number">@sesirsoficial</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>  
</div>

<!-- Modal -->
<div class="modal fade" id="vacinaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div class="text-end"><button type="button" class="btn-closed" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="py-3"><h5 class="modal-vacina-title"  id="modal-vacina-title">&nbsp;</h5></div> 
        <div class="modal-vacina-excerpt" id="modal-vacina-excerpt">&nbsp;</div>
        <div class="modal-vacina-content" id="modal-vacina-content">&nbsp;</div>
      </div> 
    </div>
  </div>
</div>
<?php get_footer('vacina'); ?>