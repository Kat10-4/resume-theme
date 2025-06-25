<?php get_header(); ?>

<main>
  <section class="hero">
    <h1><?php the_field('hero_title'); ?></h1>
    <h2><?php the_field('hero_subtitle'); ?></h2>
  </section>
  <section class="about">
    <h3>About</h3>
    <p><?php the_field('about_text'); ?></p>
    <?php 
    $cv = get_field('cv_file'); 
    if ($cv): ?>
     <a href="<?php echo esc_url($cv); ?>" class="btn-download-cv" download>Download CV</a>
    <?php endif; ?>
  </section>
  <section class="skills">
    <h3>Skills</h3>
    <ul>
      <li><?php the_field('skill_1'); ?></li>
      <li><?php the_field('skill_2'); ?></li>
      <li><?php the_field('skill_3'); ?></li>
      <li><?php the_field('skill_4'); ?></li>
    </ul>
  </section>
  <section class="portfolio">
    <h3>Projects</h3>
    <?php
    $projects = new WP_Query([
      'post_type' => 'project',
      'posts_per_page' => -1,  // show all
    ]);

    if ($projects->have_posts()) :
      echo '<div class="projects-list">';
      while ($projects->have_posts()) : $projects->the_post(); ?>
        <article class="project-item">
          <h2> <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php endif; ?></h2>
          <div><?php the_content(); ?></div>
        </article>
      <?php endwhile;
      echo '</div>';
      wp_reset_postdata();
    else :
      echo '<p>No projects found.</p>';
    endif;
    ?>
  </section>
  <section class="contact">
    <h3>Contact</h3>
    <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]'); ?>
  </section>
</main>

<?php get_footer(); ?>
