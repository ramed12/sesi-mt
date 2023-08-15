
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
 *
* Template Name: Post Blog SESI Educação
*/

get_header(); ?>
  
<main class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2><?php printf( __( 'Resultado da pesquisa: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>
            </div>
        </div>
    </div>
</main><!-- #main --> 
<?php get_footer();  ?>
</body>
</html>
