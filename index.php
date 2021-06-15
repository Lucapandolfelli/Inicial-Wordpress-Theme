<?php get_header(); ?>

<main class="main-content">
    <?php if(have_posts()): ?>
        <div class="container px-5 my-4">
            <?php get_template_part('/template-parts/content', 'title'); ?>
            <div class="row">
                <?php while(have_posts()): the_post(); ?>
                    <?php get_template_part('template-parts/content', 'archive'); ?>
                <?php endwhile; ?>
            </div>
            <?php get_template_part('/template-parts/content', 'pagination'); ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>