<section id="projects" class="projects">
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