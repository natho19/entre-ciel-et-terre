<div class="jl_single_style3">
    <div class="single_content_header single_captions_overlay_image_full_width">
        <div class="image-post-thumb" style="background-image: url('<?= has_post_thumbnail($post->ID) ? esc_url(get_the_post_thumbnail_url($post->ID, 'full')) : ECT_IMG_URL . '1920x800.png' ?>')"></div>
        <div class="single_post_entry_content"> 
            <h1 class="single_post_title_main"><?php the_title(); ?></h1>
        </div>
    </div>
</div>