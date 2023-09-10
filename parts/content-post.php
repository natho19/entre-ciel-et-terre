<div class="jl_grid_w">
    <div class="jl_img_box jl_radus_e">
        <a href="<?php the_permalink(); ?>">
            <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : ECT_IMG_URL . '900x600.png'; ?>" class="attachment-sprasa_slider_grid_small size-sprasa_slider_grid_small wp-post-image" alt="<?= esc_attr(get_the_title()); ?>" loading="lazy">
            <?php if (get_field('video_link')) : ?>
                <span class="jl_post_type_icon"><i class="jli-youtube"></i></span>
            <?php endif; ?>
        </a>
    </div>
    <div class="text-box">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <span class="jl_post_meta">
            <span class="post-date"><i class="jli-pen"></i><?= get_the_date('d/m/Y'); ?></span>
            <span class="post-read-time"><i class="jli-watch-2"></i>2 Mins</span>
        </span>
        <?php the_excerpt(); ?>
    </div>
</div>