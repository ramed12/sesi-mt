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
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                    'include' => array(11, 12, 14, 13, 15)
                ));
                foreach ($terms as $term) {
                ?>
                    <a class="menu-blog-category" href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo $term->name ?></a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>
<?php
/* echo do_shortcode('[smartslider3 slider="3"]'); */
?>
<?php if (is_home()) { ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 col-xxl-7 col-12">
                <h3 class="px-3 py-3 tag-section"><i class="fas fa-book-open"></i> Últimas Notícias</h3>
                <?php if (have_posts()) { ?>
                    <div class="owl-carousel owl-theme" style="background-color: #E4E4E4;">
                        <?php $my_query = new WP_Query('posts_per_page=3'); ?>
                        <?php while ($my_query->have_posts()) {
                            $my_query->the_post();
                            $do_not_duplicate[] = $post->ID;
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                $category =  esc_html($categories[0]->name);
                            }
                            $post_date = get_the_date('j') . ' de ' . get_the_date('F');
                            $char_limit = 160; //character limit
                            $content = $post->post_content; //contents saved in a variable
                        ?>
                            <div class="item">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-carousel">
                                <div class="px-5 py-4">
                                    <div class="row">
                                        <div class="tag-category w-50 py-4"><a href="<?php echo esc_url(get_term_link($categories[0]->term_id)); ?>"><?php echo $category; ?></a></div>
                                        <div class="tag-post-date w-50 py-4"><?php echo $post_date; ?></div>
                                        <div class="py-3 tag-title"><?php echo the_title(); ?></div>
                                        <div class="tag-description"><?php echo $content; ?></div>
                                        <div class="text-end"><a href="<?php echo the_permalink() ?>" class="btn btn-orange rounded-0 px-5 py-2">LEIA MAIS</a></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php
                }
                ?>
                <?php if (count($do_not_duplicate) >= 3) : ?>
                    <h3 class="py-3 tag-section"><i class="far fa-bell"></i> Mais Notícias</h3>
                    <?php
                    $postsPerPage = 4;
                    $args = array(
                        'post_type' => array('post'),
                        'post__not_in' => $do_not_duplicate,
                        'posts_per_page' => $postsPerPage,
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post();
                            $categories = get_the_category();
                            $post_date = get_the_date('j') . ' de ' . get_the_date('F');
                            if (!empty($categories)) {
                                $category =  esc_html($categories[0]->name);
                            }
                            $char_limit = 200; //character limit
                            $content = get_the_content(); //contents saved in a variable
                    ?>
                            <div style="background-color: #E4E4E4;" class="mb-5">
                                <div class="row">
                                    <div class="col-md-6 col-xl-6 col-xxl-6 col-12">
                                        <div class="more-cover">
                                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="more-img-thumbnail">
                                            <div class="more-text">
                                                <div class="more-comment"><i class="far fa-heart"></i> 1</div>
                                                <div class="more-liked"><i class="far fa-comment-dots"></i><?php comments_popup_link(' 0', ' 1', ' %'); ?></div>
                                                <div class="more-notice-category"><a href="<?php echo esc_url(get_term_link($categories[0]->term_id)); ?>"><?php echo $category; ?></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-6 col-xxl-6 col-12 py-3 px-5">
                                        <div class="tag-post-date-alt"><?php echo $post_date; ?></div>
                                        <div class="tag-title-alt py-2"><a href="<?php echo the_permalink() ?>"><?php echo the_title(); ?></a></div>
                                        <div class="tag-description-alt"><?php echo substr($content, 0, strrpos(substr($content, 0, $char_limit), '.')); ?>.</div>
                                    </div>
                                </div>
                            </div>
                            <div id="ajax-posts"></div>
                    <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                    <div class="text-end"><a href="javascript:void(0)" data-admin-url="<?php echo admin_url('admin-ajax.php'); ?>" id="more_posts" class="btn btn-orange rounded-0 px-4 py-2"><i class="fas fa-ellipsis-h fa-2x"></i></a></div>
                <?php endif; ?>
            </div>
            <div class="col-md-3 col-xxl-4 offset-1 col-12">
                <div>
                    <h3 class="py-3 tag-section"><i class="far fa-star"></i> Populares</h3>
                    <?php if (have_posts()) { ?>
                        <?php $my_query = new WP_Query('posts_per_page=4'); ?>
                        <?php while ($my_query->have_posts()) {
                            $my_query->the_post();
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                $category =  esc_html($categories[0]->name);
                            }
                            $post_date = get_the_date('j') . ' de ' . get_the_date('F');
                            $char_limit = 200; //character limit
                            $content_popular = get_the_content(); //contents saved in a variable
                        ?>
                            <div class="pt-2 border-bottom border-bottom-2">
                                <div class="row">
                                    <div class="tag-description"><a href="<?php echo the_permalink() ?>"><?php echo substr($content_popular, 0, strrpos(substr($content_popular, 0, $char_limit), '.')); ?>.</a></div>
                                    <div class="tag-category py-4"><a href="<?php echo esc_url(get_term_link($categories[0]->term_id)); ?>"><?php echo $category; ?></a></div>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
                <div>
                    <h3 class="py-3 tag-section"><i class="fab fa-instagram"></i> Estamos no insta!</h3>
                    <?php include "media-instagram.php";  ?>
                    <div class="insta-social"><a href="https://www.instagram.com/sesirsoficial/" target="_blank">@sesirsoficial</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="video py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 video-title">
                    <i class="far fa-play-circle"></i> Educação tá on!
                </div>
                <div class="col-12">
                    <?php echo do_shortcode('[Total_Soft_Gallery_Video id="1"]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer('blog');  ?>
</body>
</html>