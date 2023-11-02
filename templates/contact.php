<?php /* Template Name: Page contact */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/page', 'breadcrumb'); ?>

<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8 loop-large-post" id="content">
                <div class="widget_container content_page">
                    <!-- Contact Informations -->
                    <?php if (have_rows('contacts')) : ?>
                        <div class="contact-informations">
                            <div class="row contact-card">
                                <?php while (have_rows('contacts')) : the_row(); ?>
                                    <div class="col-md-6 mb-4">
                                        <?php if (get_sub_field('country')) : ?>
                                            <h2><?php the_sub_field('country'); ?></h2>
                                        <?php endif; ?>
                                        <ul class="list-unstyled">
                                            <?php if (get_sub_field('address')) : ?>
                                                <li class="d-block mb-3">
                                                    <span class="d-block text-black small text-uppercase font-weight-bold"><?= pll_e('Adresse :'); ?></span>
                                                    <span><?php the_sub_field('address'); ?></span>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('phone')) : ?>
                                                <li class="d-block mb-3">
                                                    <span class="d-block text-black small text-uppercase font-weight-bold"><?= pll_e('Téléphone :'); ?></span>
                                                    <span><?php the_sub_field('phone'); ?></span>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('email')) : ?>
                                                <li class="d-block mb-3">
                                                    <span class="d-block text-black small text-uppercase font-weight-bold"><?= pll_e('Email :'); ?></span>
                                                    <span><?php the_sub_field('email'); ?></span>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <h2><?= pll_e('Formulaire de contact'); ?></h2>
                        <?php if (pll_current_language() == 'fr') : ?>
                            <?= do_shortcode('[contact-form-7 id="01ec979" title="Formulaire de contact"]') ?>
                        <?php else : ?>
                            <?= do_shortcode('[contact-form-7 id="5f1d982" title="Contact form"]') ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php get_template_part('parts/page', 'sidebar'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>