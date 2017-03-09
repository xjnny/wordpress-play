<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>
<h1>Index Page</h1>


<div>
    <a href="<?php echo get_permalink(get_theme_mod('callout-section-link'));?>"><h3><?php echo get_theme_mod('callout-section-headline'); ?></h3></a>
    <?php echo wpautop(get_theme_mod('callout-section-text'));?>
    <div>
        <img>
    </div>
</div>


<?php
get_footer();
