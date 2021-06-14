<?php get_header(); ?>

<main class="main-content">
    <?php if(have_posts()): ?>
        <div class="container px-5 my-4">
            <div class="row">
                <div class="col-xs-12"> 
                    <h1>Search Result</h1>
                    <hr>
                </div>
            </div>
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
        </div>
    <?php else: ?>
        <div class="container px-5 my-4">
            <div class="row">
                <div class="col-xs-12"> 
                    <h1>Search Results</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-9 d-flex justify-content-center align-items-center"> 
                    <h1 class="text-center text-uppercase">No result</h1>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>