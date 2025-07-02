<section id="about" class="about">
  <h3>About</h3>
  <div class='about-wrapper'>
    <?php $my_photo = get_field('my_photo'); ?>
    <?php if ($my_photo): ?>
      <div class='profile-img-wrapper'>
        <img src="<?= esc_url($my_photo['url']); ?>" alt="<?= esc_attr($my_photo['alt']); ?>" class="my-img" />
      </div>
    <?php endif; ?>
    <div>
      <p><?php the_field('about_text'); ?></p>
      <?php
      $cv = get_field('cv_file');
      if ($cv): ?>
        <a href="<?= esc_url($cv); ?>" class="btn-download-cv" download>Download CV</a>
      <?php else:
        echo '<li>No CV found.</li>';
      endif ?>
    </div>
</section>
</div>