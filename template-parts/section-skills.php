<section id="skills" class="skills">
  <h3>Skills</h3>
  <ul class="skills-list">
    <?php
    $skills = new WP_Query([
      'post_type' => 'skill',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
    ]);

    if ($skills->have_posts()):
      while ($skills->have_posts()): $skills->the_post();
        $icon = get_field('icon'); ?>
        <li class="skill-item">
          <?php if ($icon): ?>
            <img src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr(get_the_title()); ?>" class="skill-icon" />
            <span><?= get_field('title'); ?></span>
          <?php endif; ?>
        </li>
    <?php endwhile;
      wp_reset_postdata();
    else:
      echo '<li>No skills found.</li>';
    endif;
    ?>
  </ul>
</section>