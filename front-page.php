<?php get_header(); ?>

<?php var_dump($post); ?>

<div class="jl_home_bw">
    <?php if (have_rows('slides')) : ?>
        <section class="home_section5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="blockid_5ee403b" class="block-section jl-main-block">
                            <div class="jl_slide_wrap_f jl_clear_at">
                                <div class="jl-roww content-inner jl-col-none jl-col-row">
                                    <div class="jl_ar_top">
                                        <div class="jl-w-slider jl_full_feature_w">
                                            <div class="jl-eb-slider jelly_loading_pro" data-arrows="true" data-play="true" data-effect="false" data-speed="500" data-autospeed="7000" data-loop="true" data-dots="true" data-swipe="true" data-items="1" data-xs-items="1" data-sm-items="1" data-md-items="1" data-lg-items="1" data-xl-items="1">
                                                <?php while (have_rows('slides')) : the_row(); ?>
                                                    <div class="item-slide jl_radus_e">
                                                        <div class="slide-inner">
                                                            <div class="jl_full_feature">
                                                                <div class="jl_f_img_bg" style="background-image: url('<?= esc_url(get_sub_field('image')); ?>')"></div>
                                                                <a href="<?= esc_url(get_sub_field('link')); ?>" class="jl_f_img_link"></a>
                                                                <div class="jl_f_postbox">
                                                                    <h3 class="jl_f_title">
                                                                        <a href="<?= esc_url(get_sub_field('link')); ?>" tabindex="-1">
                                                                            <?php the_sub_field('description'); ?>
                                                                        </a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="home_section3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jl_sec_title">
                        <h3 class="jl_title_c"><?php the_field('news_title'); ?></h3>
                    </div>
                    <div class="jl_mg_wrapper jl_clear_at">
                        <div class="jl_mg_post jl_clear_at">
                            <!-- Featured post -->
                            <?php
                            $post = get_field('featured_post');
                            if ($post) : ?>
                                <div class="jl_mg_main">
                                    <div class="jl_mg_main_w">
                                        <div class="jl_img_box jl_radus_e">
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_feature_large size-sprasa_feature_large wp-post-image" alt="<?php the_title(); ?>" loading="lazy">
                                            </a>
                                        </div>
                                        <div class="text-box">
                                            <h3 class="entry-title">
                                                <a href="<?php the_permalink(); ?>" tabindex="-1"><?php the_title(); ?></a>
                                            </h3>
                                            <span class="jl_post_meta">
                                                <span class="post-date"><i class="jli-pen"></i><?= get_the_date('d/m/Y'); ?></span>
                                                <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                            </span>
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php wp_reset_postdata(); endif; ?>

                            <?php if (have_rows('other_posts')) : ?>
                                <?php while (have_rows('other_posts')) : the_row(); ?>
                                    <!-- Other posts -->
                                    <?php $post = get_sub_field('post');
                                    if ($post) : ?>
                                        <div class="jl_mg_sm">
                                            <div class="jl_mg_sm_w">
                                                <div class="jl_f_img jl_radus_e">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_feature_large size-sprasa_feature_large wp-post-image" alt="" loading="lazy">
                                                    </a>
                                                </div>
                                                <div class="jl_mg_content">
                                                    <h3 class="entry-title">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h3>
                                                    <span class="jl_post_meta">
                                                        <span class="post-date"><i class="jli-pen"></i><?= get_the_date('d/m/Y'); ?></span>
                                                        <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php wp_reset_postdata(); endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home_section1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jl_sec_title">
                        <h3 class="jl_title_c">Nos vidéos</h3>
                    </div>
                    <div class="jl_mright_wrapper jl_clear_at">
                        <div class="jl_mix_post">
                            <div class="jl_m_center blog-style-one blog-small-grid">
                                <div class="jl_m_center_w jl_radus_e">
                                    <div class="jl_f_img_bg" style="background-image: url('<?= ECT_IMG_URL . '900x600.png'; ?>');"></div>
                                    <a href="#" class="jl_f_img_link"></a>
                                    <span class="jl_post_type_icon"><i class="jli-youtube"></i></span>
                                    <div class="text-box">
                                        <h3><a href="#">Dernière vidéo mise en ligne</a></h3>
                                        <span class="jl_post_meta">
                                            <span class="post-date"><i class="jli-pen"></i>July 24, 2019</span>
                                            <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="jl_m_right">
                                <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e">
                                        <a href="#">
                                            <img src="<?= ECT_IMG_URL . '200x200.png'; ?>" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy">
                                            <span class="jl_post_type_icon"><i class="jli-youtube"></i></span>
                                        </a>
                                    </div>
                                    <div class="jl_m_right_content">
                                        <h3 class="entry-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing</a></h3>
                                        <span class="jl_post_meta">
                                            <span class="post-date"><i class="jli-pen"></i>July 24, 2019</span>
                                            <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="jl_m_right">
                                <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e">
                                        <a href="#">
                                            <img src="<?= ECT_IMG_URL . '200x200.png'; ?>" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy">
                                            <span class="jl_post_type_icon"><i class="jli-youtube"></i></span>
                                        </a>
                                    </div>
                                    <div class="jl_m_right_content">
                                        <h3 class="entry-title"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing</a></h3>
                                        <span class="jl_post_meta">
                                            <span class="post-date"><i class="jli-pen"></i>July 24, 2019</span>
                                            <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="jl_m_right">
                                <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e">
                                        <a href="#">
                                            <img src="<?= ECT_IMG_URL . '200x200.png'; ?>" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy">
                                            <span class="jl_post_type_icon"><i class="jli-youtube"></i></span>
                                        </a>
                                    </div>
                                    <div class="jl_m_right_content">
                                        <h3 class="entry-title"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing</a></h3>
                                        <span class="jl_post_meta">
                                            <span class="post-date"><i class="jli-pen"></i>July 24, 2019</span>
                                            <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="jl_m_right">
                                <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e">
                                        <a href="#">
                                            <img src="<?= ECT_IMG_URL . '200x200.png'; ?>" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="" loading="lazy">
                                            <span class="jl_post_type_icon"><i class="jli-youtube"></i></span>
                                        </a>
                                    </div>
                                    <div class="jl_m_right_content">
                                        <h3 class="entry-title"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing</a></h3>
                                        <span class="jl_post_meta">
                                            <span class="post-date"><i class="jli-pen"></i>July 24, 2019</span>
                                            <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-area link-area-videos">
                        <a href="http://localhost/entrecieletterre/videos/">Toutes les vidéos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home_section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="blockid_72be465" class="block-section jl-main-block" data-blockid="blockid_72be465" data-name="jl_mgrid" data-page_max="11" data-page_current="1" data-author="none" data-order="date_post" data-posts_per_page="6" data-offset="5">
                        <div class="jl_grid_wrap_f jl_clear_at g_3col">
                            <div class="jl-roww content-inner jl-col3 jl-col-row">
                                <div class="jl_sec_title">
                                    <h3 class="jl_title_c"><span>Nos articles</span></h3>
                                </div>
                                <div class="jl-grid-cols">
                                    <div class="p-wraper post-2959">
                                        <div class="jl_grid_w">
                                            <div class="jl_img_box jl_radus_e">
                                                <a href="#">
                                                    <img src="<?= ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image" alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                <span class="jl_post_meta">
                                                    <span class="post-date"><i class="jli-pen"></i>11 Jul 2023</span>
                                                    <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                                </span>
                                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jl-grid-cols">
                                    <div class="p-wraper post-2959">
                                        <div class="jl_grid_w">
                                            <div class="jl_img_box jl_radus_e">
                                                <a href="#">
                                                    <img src="<?= ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image" alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                <span class="jl_post_meta">
                                                    <span class="post-date"><i class="jli-pen"></i>11 Jul 2023</span>
                                                    <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                                </span>
                                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jl-grid-cols">
                                    <div class="p-wraper post-2959">
                                        <div class="jl_grid_w">
                                            <div class="jl_img_box jl_radus_e">
                                                <a href="#">
                                                    <img src="<?= ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image" alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                <span class="jl_post_meta">
                                                    <span class="post-date"><i class="jli-pen"></i>11 Jul 2023</span>
                                                    <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                                </span>
                                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jl-grid-cols">
                                    <div class="p-wraper post-2959">
                                        <div class="jl_grid_w">
                                            <div class="jl_img_box jl_radus_e">
                                                <a href="#">
                                                    <img src="<?= ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image" alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                <span class="jl_post_meta">
                                                    <span class="post-date"><i class="jli-pen"></i>11 Jul 2023</span>
                                                    <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                                </span>
                                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jl-grid-cols">
                                    <div class="p-wraper post-2959">
                                        <div class="jl_grid_w">
                                            <div class="jl_img_box jl_radus_e">
                                                <a href="#">
                                                    <img src="<?= ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image" alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                <span class="jl_post_meta">
                                                    <span class="post-date"><i class="jli-pen"></i>11 Jul 2023</span>
                                                    <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                                </span>
                                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jl-grid-cols">
                                    <div class="p-wraper post-2959">
                                        <div class="jl_grid_w">
                                            <div class="jl_img_box jl_radus_e">
                                                <a href="#">
                                                    <img src="<?= ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image" alt="" loading="lazy">
                                                </a>
                                            </div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                                <span class="jl_post_meta">
                                                    <span class="post-date"><i class="jli-pen"></i>11 Jul 2023</span>
                                                    <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
                                                </span>
                                                <p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="link-area link-area-posts">
                                    <a href="http://localhost/entrecieletterre/blog/">Tous les articles</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>