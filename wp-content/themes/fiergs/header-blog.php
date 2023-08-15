<!doctype html>
<html lang="pt-br">
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body> 
<?php wp_body_open(); ?>
<header class="fixed-top">
    <nav class="menu-institucional-container-blog">
		<div class="container">
			<div class="row">
				<div class="col-12 p-2">
					<a class="header-menu" href="https://www.fiergs.org.br/">FIERGS</a>
					<a class="header-menu" href="https://www.sesirs.org.br/">SESI</a>
					<a class="header-menu" href="https://www.senairs.org.br/">SENAI</a>
					<a class="header-menu" href="https://www.ielrs.org.br/">IEL</a>
				</div>
			</div>
		</div>
    </nav>  
	<?php require_once  __DIR__ . "/inc/menu.php"; ?>
</header>
