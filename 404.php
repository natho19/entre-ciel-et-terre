<?php get_header(); ?>

<!-- Error 404 -->
<section id="content_main" class="clearfix">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-12 page_error_404">
                <h1 class="big">404</h1>
                <p class="description">OOOOOPS! Il semblerait que cette page n'existe pas</p>
                <a class="link_home404" href="<?= home_url(); ?>">Revenir à l'accueil</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>