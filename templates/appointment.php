<?php /* Template Name: Page rendez-vous */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/page', 'breadcrumb'); ?>

<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8 loop-large-post" id="content">
                <div class="widget_container content_page">
                    <div class="post-2963 post type-post status-publish format-standard has-post-thumbnail hentry category-science tag-gaming" id="post-2963">
                        <?php if (have_rows('forms')) : ?>
                            <div class="row">
                                <?php while (have_rows('forms')) : the_row(); ?>
                                    <div class="col-md-6 mb-4">
                                        <div class="card card-form">
                                            <img src="<?= esc_url(get_sub_field('form_image')); ?>" class="card-img-top" alt="<?php the_sub_field('form_title'); ?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php the_sub_field('form_title'); ?></h5>
                                                <?php if (get_sub_field('form_description')) : ?>
                                                    <p class="card-text"><?php the_sub_field('form_description'); ?></p>
                                                <?php endif; ?>
                                                <?php
                                                $link = get_sub_field('form_link');
                                                if ($link) :
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'] ? $link['title'] : 'Remplir le formulaire';
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="btn btn-primary"><?= esc_html($link_title); ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php get_template_part('parts/page', 'sidebar'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
