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
<div class="container">
    <div class="row">
        <div class="col-12 p-5">
            <div class="text-center page-notfound">Página não encontrada</div>
        </div>
    </div>
</div>

<?php get_footer('blog');  ?>
</body>
</html>
