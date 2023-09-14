<?php

function ect_social_sharing($content)
{
    global $post;

    if (is_single()) {
        // Get site name
        $site_title = get_bloginfo('name');

        // Get current page URL 
        $URL = urlencode(get_permalink());

        // Get current page title
        $title = htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');

        // Construct sharing URL without using any script
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $URL;
        $twitterURL = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $URL . '&amp;via=' . $site_title;
        $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $URL . '&amp;title=' . $title;

        // Add sharing button at the end of post/page content
        $content .= '</div>';
        $content .= '<div class="post_sw">';
        $content .= '<div class="post_s">';
        $content .= '<div class="jl_single_share_wrapper jl_clear_at">';
        $content .= '<ul class="single_post_share_icon_post">';

        // Facebook
        $content .= '<li class="single_post_share_facebook">';
        $content .= '<a href="' . $facebookURL . '" target="_blank"><i class="jli-facebook"></i></a>';
        $content .= '</li>';

        // Twitter
        $content .= '<li class="single_post_share_twitter">';
        $content .= '<a href="' . $twitterURL . '" target="_blank"><i class="jli-twitter"></i></a>';
        $content .= '</li>';

        // LinkedIn
        $content .= '<li class="single_post_share_linkedin">';
        $content .= '<a href="' . $linkedInURL . '" target="_blank"><i class="jli-linkedin"></i></a>';
        $content .= '</li>';

        $content .= '</ul>';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';

        return $content;
    } else {
        // if not a post/page then don't include sharing button
        return $content;
    }
};

add_filter('the_content', 'ect_social_sharing');
