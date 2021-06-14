<?php get_header(); ?>

<main class="main-content">
    <?php if(have_posts()): ?>
        <div class="container px-5 my-4">
            <div class="row">
                <div class="col-xs-12"> 
                    <h1><?php single_post_title(); ?></h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <?php while(have_posts()): the_post(); ?>
                    <?php get_template_part('template-parts/content', 'archive'); ?>
                <?php endwhile; ?>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="d-flex justify-content-start"><?php previous_posts_link( '<- Newer posts' ); ?></div>
                <div class="d-flex justify-content-end"><?php next_posts_link( 'Older posts ->' ); ?></div>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>