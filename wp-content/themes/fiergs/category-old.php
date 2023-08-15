
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage FIERGS
 * @since FIERGS 1.0
 */

get_header('blog');

echo  do_shortcode('[smartslider3 slider="2"]');

?> 
<nav class="menu-institucional-container-blog">
    <div class="container">
        <div class="row">
            <div class="col-12 p-3">
    <?php
    $terms = get_terms(array(
        'taxonomy' =>'category',
        'hide_empty' => false
    ));  
    foreach($terms as $term){  
        if($term->term_id != 1 && $term->term_id != 5){ 
    ?> 
        <a class="menu-blog-category" href="<?php echo esc_url( get_term_link($term)); ?>"><?php echo $term->name ?> </a>
    <?php 
        }
    } 

    $cat = get_the_category();
    ?>
        </div>
    </div>
    </div>
</nav>
<div class="container py-5">
    <div class="row">
        <div class="col-7">
            <h3 class="px-3 py-3 tag-section"><i class="fas fa-book-open"></i> <?php echo $cat[0]->name; ?></h3> 
           
            <?php if ( have_posts() ) { ?> 
                
                <div class="owl-carousel owl-theme" style="background-color: #E4E4E4;"> 
                <?php $my_query = new WP_Query( 'posts_per_page=3&cat='.$cat[0]->term_id ); ?> 
                <?php while ( $my_query->have_posts() ) { 
                    $my_query->the_post();  
                    $do_not_duplicate[] = $post->ID;

               $categories = get_the_category();
               if ( ! empty( $categories ) ) {
                    $category =  esc_html( $categories[0]->name );   
                }
                $post_date = get_the_date( 'j' ). ' de '.get_the_date( 'F' );
                $char_limit = 160; //character limit
                $content = $post->post_content; //contents saved in a variable
                
                ?>
                <div class="item">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-carousel">
                    <div class="px-5 py-4">
                        <div class="row">
                            <div class="tag-category w-50 py-4"><?php echo $category; ?></div> <div class="tag-post-date w-50 py-4"><?php echo $post_date; ?></div>
                            <div class="py-3 tag-title"><?php echo the_title(); ?></div>
                            <div class="tag-description"><?php echo $content; ?></div>
                            <div class="text-end"><a href="<?php echo the_permalink() ?>" class="btn btn-orange rounded-0 px-5 py-2">LEIA MAIS</a></div>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                </div>  
            <?php }
            print_r( have_posts());exit; 
             ?>
            <h3 class="py-3 tag-section"><i class="far fa-bell"></i> Mais Notícias</h3> 
            
            <?php  
             while ( have_posts() ) : the_post(); 
            if ( in_array( $post->ID, $do_not_duplicate ) ) continue;  

                $categories = get_the_category();
                $post_date = get_the_date( 'j' ). ' de '.get_the_date( 'F' ); 
                if ( ! empty( $categories ) ) {
                    $category =  esc_html( $categories[0]->name );   
                }
                
                $char_limit = 200; //character limit
                $content = $post->post_content; //contents saved in a variable
                ?>
                
            <div style="background-color: #E4E4E4;" class="mb-5">
                <div class="row">
                    <div class="col-md-6 col-xl-6 col-xxl-6 col-12">
                        <div class="more-cover">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" class="more-img-thumbnail" >
                            <div class="more-text">
                                <div class="more-comment"><i class="far fa-heart"></i> 1</div>
                                <div class="more-liked"><i class="far fa-comment-dots"></i><?php comments_popup_link( ' 0', ' 1', ' %' ); ?></div>
                                <div class="more-notice-category"><a href="<?php echo esc_url( get_term_link($categories[0]->term_id)); ?>"><?php echo $category; ?></a></div>
                            </div> 
                        </div>
                        <div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-xl-6 col-xxl-6 col-12 py-3 px-5">
                        
                        <div class="tag-post-date-alt"><?php echo $post_date; ?></div>
                        <div class="tag-title-alt"><a href="<?php echo the_permalink() ?>"><?php echo the_title(); ?></a></div>
                        <div class="tag-description-alt"><?php echo substr($content, 0, strrpos(substr($content, 0, $char_limit), '.')); ?>.</div>
                        
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            <div class="text-end"><a href="#" class="btn btn-orange rounded-0 px-4 py-2"><i class="fas fa-ellipsis-h fa-2x"></i></a></div>
         
        </div>
        <div class="col-4 offset-1">
            <h3 class="py-3 tag-section"><i class="far fa-star"></i> Populares</h3>
            
            <?php if ( have_posts() ) { ?> 
                
                <?php $my_query = new WP_Query( 'posts_per_page=4' ); ?> 
                <?php while ( $my_query->have_posts() ) { 
                    $my_query->the_post();   

               $categories = get_the_category();
               if ( ! empty( $categories ) ) {
                    $category =  esc_html( $categories[0]->name );   
                }
                $post_date = get_the_date( 'j' ). ' de '.get_the_date( 'F' );
                $char_limit = 200; //character limit
                $content_popular = get_the_content(); //contents saved in a variable
                
                ?>
                    <div class="pt-2 border-bottom border-bottom-2">
                        <div class="row">  
                            <div class="tag-description"><a href="<?php echo the_permalink() ?>"><?php echo substr($content_popular, 0, strrpos(substr($content_popular, 0, $char_limit), '.')); ?>.</a></div>  
                            <div class="tag-category py-4"><a href="<?php echo esc_url( get_term_link($categories[0]->term_id)); ?>"><?php echo $category; ?></a></div>
                        </div>
                    </div>
                <?php } ?> 
            <?php } ?>
            <h3 class="py-3 tag-section"><i class="fab fa-instagram"></i> Estamos no insta!</h3> 
            <?php  include "media-instagram.php";  ?> 
            <div class="insta-social"><a href="https://www.instagram.com/sesirsoficial/" target="_blank">@sesirsoficial</a></div>
        </div>
    </div>
</div>
<?php get_footer('blog');  ?>
</body>
</html>
