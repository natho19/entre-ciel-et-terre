<?php /* Template Name: Page avec bannière */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/page', 'breadcrumb'); ?>

<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8 loop-large-post" id="content">
                <div class="widget_container content_page">
                    <div class="post-2963 post type-post status-publish format-standard has-post-thumbnail hentry category-science tag-gaming" id="post-2963">
                        <div class="single_section_content box blog_large_post_style">
                            <div class="post_content_w">
                                <div class="jl_content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('parts/page', 'sidebar'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>