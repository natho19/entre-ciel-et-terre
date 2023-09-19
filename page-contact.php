<?php get_header(); ?>

<div class="jl_single_style3">
    <div class="single_content_header single_captions_overlay_image_full_width">
        <div class="image-post-thumb" style="background-image: url('<?= ECT_IMG_URL . '1920x800.png' ?>')"></div>
        <div class="single_post_entry_content"> 
            <h1 class="single_post_title_main">Contact</h1>
        </div>
    </div>
</div>

<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8 loop-large-post" id="content">
                <div class="widget_container content_page">
                    <div class="contact-informations">
                        <div class="row contact-card">
                            <div class="col-md-6 mb-4">
                                <h2>USA</h2>
                                <ul class="list-unstyled">
                                    <li class="d-block mb-3">
                                        <span class="d-block text-black small text-uppercase font-weight-bold">Adresse :</span>
                                        <span>3409, Bld du Zio - Hédjranawoé, Lomé-Togo</span>
                                    </li>
                                    <li class="d-block mb-3">
                                        <span class="d-block text-black small text-uppercase font-weight-bold">Téléphone :</span>
                                        <span>+228 92 42 15 95 / 90 44 93 92</span>
                                    </li>
                                    <li class="d-block mb-3">
                                        <span class="d-block text-black small text-uppercase font-weight-bold">Email :</span>
                                        <span>contact@fa-iuk.com</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-4">
                                <h2>Togo</h2>
                                <ul class="list-unstyled">
                                    <li class="d-block mb-3">
                                        <span class="d-block text-black small text-uppercase font-weight-bold">Adresse :</span>
                                        <span>3409, Bld du Zio - Hédjranawoé, Lomé-Togo</span>
                                    </li>
                                    <li class="d-block mb-3">
                                        <span class="d-block text-black small text-uppercase font-weight-bold">Téléphone :</span>
                                        <span>+228 92 42 15 95 / 90 44 93 92</span>
                                    </li>
                                    <li class="d-block mb-3">
                                        <span class="d-block text-black small text-uppercase font-weight-bold">Email :</span>
                                        <span>contact@fa-iuk.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <h2>Formulaire de contact</h2>
                        <!-- Contact Form 7 -->
                        <?= do_shortcode('[contact-form-7 id="01ec979" title="Formulaire de contact"]') ?>
                    </div>
                </div>
            </div>
            <?php get_template_part('parts/page', 'sidebar'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>