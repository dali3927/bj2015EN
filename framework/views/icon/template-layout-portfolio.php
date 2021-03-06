<?php

// =============================================================================
// VIEWS/ICON/TEMPLATE-LAYOUT-PORTFOLIO.PHP
// -----------------------------------------------------------------------------
// Portfolio page output for Icon.
// =============================================================================

?>

<?php get_header(); ?>

  <div class="x-main" role="main">
    <div class="x-container-fluid offset-bottom">
      
      <?php x_portfolio_filters(); ?>
      <?php x_get_view( 'global', '_portfolio' ); ?>

    </div> <!-- end .x-container-fluid.offset -->
  </div> <!-- end .x-main -->

  <?php get_sidebar(); ?>
<?php get_footer(); ?>