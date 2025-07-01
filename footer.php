<footer>
  <p>&copy; <?php echo date('Y'); ?> Kateryna's Portfolio</p>
  <div class="social-links">
    <a href="" target="_blank" aria-label="GitHub">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/github.svg" alt="GitHub" />
    </a>
    <a href="https://linkedin.com/in/yourusername" target="_blank" aria-label="LinkedIn">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/linkedin.svg" alt="LinkedIn" />
    </a>
    <a href="mailto:your@email.com" aria-label="Email">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/email.svg" alt="Email" />
    </a>
  </div>
  <?php wp_footer(); ?>
</footer>