<?php
/*
Template Name: Página Terapia
*/
get_header('page');
$imageDestaque = get_field('imagemDestaque');
$imageOnline = get_field('imagemOnline');
$imagePresencial = get_field('imagemPresencial');
?>

<div class="py-4" style="background: url(<?php echo esc_url($imageDestaque['url']); ?>) center center / cover no-repeat fixed">
	<div class="container">
		<div class="col-7 title-fiergs-post"><?php echo get_field('tituloDestaque'); ?></div>
		<div class="col-6 subtitle-fiergs-post py-4">
			<h3><?php echo get_field('subtituloDestaque'); ?></h3>
		</div>
		<div class="col-6 text-fiergs-post"><?php echo get_field('descricaoDestaque'); ?></div>
	</div>
</div>
<div class="py-4" style="background: url(<?php echo esc_url($imageOnline['url']); ?>) center center / cover no-repeat fixed">
	<div class="container">
		<div class="col-7 title-fiergs-post "><?php echo get_field('tituloOnline'); ?></div>
		<div class="col-6 text-fiergs-post py-4"><?php echo get_field('descricaoOnline'); ?></div>
		<div class="pb-5">
			<a href="<?php echo get_field('botao1Online'); ?>" class="btn btn-outline-success rounded-0 px-4 py-2 text-uppercase">Tenho Interesse <i class="fab fa-whatsapp"></i></a>
			<a href="<?php echo get_field('botao2Online'); ?>" class="btn btn-outline-success rounded-0 px-4 py-2 text-uppercase">Saiba Mais <i class="fas fa-external-link-alt"></i></a>
		</div>
	</div>
</div>
<div class="py-4" style="background: url(<?php echo esc_url($imagePresencial['url']); ?>) center center / cover no-repeat fixed">
	<div class="container">
		<div class="title-fiergs-post"><?php echo get_field('tituloPresencial'); ?></div>
		<div class="text-fiergs-post col-6 py-4"><?php echo get_field('descricaoPresencial'); ?></div>
		<div class="px-1">
			<a href="<?php echo get_field('botao1Presencial'); ?>
			" class="btn btn-outline-success rounded-0 px-4 py-2 text-uppercase">Tenho Interesse 
			<i class="fab fa-whatsapp"></i>
			</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 col-md-5 col-xl-5 col-xxl-5">
			<h2 class="contact-title">Contato</h2>
			<p class="contact-text">para informações envie sua mensagem!</p>
		</div>
		<div class="col-12 col-md-7 col-xl-7 col-xxl-7">
			<?php echo get_field('formularioContato'); ?>
		</div>
	</div>
</div>
<?php get_footer('page');  ?>
</body>
</html>