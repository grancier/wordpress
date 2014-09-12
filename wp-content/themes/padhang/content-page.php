<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Padhang
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
       
        <?php if ( has_post_thumbnail() ) : ?>
                <div class="featured-image">
                    <?php the_post_thumbnail('full'); ?>
                </div>
                <?php echo '<span class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>'; ?>
        <?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'padhang' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'padhang' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
