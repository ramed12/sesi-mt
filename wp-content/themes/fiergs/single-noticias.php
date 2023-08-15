<?php
/*
Template Post-Type: Noticias
*/

get_header('vacina-noticia');  
  
			/* Start the Loop */
			while ( have_posts() ) :
		
				the_post();
?>
<div style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>);background-repeat: no-repeat;background-size: cover;height: 520px;">&nbsp;</div>
<div class="container p-5">
    <div class="row">
    <div class="col-2 text-end ">
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
					<div class="single-title-news"><?php echo the_title(); ?></div>
				</div>
				<div class="col-12 py-2">
					<div class="single-date-news"><?php echo get_the_date( 'j/m/Y'); ?></div>
				</div>
				<div class="col-9 py-2">
					<div class="single-content-news"><?php echo get_the_content(); ?></div>
				</div>
           </div>

    </div>
</div>
<div class="vacina-portifolio">
<div class="container py-5">
            <div class="row">
                    <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12"><img src="/wp-content/themes/fiergs/assets/images/logo_sesi_new.png" alt="img"></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12 py-5 py-md-0 py-lg-0 py-xl-0 py-xxl-0 footer-menu">
                        <div class="row">
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Para Você</div>
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Para Empresa</div>
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Clínicas</div>
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12 pb-3">Notícias</div>
                            <div class="col-2 col-md-12 col-lg-12 col-xl-12 col-xxl-12">Contato</div>
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
<?php
    endwhile;   // End of the loop.
    get_footer('vacina'); 
?>