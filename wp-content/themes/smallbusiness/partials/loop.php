<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('large'); ?>
    </a>
<?php endif; ?>
<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
        <?php
    endwhile;
else:
    ?>
    <p>No content found.</p>
<?php
endif;