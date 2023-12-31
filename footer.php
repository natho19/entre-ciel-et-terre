			<!-- Start footer -->
            <footer id="footer-container" class="jl_footer_act enable_footer_columns_dark">
				<div class="footer-columns">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div id="sprasa_about_us_widget-2" class="widget jellywp_about_us_widget">
									<div class="widget_jl_wrapper about_widget_content">
										<div class="jellywp_about_us_widget_wrapper">
											<img class="footer_logo_about" src="<?= ECT_IMG_URL . 'logo-dark.jpg'; ?>" alt="Logo" />
											<p><?= pll_e('Tout savoir sur les visas des USA et du CANADA'); ?></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 offset-md-1">
								<div id="sprasa_recent_post_text_widget-8" class="widget post_list_widget">
									<div class="widget_jl_wrapper">
										<div class="ettitle">
											<div class="widget-title">
												<h2 class="jl_title_c"><?= pll_e('Liens utiles'); ?></h2>
											</div>
										</div>
										<!-- Widget useful links -->
										<?php if (is_active_sidebar('footer-useful-links')) : ?>
											<?php dynamic_sidebar('footer-useful-links'); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="widget_jl_wrapper jl_clear_at">
									<div id="sprasa_category_image_widget_register-2" class="widget jellywp_cat_image">
										<div class="widget-title">
											<h2 class="jl_title_c"><?= pll_e('Nous suivre'); ?></h2>
										</div>
										<div id="sprasa_about_us_widget-4" class="widget jellywp_about_us_widget">
											<div class="widget_jl_wrapper about_widget_content">
												<div class="jellywp_about_us_widget_wrapper">
													<div class="social_icons_widget">
														<ul class="social-icons-list-widget icons_about_widget_display">
															<li><a href="#" class="facebook" target="_blank"><i class="jli-facebook"></i></a></li>
															<li><a href="https://www.youtube.com/@1Entre_Ciel_et_Terre" class="youtube" target="_blank"><i class="jli-youtube"></i></a></li>
															<li><a href="#" class="instagram" target="_blank"><i class="jli-instagram"></i></a></li>
															<li><a href="#" class="twitter" target="_blank"><i class="jli-twitter"></i></a></li>
															<li><a href="#" class="linkedin" target="_blank"><i class="jli-linkedin"></i></a></li>
															<li>
																<a href="https://www.tiktok.com/@1entre_ciel_et_terre" class="footer-svg-icon" target="_blank">
																	<img src="<?= ECT_IMG_URL . 'tiktok.svg'; ?>" alt="Tiktok">
																</a>
															</li>
															<li>
																<a href="https://wa.me/12034241012" class="footer-svg-icon" target="_blank">
																	<img src="<?= ECT_IMG_URL . 'whatsapp.svg'; ?>" alt="Whatsapp">
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom enable_footer_copyright_dark">
					<div class="container">
						<div class="row bottom_footer_menu_text">
							<div class="col-md-12">
								<div class="jl_ft_w">
                                    &copy; Copyright 2023 Entre Ciel Et Terre by <a href="https://www.nakpawu.com/">Code House</a> and <a href="https://instagram.com/gladiart_?igshid=OGQ5ZDc2ODk2ZA==">GladiArt</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer -->
			<div id="go-top"> <a href="#go-top"><i class="jli-up-chevron"></i></a>
			</div>
		</div>
	</div>
    <!-- JS files location -->
    <?php wp_footer(); ?>
</body>

</html>