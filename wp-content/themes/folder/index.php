<?php  get_header(); ?>
<h1>Blog</h1>

<?php
if (have_posts()) : while (have_posts()) : the_post();
?><h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
        <?php
    endwhile;
else:
    ?>
    <p>No content found.</p>
<?php
endif;
get_footer();