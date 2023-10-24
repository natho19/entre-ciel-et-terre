<?php /* Template Name: Page rendez-vous */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/page', 'breadcrumb'); ?>

<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8 loop-large-post" id="content">
                <div class="widget_container content_page">
                    <div class="post-2963 post type-post status-publish format-standard has-post-thumbnail hentry category-science tag-gaming" id="post-2963">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card card-form">
                                    <img src="<?= ECT_IMG_URL . '900x600.png' ?>" class="card-img-top" alt="Card image">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Remplir le formulaire</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card card-form">
                                    <img src="<?= ECT_IMG_URL . '900x600.png' ?>" class="card-img-top" alt="Card image">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Remplir le formulaire</a>
                                    </div>
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
