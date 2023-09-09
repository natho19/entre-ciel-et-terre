<?php //$query = get_queried_object(); var_dump($query); ?>

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
                        <nav class="jellywp_pagination">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><span class="page-numbers dots">…</span></li>
                                <li><a class="page-numbers" href="#">7</a></li>
                                <li><a class="next page-numbers" href="#"><i class="jli-right-chevron"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_template_part('parts/page', 'sidebar'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>