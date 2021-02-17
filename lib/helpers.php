<?php

function firsttheme_post_meta(): void
{
    echo 'Posted on '
        . '<a href="'. esc_url(get_permalink()) .'">'
        . '<time datetime="'. esc_attr(get_the_date('c')) .'">'. esc_html(get_the_date('l, F j, Y')) .'</time>'
        . '</a>'
        . ' By <a href="'. esc_url(get_author_posts_url(get_the_author_meta('ID'))) .'">' . esc_html(get_the_author())
        . '</a>';
}

function firsttheme_read_more_link(): void
{
    $title_attribute = the_title_attribute(['echo' => false]);
    $title = the_title('', '', false);
    echo '<a href="'. esc_url(get_permalink()) .'" title="'. $title_attribute .'">'
        . 'Read More <span class="u-screen-reader-text">About '. $title .'</span>'
        . '</a>';
}