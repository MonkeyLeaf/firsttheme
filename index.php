<?php get_header(); ?>

<?php if (have_posts()) { ?>
    <?php while (have_posts()) { ?>
        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
             </a>
        </h2>
        <div>
            <?php _themename_post_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <?php _themename_read_more_link(); ?>
    <?php } ?>
    <?php the_posts_pagination(); ?>
<?php } else { ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.', '_themename'); ?></p>
<?php } ?>

<?php

$city = 'london';
echo esc_html__('Your city is ', '_themename') . $city;
echo '<br>';
printf(esc_html__('Your city is %s', '_themename'), $city);

// TODO: comments
//$comments = 1;
//printf(_n('One comment', '%s comments', $comments, '_themename'), $comments);

?>

<?php get_footer(); ?>