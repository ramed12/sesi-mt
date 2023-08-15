
<!doctype html>
<html lang="pt-br">
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <?php 
	
    $menu_name = 'menu-1';

    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		
		$menu_items = wp_get_nav_menu_items($menu->term_id);
		 
	}
 
    ?>
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
	<nav class="navbar navbar-expand-lg navbar-white" id="nav-menu-container">
		<div id="nav-menu-cont" class="container">
            <a class="navbar-brand" href="#"><div class="logo-fiergs" id="logo-fiergs"></div></a>
			<button class="navbar-toggler" type="button" style="margin-top: -2.5rem !important" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button> 
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-md-auto ms-xl-auto ms-xxl-auto mb-2">
					<?php 
							$menu_list = ""; 
						foreach($menu_items as  $menu_item){
							if( $menu_item->menu_item_parent == 0 ) {
								$parent = $menu_item->ID;
								$menu_array = array();
								foreach( $menu_items as $submenu ) {
									if( $submenu->menu_item_parent == $parent ) {
										$parent_submenu = $submenu->ID;
										$lvl = array();
										$bool = true;
										
										if(get_field('descricao'))
										{
											$descrption =  get_field('descricao',$submenu->ID);
										} 
										if(!empty($descrption)){
											$descrption ='<div class="w-100 mega-caption">'.  $descrption  . '</div>';
										} 
										if($submenu->ID == 305 || $submenu->ID == 306)
										{
											$menu_array[] = '<div class="col-md-6 col-xl-6 col-xxl-6 col-12 py-3"><a href="' . $submenu->url . '" class="nav-link nav-border-top">' . $submenu->title . $descrption . '</a></div>' ."\n";
										}else if($submenu->ID == 303 || $submenu->ID == 304){
											$menu_array[] = '<div class="col-md-12 col-xl-12 col-xxl-12 col-12 py-3"><a href="' . $submenu->url . '" class="nav-link nav-border-top-2">' . $submenu->title . $descrption . '</a></div>' ."\n";
										}else{
											foreach($menu_items as $submenu_lvl){
												if($submenu_lvl->menu_item_parent == $parent_submenu){
														$lvl[] = '<div class="col-12"><a href="'.$submenu_lvl->url.'" class="submenu_lvl">'.$submenu_lvl->title.'</a></div>'."\n";
												}												

											}

											$menu_array[] = '<div class="col-md-4 col-xl-4 col-xxl-4 col-12 py-2"><a href="' . $submenu->url . '" class="nav-link-alt nav-border-top">' . $submenu->title . $descrption . '</a>'. implode( "\n", $lvl ) .'</div>' ."\n";

										}
									}

								}
								if( count( $menu_array ) > 0 ) {
                     
									$menu_list .= '<li class="nav-item dropdown has-megamenu">' ."\n";
									$menu_list .= '<a href="#" class="nav-link dropdown-toggle first-line" data-bs-toggle="dropdown" id="dropdown-'.$menu_item->ID.'">' . $menu_item->title . '</a>' ."\n";
									$menu_list .= '<div class="dropdown-menu megamenu fade-down" aria-labeledby="dropdown-'.$menu_item->ID.'"><div class="container"><div class="row">' ."\n";
									$menu_list .= implode( "\n", $menu_array );  
									$menu_list .= '</div></div></div>' ."\n";
									 
								} else {
									 
									$menu_list .= '<li class="nav-item">' ."\n";
									$menu_list .= '<a href="' . $menu_item->url . '" class="nav-link first-line">' . $menu_item->title . '</a>' ."\n";
								}

								$menu_list .= '</li>' ."\n";

							}
						} 
						
    						echo $menu_list;
					?>
					<li class="nav-item"><a class="nav-link first-line" href="https://www.sesirs.org.br/contato"><i class="fas fa-comment-dots"></i></a></li>
					<li class="nav-item dropdown has-megamenu"><a href="#" class="nav-link first-line dropdown-toogle"  data-bs-toggle="dropdown"><i class="fas fa-search"></i></a>
						<div class="dropdown-menu megamenu fade-down py-5" role="menu">
							<form action="http://homologacao.sesirs.org.br/busca" method="get" id="views-exposed-form-search-page-1" accept-charset="UTF-8">
								<div class="container">
									<div class="row">
										<div class="col-5">
											<div class="input-group mb-3">
											<div class="input-group-append">
													<span class="border-secondary form-control rounded-0 border-top-0 border-start-0 border-end-0 py-3" type="button" id="button-addon2"><i class="fas fa-search"></i></span>
												</div>
												<input type="text" class="form-control border-secondary rounded-0 border-top-0 border-start-0 border-end-0 py-3" placeholder="O que você está procurando?" name="busca">
												<div class="input-group-append">
													<span class="border-secondary form-control rounded-0 border-top-0 border-start-0 border-end-0 py-3" type="button" id="button-addon2"><i class="fas fa-sync-alt"></i></span>
												</div>
											</div>
										</div>
										<div class="col-5">
											<select name="categoria" id="categoria" class="form-control border-secondary rounded-0 border-top-0 border-start-0 border-end-0 py-3">
												<option value="All">Categoria</option>
												<option value="12">Agenda</option>
												<option value="6">Artigo</option>
												<option value="8">Educação</option>
												<option value="14">Institucional</option>
												<option value="7">Notícia</option>
												<option value="15">Programa</option>
												<option value="16">Saúde</option>
												<option value="9">Serviço</option>
												<option value="3839">Transparência</option>
											</select>
										</div>
										<div class="col-2">
											<button class="link_person2 w-100" type="submit">BUSCAR</button>
										</div>
										<div class="col-12">
											<ul style="list-style: none;display: flex;">
												<li>
													<span class="no-link-border-top">Inovação e Tecnologia</span>
												</li>
												<li>
													<span class="no-link">Educação</span>
												</li>
												<li>
													<span class="no-link">Produtividade</span>
												</li>
												<li>
													<span class="no-link">Eventos</span>
												</li>
												<li>
													<span class="no-link">Blog</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</form>
						</div> 
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
