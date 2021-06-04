<?php get_header();?>

<main id="main-content">
		<div class="container">
			<h1 class="screen-reader-text">Portfolio</h1>
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <article class="portfolio-item">
                    <picture class="portfolio-item-illustration">
                        <source media="(max-width: 375px)" srcset="img/portfolio/mobile/image-portfolio-manage.jpg, img/portfolio/mobile/image-portfolio-manage@2x.jpg 2x" >
                        <img src="img/portfolio/desktop/image-portfolio-manage.jpg" srcset="img/portfolio/desktop/image-portfolio-manage@2x.jpg 2x" alt="A mockup">
                    </picture>
                    <div class="portfolio-item-content">
                        <h2>Manage</h2>
                        <p>This project required me to build a fully responsive landing page to the designs provided. I used HTML5, along with CSS Grid and JavaScript for the areas that required interactivity, such as the testimonial slider.</p>
                        <a href="manage.html" class="btn-secondary">View project</a>
                    </div>
                </article>
            <?php endwhile; endif; ?>
			<article class="portfolio-item">
				<picture class="portfolio-item-illustration">
					<source media="(max-width: 375px)" srcset="img/portfolio/mobile/image-portfolio-manage.jpg, img/portfolio/mobile/image-portfolio-manage@2x.jpg 2x" >
					<img src="img/portfolio/desktop/image-portfolio-manage.jpg" srcset="img/portfolio/desktop/image-portfolio-manage@2x.jpg 2x" alt="A mockup">
				</picture>
				<div class="portfolio-item-content">
					<h2>Manage</h2>
					<p>This project required me to build a fully responsive landing page to the designs provided. I used HTML5, along with CSS Grid and JavaScript for the areas that required interactivity, such as the testimonial slider.</p>
					<a href="manage.html" class="btn-secondary">View project</a>
				</div>
			</article>
			<article class="portfolio-item">
				<picture class="portfolio-item-illustration">
					<source media="(max-width: 375px)" srcset="img/portfolio/mobile/image-portfolio-bookmark.jpg, img/portfolio/mobile/image-portfolio-bookmark@2x.jpg 2x" >
					<img src="img/portfolio/desktop/image-portfolio-bookmark.jpg" srcset="img/portfolio/desktop/image-portfolio-bookmark@2x.jpg 2x" alt="A mockup">
				</picture>
				<div class="portfolio-item-content">
					<h2>Bookmark</h2>
					<p>This project required me to build a fully responsive landing page to the designs provided. I used HTML5, along with CSS Grid and JavaScript for the areas that required interactivity, such as the features section.</p>
					<a href="bookmark.html" class="btn-secondary">View project</a>
				</div>
			</article>
			<article class="portfolio-item">
				<picture class="portfolio-item-illustration">
					<source media="(max-width: 375px)" srcset="img/portfolio/mobile/image-portfolio-insure.jpg, img/portfolio/mobile/image-portfolio-insure@2x.jpg 2x" >
					<img src="img/portfolio/desktop/image-portfolio-insure.jpg" srcset="img/portfolio/desktop/image-portfolio-insure@2x.jpg 2x" alt="A mockup">
				</picture>
				<div class="portfolio-item-content">
					<h2>Insure</h2>
					<p>This was a small project which mostly consisted of HTML and CSS. I built a fully-responsive landing page. The only JavaScript this project required was to enable the toggling of the mobile navigation.</p>
					<a href="insure.html" class="btn-secondary">View project</a>
				</div>
			</article>
			<article class="portfolio-item">
				<picture class="portfolio-item-illustration">
					<source media="(max-width: 375px)" srcset="img/portfolio/mobile/image-portfolio-fylo.jpg, img/portfolio/mobile/image-portfolio-fylo@2x.jpg 2x" >
					<img src="img/portfolio/desktop/image-portfolio-fylo.jpg" srcset="img/portfolio/desktop/image-portfolio-fylo@2x.jpg 2x" alt="A mockup">
				</picture>
				<div class="portfolio-item-content">
					<h2>Fylo</h2>
					<p>This project was built in pure HTML and CSS. I had mobile and desktop designs to work to and built it so that it was fully-responsive. I took a mobile-first approach and used modern CSS like Flexbox and Grid for layout purposes.</p>
					<a href="fylo.html" class="btn-secondary">View project</a>
				</div>
			</article>
		</div>
	</main>

    <?php get_footer();?>