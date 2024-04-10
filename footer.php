<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Perfect Electrician
 */
?>
<div id="footer">
  <?php 
    $perfect_electrician_footer_widget_enabled = get_theme_mod('perfect_electrician_footer_widget', false);
    
    if ($perfect_electrician_footer_widget_enabled !== false && $perfect_electrician_footer_widget_enabled !== '') { ?>
      <div class="footer-widget py-3">
        <div class="container">
          <div class="ftr-4-box">
            <div class="row container-wedget">
              <?php dynamic_sidebar('footer-nav'); ?>
            </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="copywrap text-center">
      <div class="footer-bottom">
        <a href="<?php echo esc_html(get_theme_mod('perfect_electrician_copyright_link',__('https://www.theclassictemplates.com/wp-themes/free-electrician-wordpress-theme//','perfect-electrician'))); ?>" target="_blank"><?php echo esc_html(get_theme_mod('perfect_electrician_copyright_line',__('Perfect Electrician WordPress Theme','perfect-electrician'))); ?></a>
      </div>
  </div>
</div>

<?php if(get_theme_mod('perfect_electrician_scroll_hide',false)){ ?>
   <a id="button"><?php esc_html_e('TOP', 'perfect-electrician'); ?></a>
  <?php } ?>

<?php wp_footer(); ?>
</body>
</html>
