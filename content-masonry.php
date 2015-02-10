<?php
/**
 * The template to display articles in a masonry layout.
 *
 * @package kouki
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('js-item hentry-masonry'); ?>>
  
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="m-0-0-1 aligncenter">
      <a href="<?php the_permalink(); ?>">
      	<?php the_post_thumbnail( $post->ID, 'kouki_thumb_medium' ); ?>        
      </a>
      <?php echo wpautop( kouki_post_thumbnail_caption() ); ?>
    </div>
  <?php endif; ?>

	<header class="aligncenter">
    <?php if (is_sticky()) { ?>
    <span class="sticky-tag">
      <?php echo _e('Sticky', 'kouki'); ?>
    </span>
    <?php } ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'content', 'post-meta' ); ?>
	</header>

  <?php if ( of_get_option('kouki_show_excerpt') ) :
	  the_excerpt();
  else :
    the_content();     
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'kealani' ),
      'after'  => '</div>',
    ) );
  endif; ?>

</article>