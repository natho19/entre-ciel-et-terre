<?php get_header(); ?>

<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8  loop-large-post" id="content">
                <div class="widget_container content_page">
                    <!-- start post -->
                    <div class="post-2838 post type-post status-publish format-standard has-post-thumbnail hentry category-sports tag-gaming" id="post-2838">
                        <div class="single_section_content box blog_large_post_style">
                            <div class="jl_single_style2">
                                <div class="single_post_entry_content single_bellow_left_align jl_top_single_title jl_top_title_feature">
                                    <h1 class="single_post_title_main"><?php the_title(); ?></h1>
                                    <span class="jl_post_meta">
                                        <span class="post-date"><i class="jli-pen"></i><?= get_the_date('d/m/Y'); ?></span>
                                        <?php if (get_field('read_time')) : ?>
                                            <span class="post-read-time"><i class="jli-watch-2"></i><?php the_field('read_time'); ?> Mins</span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                                <div class="single_content_header jl_single_feature_below">
                                    <div class="image-post-thumb jlsingle-title-above">
                                        <?php if (get_field('video_link')) : ?>
                                            <iframe width="560" height="315" src="<?= esc_attr(get_field('video_link')); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <?php else : ?>
                                            <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_feature_large size-sprasa_feature_large wp-post-image" alt="" loading="lazy">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php $content = get_post()->post_content; if (!empty($content)) : ?>
                                <div class="post_content_w">
                                    <!-- Partage sur les réseaux sociaux -->
                                    <div class="post_sw">
                                        <div class="post_s">
                                            <div class="jl_single_share_wrapper jl_clear_at">
                                                <ul class="single_post_share_icon_post">
                                                    <li class="single_post_share_facebook">
                                                        <a href="#" target="_blank"><i class="jli-facebook"></i></a>
                                                    </li>
                                                    <li class="single_post_share_twitter">
                                                        <a href="#" target="_blank"><i class="jli-twitter"></i></a>
                                                    </li>
                                                    <li class="single_post_share_linkedin">
                                                        <a href="#" target="_blank"><i class="jli-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contenu -->
                                    <div class="post_content jl_content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>  
                            <?php endif; ?>
                            <div class="clearfix"></div>
                            <div class="related-posts">
                                <h4>Articles similaires</h4>
                                <div class="single_related_post">												
                                    <div class="jl_m_right jl_m_list jl_m_img">
                                        <div class="jl_m_right_w">
                                            <div class="jl_m_right_img jl_radus_e">
                                                <a href="http://localhost/entrecieletterre/lorem-ipsum-dolor/">
                                                    <img src="<?= ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image" alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="jl_m_right_content">
                                                <h2 class="entry-title"> <a href="#" tabindex="-1">How to make your life routine more fun and eco-friendly</a></h2>
                                                <span class="jl_post_meta">
                                                    <span class="post-date"><i class="jli-pen"></i>July 10, 2019</span>
                                                    <?php if (get_field('read_time')) : ?>
                                                        <span class="post-read-time"><i class="jli-watch-2"></i><?php the_field('read_time'); ?> Mins</span>
                                                    <?php endif; ?>
                                                </span>
                                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem Donec vehicula luctus nunc...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- #respond -->
                        </div>
                    </div>
                    <!-- end post -->
                </div>
            </div>
            <?php get_template_part('parts/page', 'sidebar'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>