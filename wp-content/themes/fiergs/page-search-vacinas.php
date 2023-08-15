<?php
/*
Template Name: Search Page
*/

get_header('vacina');
echo get_field('banner');

?>
<div class="col-12 mt-5">&nbsp;</div>
<div class="col-12 text-white pt-5" style="margin: auto;">
    <div class="col-12 mt-5">
            <?php
            $args1 = array(
                'post_type' => array('vacinas'),
            );
            $row1 = new WP_Query($args1);
            ?>
                <div class="row col-12 test justify-content-center" style="gap: 0.85rem; padding: 0 !important;">
                    <?php
                    while ($row1->have_posts()) {
                        $row1->the_post();
                    ?>
                    <div class="col-3 pb-5" style="background-color: #E5E5E5; border-radius: 30px;">
                        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-12" data-category="<?php echo get_the_category(); ?>">
                            <div class="vacina-news-title py-2 px-4" data-title="<?php echo the_title(); ?>"><?php echo the_title(); ?></div>
                        </div>
                        <div class="vacina-post-content col-md-10 col-lg-10 col-xl-10 col-xxl-10 col-10 offset-md-1 offset-lg-1 
                        offset-xl-1 offset-xxl-1 d-md-block d-xl-block d-lg-block d-xxl-block d-none text-dark px-1">
                            <?php echo the_excerpt(); ?>
                            <p class="text-center pt-4">
                                <a href="<?php echo get_permalink()?>" class="vacina-card-btn-more btn-more-vacina" >leia mais</a>
                            </p>
                        </div>
                    </div>    
                    <?php }
                    // wp_reset_postdata(); 
                    ?>
                    <?php
                        global $wp_query;
                        $total_results = $wp_query->found_posts;
                        ?>
                </div>
            <?php
            ?>    
    </div>
</div>

<?php get_footer('vacina');  ?>