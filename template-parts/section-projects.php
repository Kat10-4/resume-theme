<section id="projects" class="projects">
  <h3>Projects</h3>
  <?php
  $projects = new WP_Query([
    'post_type' => 'project',
    'posts_per_page' => -1,  // show all
  ]);
  if ($projects->have_posts()) :
    echo '<div class="projects-list">';
    while ($projects->have_posts()) : $projects->the_post();
      $image = get_field('project_image');
      $link = get_field('project_url');?>
      <article class="project-item">
        <h4> <?= get_field('project_title') ?> </h4>
        <?php if ($image && $link): ?>
          <a href="<?= esc_url($link); ?>" target="_blank" aria-label="<?= esc_attr(get_the_title()); ?>">
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr(get_the_title()); ?>" class="project-image" />
          </a>
        <?php endif; ?>
      </article>
  <?php endwhile;
    echo '</div>';
    wp_reset_postdata();
  else :
    echo '<p>No projects found.</p>';
  endif;
  ?>
</section>