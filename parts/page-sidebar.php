<div class="col-md-4" id="sidebar">
    <div class="jl_sidebar_w">
        <!-- Advertisement -->
        <div id="sprasa_ads300x250_widget-2" class="widget jellywp_ads300x250_widget">
            <div class="widget_jl_wrapper ads_widget_container">
                <div class="widget-title">
                    <h2 class="jl_title_c"><?= pll_e('Publicité'); ?></h2>
                </div>
                <!-- Widget advertisement -->
                <?php if (is_active_sidebar('advertisement')) : ?>
                    <?php dynamic_sidebar('advertisement'); ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Last posts -->
        <?php
        $last_posts = ect_get_objects('post', 3);
        if ($last_posts->have_posts()) : ?>
            <div id="sprasa_recent_post_text_widget-9" class="widget post_list_widget">
                <div class="widget_jl_wrapper">
                    <div class="ettitle">
                        <div class="widget-title">
                            <h2 class="jl_title_c"><?= pll_e('Derniers articles'); ?></h2>
                        </div>
                    </div>
                    
                    <div class="bt_post_widget">
                        <?php while ($last_posts->have_posts()) : $last_posts->the_post(); ?>
                            <div class="jl_m_right jl_sm_list jl_ml jl_clear_at">
                                <div class="jl_m_right_w">
                                    <div class="jl_m_right_img jl_radus_e">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') : ECT_IMG_URL . '200x200.png'; ?>" class="attachment-sprasa_small_feature size-sprasa_small_feature wp-post-image" alt="<?= esc_attr(get_the_title()); ?>" loading="lazy">
                                            <?php if (get_field('video_link')) : ?>
                                                <span class="jl_post_type_icon"><i class="jli-youtube"></i></span>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="jl_m_right_content">
                                        <h2 class="entry-title"> <a href="<?php the_permalink(); ?>" tabindex="-1"><?php the_title(); ?></a></h2>
                                        <span class="jl_post_meta">
                                            <span class="post-date"><i class="jli-pen"></i><?= get_the_date('d/m/Y'); ?></span>
                                            <?php if (get_field('read_time')) : ?>
                                                <span class="post-read-time"><i class="jli-watch-2"></i><?php the_field('read_time'); ?> Mins</span>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</div>