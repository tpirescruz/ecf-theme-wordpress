<?php

/*

    Template Name: Contact

*/

get_header();?>

<main id="main-content">
		<div class="container">
			<h1 class="screen-reader-text">Contact</h1>
            <?php if(get_field('contact_text_heading')) :?>
			<section class="get-in-touch">
				<h2><?php echo get_field('contact_text_heading'); ?> </h2>
				<div class="get-in-touch-content">
					<p><?php echo get_field('contact_text_content'); ?></p>
					<nav class="social-nav">
						<ul class="menu">
							<?php dynamic_sidebar('portfolio-footer')?>
						</ul>
					</nav>
				</div>
			</section>
            <?php endif ;?>
			<formÒsÒ class="contact-form" novalidate>
				<h2>Contact Me</h2>
				<div class="fields">
                <?php echo do_shortcode('[contact-form-7 id="110" title="Contact Form"]'); ?>
				</div>
			</form>
		</div>
	</main>
<?php get_footer();?>