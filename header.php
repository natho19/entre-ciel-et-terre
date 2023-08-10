<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Favicon-->
	<link rel="icon" href="<?= ECT_IMG_URL . 'favicon.png'; ?>" type="image/x-icon" />
    <!-- CSS -->
    <?php wp_head(); ?>
</head>
<body class="mobile_nav_class jl-has-sidebar">
	<div class="options_layout_wrapper jl_clear_at jl_radius jl_none_box_styles jl_border_radiuss jl_en_day_night">
		<div class="options_layout_container full_layout_enable_front">
			<header class="header-wraper jl_header_magazine_style two_header_top_style header_layout_style3_custom jl_cus_top_share">
				<div class="header_top_bar_wrapper">
					<div class="container">
                        <!-- Top Bar -->
						<div class="row">
							<div class="col-md-12">
								<div class="menu-primary-container navigation_wrapper">
									<ul id="jl_top_menu" class="jl_main_menu">
										<li class="menu-item">
                                            <a href="#">Politique de confidentialité<span class="border-menu"></span></a>
										</li>
                                        <li class="menu-item">
                                            <a href="#">Forum<span class="border-menu"></span></a>
										</li>
									</ul>
								</div>
								<div class="jl_top_cus_social">
									<div class="menu_mobile_share_wrapper"> <span class="jl_hfollow">Nous suivre :</span>
										<ul class="social_icon_header_top jl_socialcolor">
											<li><a href="#" target="_blank"><i class="jli-facebook"></i></a></li>
											<li><a href="#" target="_blank"><i class="jli-youtube"></i></a></li>
											<li><a href="#" target="_blank"><i class="jli-instagram"></i></a></li>
											<li><a href="#" target="_blank"><i class="jli-twitter"></i></a></li>
											<li><a href="#" target="_blank"><i class="jli-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Main menu -->
				<div id="menu_wrapper" class="menu_wrapper jl_menu_sticky jl_stick">
					<div class="container">
						<div class="row">
							<div class="main_menu col-md-12">
								<div class="logo_small_wrapper_table">
									<div class="logo_small_wrapper">
										<a class="logo_link" href="http://localhost/entrecieletterre/">
											<img class="jl_logo_n" src="<?= ECT_IMG_URL . 'logo.jpg   '; ?>" alt="Logo" />
										</a>
									</div>
								</div>
                                <div class="menu-primary-container navigation_wrapper jl_cus_share_mnu">
									<ul id="mainmenu" class="jl_main_menu">
										<li class="menu-item current-menu-item current_page_item">
                                            <a href="http://localhost/entrecieletterre/">Accueil<span class="border-menu"></span></a>
										</li>
										<li class="menu-item">
                                            <a href="http://localhost/entrecieletterre/a-propos/">A propos<span class="border-menu"></span></a>
										</li>
										<li class="menu-item">
                                            <a href="#">Blog<span class="border-menu"></span></a>
										</li>
                                        <li class="menu-item">
                                            <a href="#">Vidéos<span class="border-menu"></span></a>
										</li>
                                        <li class="menu-item">
                                            <a href="#">Contact<span class="border-menu"></span></a>
										</li>
                                        <li class="menu-item">
                                            <a href="#">Rendez-vous<span class="border-menu"></span></a>
										</li>
									</ul>
								</div>
								<div class="search_header_menu jl_nav_mobile">
									<div class="menu_mobile_icons">
										<div class="jlm_w">
                                            <span class="jlma"></span>
                                            <span class="jlmb"></span>
                                            <span class="jlmc"></span>
										</div>
									</div>
									<div class="search_header_wrapper search_form_menu_personal_click">
                                        <i class="jli-search"></i>
									</div>
									<div class="select-dropdown">
										<select class="select">
											<option value="fr" selected>Français</option>
											<option value="eng">English</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="content_nav" class="jl_mobile_nav_wrapper">
                <div id="nav" class="jl_mobile_nav_inner">
                    <div class="menu_mobile_icons mobile_close_icons closed_menu"> <span class="jl_close_wapper"><span class="jl_close_1"></span><span class="jl_close_2"></span></span>
                    </div>
                    <ul id="mobile_menu_slide" class="menu_moble_slide">
                        <li class="menu-item current-menu-item current_page_item">
                            <a href="index.html">Accueil<span class="border-menu"></span></a>
                        </li>
                        <li class="menu-item">
                            <a href="#">A propos<span class="border-menu"></span></a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Blog<span class="border-menu"></span></a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Vidéos<span class="border-menu"></span></a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Contact<span class="border-menu"></span></a>
                        </li>
                        <li class="menu-item">
                            <a href="#">Rendez-vous<span class="border-menu"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search_form_menu_personal">
                <div class="menu_mobile_large_close">
                    <span class="jl_close_wapper search_form_menu_personal_click">
                        <span class="jl_close_1"></span>
                        <span class="jl_close_2"></span>
                    </span>
                </div>
                <form method="get" class="searchform_theme" action="#">
                    <input type="text" placeholder="Rechercher..." value="" name="s" class="search_btn" />
                    <button type="submit" class="button"><i class="jli-search"></i></button>
                </form>
            </div>
            <div class="mobile_menu_overlay"></div>