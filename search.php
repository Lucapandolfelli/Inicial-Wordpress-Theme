<?php get_header(); ?>

<main class="main-content">
    <?php if(have_posts()): ?>
        <div class="container px-5 my-4">
            <?php get_template_part('/template-parts/content', 'title'); ?>
            <div class="row">
                <div class="col-xs-12 col-sm-9"> 
                    <?php while(have_posts()): the_post(); ?>
                        <?php get_template_part('template-parts/content', 'archive'); ?>
                    <?php endwhile; ?>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <?php get_template_part('/template-parts/content', 'pagination'); ?>
        </div>
    <?php else: ?>
        <div class="container px-5 my-4">
            <?php get_template_part('/template-parts/content', 'title'); ?>
            <div class="row">
                <div class="col-xs-12 col-sm-9 d-flex justify-content-center align-items-center"> 
                    <h2 class="text-center">There are no results for '<?php echo get_search_query(); ?>'</h2>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>