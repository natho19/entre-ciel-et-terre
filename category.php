<?php $query = get_queried_object(); ?>

<?php get_header(); ?>

<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8 grid-sidebar" id="content">
                <div class="jl_cat_mid_title">
                    <h3 class="categories-title title"><?= $query->name ?></h3>
                </div>
                <?php if (have_posts()) : ?>
                    <div class="jl_wrapper_cat">
                        <div id="content_masonry" class="jl_cgrid pagination_infinite_style_cat load_more_main_wrapper">
                            <!-- Tous les articles du Blog -->
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="box jl_grid_layout1 blog_grid_post_style post-2947 post type-post status-publish format-standard has-post-thumbnail hentry category-active tag-gaming tag-morning">
                                    <?php get_template_part('parts/content', 'post'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <!-- Pagination -->
                        <?php if (function_exists('ect_pagination')) : ?>
                            <?php ect_pagination(); ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_template_part('parts/page', 'sidebar'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>