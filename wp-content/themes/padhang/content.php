<?php
/**
 * @package Padhang
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
                <?php //Article title is displayed above the featured image, and underneath the site logo ?>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<?php the_post_thumbnail('full'); ?>
			</div>
                        <?php echo '<span class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>'; ?>
		<?php endif; ?>

		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'padhang' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'padhang' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php padhang_posted_on(); ?>
		</div><!-- .entry-meta -->
	<?php endif; ?>

</article><!-- #post-## -->
