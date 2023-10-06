<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Favicon-->
	<link rel="icon" href="<?= ECT_IMG_URL . '/favicon/android-chrome-512x512.png'; ?>" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= ECT_IMG_URL . '/favicon/apple-touch-icon.png'; ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= ECT_IMG_URL . '/favicon/favicon-32x32.png'; ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= ECT_IMG_URL . '/favicon/favicon-16x16.png'; ?>">
	<link rel="manifest" href="<?= ECT_IMG_URL . '/favicon/site.webmanifest'; ?>">
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
								<!-- Top menu -->
								<?php
								wp_nav_menu([
									'theme_location'  => 'top-menu',
                                    'depth'           => 1,
                                    'container'       => 'div',
                                    'container_class' => 'menu-primary-container navigation_wrapper',
                                    'menu_class'      => 'jl_main_menu',
                                    'menu_id'         => 'jl_top_menu',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
								]);
								?>
								<!-- Social medias -->
								<div class="jl_top_cus_social">
									<div class="menu_mobile_share_wrapper"> <span class="jl_hfollow"><?= pll_e('Nous suivre :'); ?></span>
										<ul class="social_icon_header_top jl_socialcolor">
											<li><a href="#" target="_blank"><i class="jli-facebook"></i></a></li>
											<li><a href="https://www.youtube.com/@1Entre_Ciel_et_Terre" target="_blank"><i class="jli-youtube"></i></a></li>
											<li><a href="#" target="_blank"><i class="jli-instagram"></i></a></li>
											<li><a href="#" target="_blank"><i class="jli-twitter"></i></a></li>
											<li><a href="#" target="_blank"><i class="jli-linkedin"></i></a></li>
											<li class="header-svg-icon">
												<a href="https://www.tiktok.com/@1entre_ciel_et_terre" target="_blank">
													<img class="img-to-adjust" src="<?= ECT_IMG_URL . 'tiktok.svg'; ?>" alt="Tiktok">
												</a>
											</li>
											<li class="header-svg-icon">
												<a href="#" target="_blank">
													<img src="<?= ECT_IMG_URL . 'whatsapp.svg   '; ?>" alt="Whatsapp">
												</a>
											</li>
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
										<a class="logo_link" href="<?= home_url(); ?>">
											<img class="jl_logo_n" src="<?= ECT_IMG_URL . 'logo.jpg   '; ?>" alt="Logo" />
										</a>
									</div>
								</div>
								<?php
								wp_nav_menu([
									'theme_location'  => 'main',
                                    'depth'           => 1,
                                    'container'       => 'div',
                                    'container_class' => 'menu-primary-container navigation_wrapper jl_cus_share_mnu',
                                    'menu_class'      => 'jl_main_menu',
                                    'menu_id'         => 'mainmenu',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker(),
								]);
								?>
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
										<?php pll_the_languages(['dropdown'  => 1]); ?>
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
					<?php
					wp_nav_menu([
						'theme_location'  => 'main',
						'depth'           => 1,
						'container'       => '',
						'menu_class'      => 'menu_moble_slide',
						'menu_id'         => 'mobile_menu_slide',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					]);
					?>
                </div>
            </div>
            <div class="search_form_menu_personal">
                <div class="menu_mobile_large_close">
                    <span class="jl_close_wapper search_form_menu_personal_click">
                        <span class="jl_close_1"></span>
                        <span class="jl_close_2"></span>
                    </span>
                </div>
                <form role="search" method="get" action="<?= home_url(); ?>" class="searchform_theme">
                    <input type="search" name="s" class="search_btn" placeholder="Rechercher..."/>
                    <button type="submit" class="button"><i class="jli-search"></i></button>
                </form>
            </div>
            <div class="mobile_menu_overlay"></div>