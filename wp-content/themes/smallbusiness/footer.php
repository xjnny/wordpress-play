<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/main.js" type="text/javascript"></script>
<?php wp_footer(); ?>
<div class="footer-nav"> 

<nav>
    <?php
    $args = array(
        'theme_location' => 'footer'
    );
    ?>

    <?php wp_nav_menu($args); ?>
</nav>
</div>
</body>
</html>

