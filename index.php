<?php get_header(); ?>

	<?php if(is_front_page()) : ?>
		<section class="front-intro">
			<div class="container">
				<h2 class="declaration">This is the Home Page!</h2>
				<h3 class="sub-dec">This is what I have to say...</h3>
				<a href="/about" class="btn btn-primary">Read More</a>
			</div>
		</section>
	<?php elseif( is_home() ): ?>
		
		<section class="inner-intro">
			<div class="container">
				<h2 class="declaration">Welcome to the Blog Page!</h2>

				<?php 
					$args = array(
							'post_type' => 'posts',
							'order'     => 'ASC',
							'posts_per_page' => 5,
						);
				?>
				<?php $query = new WP_Query( $args ); ?>
				 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

					 <div class="post">
					 
					 <!-- Display the Title as a link to the Post's permalink. -->
					 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

					 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
					 <small><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?></small>
					 
					  <div class="entry">
					  	<?php the_content(); ?>
					  </div>

					  <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
					 </div> <!-- closes the first div box -->

					 <?php endwhile; 
					 wp_reset_postdata();
					 else : ?>
					 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					 <?php endif; ?>

				<article class="entry-content">
				<header class="page-intro">
					<h3>Let's chat about the web!</h3>
				</header>
				
				<footer>

				</footer>
			</article>
			</div>
		</section>

	<?php else: ?>

	<section class="inner-intro">
		<div class="container">
			<h2 class="declaration"><?php the_title(); ?></h2>
			<h3 class="sub-dec"><?php the_content(); ?></h3>
			<a href="/about" class="btn btn-primary">Read More</a>
		</div>
	</section>

	<?php endif; ?>

<section class="main container">
	<div class="page-wrap">

		<div class="boxes clearfix">
			<div class="one-third box"></div>
			<div class="one-third box"></div>
			<div class="one-third last box"></div>
		</div>
		<div class="boxes clearfix">
			<div class="one-third box"></div>
			<div class="two-thirds box"></div>
		</div>

	</div>
</section>
<?php get_footer(); ?>