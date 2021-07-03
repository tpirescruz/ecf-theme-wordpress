<?php get_header(); ?>
<article class="container project">
    <picture class="project-featured">
        <source media="(max-width: 375px)" srcset="img/detail/mobile/image-manage-hero.jpg, img/detail/mobile/image-manage-hero@2x.jpg 2x">
        <source media="(max-width: 768px)" srcset="img/detail/tablet/image-manage-hero.jpg, img/detail/tablet/image-manage-hero@2x.jpg 2x">
        <?php if (get_field('portfolio_hero')):?>
        <img src="<?php the_field('portfolio_hero');?>" alt="A mockup">
        <?php endif;?>
    </picture>
    <div class="project-summary">
        <h1 class="h2-like"><?php the_title();?></h1>
        <div class="project-summary-content">
            <p><?php the_field('introduction_text')?></p>
        </div>
        <div class="project-summary-metadata">
            <ul class="category-list">
                <?php echo get_the_term_list( $post->ID, 'type', '<li class="category-item">', '/', '</li>' );?>
            </ul>
            <ul class="language-list">
                <?php echo get_the_term_list( $post->ID, 'language', '<li class="category-item">', '/', '</li>' );?>
            </ul>
        </div>
        <a href="#" class="btn-secondary">View website</a>
    </div>
    <div class="project-content">
    <?php 
    $content_text = get_field('main_content');
    if ($content_text):?>
        <h2 class="h3-like"><?php echo $content_text['main_content_heading'];?></h2>
        <p><?php echo $content_text['main_text_content']?></p>
    <?php endif; ?>

    <?php
    if( have_rows('main_visual_content') ):
        $visual_title = get_field('main_visual_content'); ?>
        <h2 class="h3-like"><?php echo $visual_title['section_title_visual']; ?></h2>
    <?php endif; ?> 

            <picture class="project-featured">
                <img src="<?php echo get_field('image_1')['url']?>" alt="<?php echo get_field('image_1')['alt'];?>">
                <img src="<?php echo get_field('image_2')['url']?>" alt="<?php echo get_field('image_2')['alt'];?>">
            </picture>

</div>
</article>
<nav class="pagination" aria-label="Projects">
<?php $prev= get_previous_post();
    $next= get_next_post();?>
    <div class="container">
        <h2 class="screen-reader-text">Projects navigation</h2>
        <ul class="pagination-list">
            <li>
                <?php previous_post_link('%link'); ?>
            </li>
            <li>
                <?php next_post_link('%link'); ?>
            </li>
        </ul>
    </div>
</nav>

<?php get_footer(); ?>