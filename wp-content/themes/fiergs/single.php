
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
       'hide_empty' => false,
       'exclude' => array(1,5,23,22,24,21,25,18,17,20,19,16)
   ));  
   foreach($terms as $term){  
   ?> 
       <a class="menu-blog-category" href="<?php echo esc_url( get_term_link($term)); ?>"><?php echo $term->name ?> </a>
   <?php 
   } 
   ?>
       </div>
   </div>
</div>
</nav>
   <div class="container p-5">
	   <div class="row">
		   <div class="col-2 text-end py-3">
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
		   <div class="col-10">
				<div class="col-12">
					<div class="single-title"><?php echo the_title(); ?></div>
				</div>
				<div class="col-12 py-2">
					<div class="single-date"><?php echo get_the_date( 'j/m/Y'); ?></div>
				</div>
				<div class="col-9 py-2">
					<div class="single-description"><?php echo get_the_content(); ?></div>
				</div>
		   </div>
	   </div>
   </div>
<?php get_footer('blog');  ?>
</body>
</html>
