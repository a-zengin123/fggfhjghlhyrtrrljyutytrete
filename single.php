<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<?php
		    $sayara_automotive_layout_settings = get_theme_mod( 'sayara_automotive_layout_settings', __('Right Sidebar','sayara-automotive') );
			if($sayara_automotive_layout_settings == 'Left Sidebar'){ ?>
			    <div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php if (get_theme_mod('sayara_automotive_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php sayara_automotive_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();

							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'sayara_automotive_show_single_post_pagination',true) != '') {

										the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('sayara_automotive_next_text',__( 'Next Post', 'sayara-automotive' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
								'<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span> ' .
								'',
							'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('sayara_automotive_prev_text',__( 'Previous Post', 'sayara-automotive' ))) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span> ' .
								'',
						) );
						}

						endwhile; // End of the loop.

					?>
				</div>
			<?php }else if($sayara_automotive_layout_settings == 'Right Sidebar'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php if (get_theme_mod('sayara_automotive_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php sayara_automotive_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' ); 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'sayara_automotive_show_single_post_pagination',true) != '') {

											the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('sayara_automotive_next_text',__( 'Next Post', 'sayara-automotive' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
									'<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span> ' .
									'',
								'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('sayara_automotive_prev_text',__( 'Previous Post', 'sayara-automotive' ))) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span> ' .
									'',
							) );
						}

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else if($sayara_automotive_layout_settings == 'One Column'){ ?>
				<?php if (get_theme_mod('sayara_automotive_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php sayara_automotive_the_breadcrumb(); ?>
						</div>
				<?php }?>
				<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); 

						get_template_part( 'template-parts/post/single-post' ); 
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );?>

						<?php if( get_theme_mod( 'sayara_automotive_show_single_post_pagination',true) != '') {

									the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('sayara_automotive_next_text',__( 'Next Post', 'sayara-automotive' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
								'<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span> ' .
								'',
							'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('sayara_automotive_prev_text',__( 'Previous Post', 'sayara-automotive' ))) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span> ' .
								'',
						) );
					}

					endwhile; // End of the loop.

				?>
			<?php }else if($sayara_automotive_layout_settings == 'Grid Layout'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php if (get_theme_mod('sayara_automotive_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php sayara_automotive_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' ); // If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'sayara_automotive_show_single_post_pagination',true) != '') {

											the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('sayara_automotive_next_text',__( 'Next Post', 'sayara-automotive' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
									'<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span> ' .
									'',
								'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('sayara_automotive_prev_text',__( 'Previous Post', 'sayara-automotive' ))) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span> ' .
									'',
							) );
						}

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }else {?>
				<div class="col-lg-8 col-md-8">
					<?php if (get_theme_mod('sayara_automotive_single_post_breadcrumb',false) != ''){ ?>
						<div class="breadcrumb">
							<?php sayara_automotive_the_breadcrumb(); ?>
						</div>
					<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); 

							get_template_part( 'template-parts/post/single-post' ); 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sayara-automotive' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sayara-automotive' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );?>

							<?php if( get_theme_mod( 'sayara_automotive_show_single_post_pagination',true) != '') {

											the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('sayara_automotive_next_text',__( 'Next Post', 'sayara-automotive' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
									'<span class="screen-reader-text">' . __( 'Next Post', 'sayara-automotive' ) . '</span> ' .
									'',
								'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('sayara_automotive_prev_text',__( 'Previous Post', 'sayara-automotive' ))) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous Post', 'sayara-automotive' ) . '</span> ' .
									'',
							) );
						}

						endwhile; // End of the loop.

					?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			<?php }?>
		</div>
	</div>
</main>

<?php get_footer();
