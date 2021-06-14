<?php get_header(); ?>

<main class="main-content">
    <?php if(have_posts()): ?>
        <div class="container px-5 mt-4 mb-5">
            <div class="row">
                <div class="col-xs-12"> 
                    <h1><?php the_archive_title(); ?></h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs 12"> 
                    <?php while(have_posts()): the_post(); ?>
                        <?php get_template_part('template-parts/content', 'archive'); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>