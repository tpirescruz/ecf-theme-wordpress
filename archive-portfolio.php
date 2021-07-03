<?php get_header(); ?>

<main id="main-content">
	<div class="container">
		<h1 class="screen-reader-text">Portfolio</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="portfolio-item">
					<picture class="portfolio-item-illustration">
						<source media="(max-width: 375px)" srcset="img/portfolio/mobile/image-portfolio-manage.jpg, img/portfolio/mobile/image-portfolio-manage@2x.jpg 2x">
						<img src="<?php the_post_thumbnail_url(); ?>" srcset="img/portfolio/desktop/image-portfolio-manage@2x.jpg 2x" alt="A mockup">
					</picture>
					<div class="portfolio-item-content">
						<h2><?php the_title(); ?></h2>
						<p><?php the_field('introduction_text') ?></p>
						<a href="<?php the_permalink(); ?>" class="btn-secondary">View project</a>
					</div>
				</article>
		<?php endwhile;
		endif; ?>

		<nav class="pagination" aria-label="Projects">
			<div class="container">
				<h2 class="screen-reader-text">Projects navigation</h2>
				<ul class="pagination-list">
					<li>
						<?php previous_posts_link('Previous page'); ?>
					</li>
					<li>
						<?php next_posts_link('Next page'); ?>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</main>

<?php get_footer(); ?>