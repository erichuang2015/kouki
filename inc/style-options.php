<?php
/**
 * Apply style options from the options framework
 *
 * @package kouki
 * @subpackage Options Framework
 */

function kouki_theme_styles() { ?>

  <style type="text/css" media="screen">   

    /**
     * Text Colors
     */
    <?php $text_color = of_get_option('kouki_text_color'); ?>
    <?php if ($text_color) : ?>
      body {
        color: <?php echo $text_color; ?>;
      }
    <?php endif; ?>

    <?php $headline_color = of_get_option('kouki_headline_color'); ?>
    <?php if ($headline_color) : ?>
      h1, h2, h3, h4, h5, h6, .widgetitle
      h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
        color: <?php echo $headline_color; ?>;
      }
    <?php endif; ?>

    <?php $link_color = of_get_option('kouki_link_color'); ?>
    <?php if ($link_color) : ?>
      a {
        color: <?php echo $link_color; ?>;
      }
    <?php endif; ?>

    <?php $btn_neutral = of_get_option('kouki_text_color'); ?>
    <?php if ($btn_neutral) : ?>
      a.btn-neutral,
      .pagination a,
      #infinite-handle span {
        color: <?php echo $btn_neutral; ?>;
        border: 1px solid <?php echo $btn_neutral; ?>;
      }
    <?php endif; ?>

    <?php $btn_positive = of_get_option('kouki_btn_positive'); ?>
    <?php if ($btn_positive) : ?>
      a.btn-positive,
      input[type=submit] {
        color: <?php echo $btn_positive; ?>;
        border: 1px solid <?php echo $btn_positive; ?>;
      }
    <?php endif; ?>

    <?php $btn_negative = of_get_option('kouki_btn_negative'); ?>
    <?php if ($btn_negative) : ?>
      a.btn-negative {
        color: <?php echo $btn_negative; ?>;
        border: 1px solid <?php echo $btn_negative; ?>;
      }
    <?php endif; ?>

    <?php $btn_extra = of_get_option('kouki_btn_extra'); ?>
    <?php if ($btn_extra) : ?>
      a.btn-extra {
        color: <?php echo $btn_extra; ?>;
        border: 1px solid <?php echo $btn_extra; ?>;
      }
    <?php endif; ?>

    <?php $meta_color = of_get_option('kouki_meta_color'); ?>
    <?php if ($meta_color) : ?>
      .meta, .wp-caption-text, .sticky-tag {
        color: <?php echo $meta_color; ?>;
      }
    <?php endif; ?> 

    /**
     * Fonts
     */
    <?php $primary_font = of_get_option('kouki_primary_font'); ?>
    <?php if ($primary_font) : ?>
      body, h2.meta  {
        font-family: '<?php echo $primary_font; ?>';
      }
    <?php endif; ?>

    <?php $secondary_font = of_get_option('kouki_secondary_font'); ?>
    <?php if ($secondary_font) : ?>
      h1, h2, h3, h4, h5, h6, blockquote, .widgetitle {
        font-family: '<?php echo $secondary_font; ?>';
      }
    <?php endif; ?>

  </style>

<?php }
add_action( 'wp_head', 'kouki_theme_styles' );