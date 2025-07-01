<section id="about" class="about">
    <h3>About</h3>
    <p><?php the_field('about_text'); ?></p>
    <?php 
    $cv = get_field('cv_file'); 
    if ($cv): ?>
     <a href="<?php echo esc_url($cv); ?>" class="btn-download-cv" download>Download CV</a>
    <?php endif; ?>
</section>