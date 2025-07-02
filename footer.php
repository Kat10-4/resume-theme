<footer>
  <p>&copy; <?php echo date('Y'); ?> Kateryna's Portfolio</p>
  <div class="media-links">
    <?php $mediaLinks = new WP_Query([
      'post_type' => 'm_link',
      'posts_per_page' => -1,
      'orderby' => 'menu_order',
    ]);

    if ($mediaLinks->have_posts()) :
      while ($mediaLinks->have_posts()) :
        $mediaLinks->the_post();
        $icon = get_field('media_icon');
        $link = get_field('media_url'); ?>
        <a href="<?= esc_url($link); ?>" target="_blank" aria-label="<?= esc_attr(get_the_title()); ?>">
          <img src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr(get_the_title()); ?>" class="media-icon" />
        </a>
    <?php endwhile;
      wp_reset_postdata();
    else:
      echo '<p>No media links found.</p>';
    endif; ?>
  </div>
  <?php wp_footer(); ?>
</footer>