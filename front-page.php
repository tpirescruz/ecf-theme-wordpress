<?php get_header(); ?>
    <section class="hero">
        <div class="container">
            <picture class="hero-illustration">
                <img src="<?php echo get_field('img-hero', 'options'); ?>" alt="A mockup">
            </picture>
            <div class="hero-content">
                <h1 class="hero-title"><?php echo get_field('intro', 'options'); ?></h1>
                <a href="#about" class="btn-primary"><?php echo get_field('main_button_text','options');?></a>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <picture class="about-illustration">
            <?php $picture = get_field('about_section_picture')?>
                <!-- <source media="(max-width: 375px)" srcset="img/homepage/mobile/image-homepage-profile.jpg, img/homepage/mobile/image-homepage-profile@2x.jpg 2x" >
                <source media="(max-width: 768px)" srcset="img/homepage/tablet/image-homepage-profile.jpg, img/homepage/tablet/image-homepage-profile@2x.jpg 2x" > -->
                <img src="<?php  echo $picture['url'];?>" srcset="<?php  echo $picture['url'];?> 2x" alt="A mockup">
            </picture>
            <div class="about-content">
                <h2><?php echo get_field('about_section_title');?></h2>
                <p><?php echo get_field('about_section_content');?></p>
                <a href="portfolio.html" class="btn-secondary">Go to portfolio</a>
            </div>
        </div>
    </section>


<?php get_footer(); ?>