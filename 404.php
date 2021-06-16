<?php get_header(); ?>

<main class="main-content">
    <div class="container px-5 my-4">
        <?php get_template_part('/template-parts/content', 'title'); ?>
        <div class="row">
            <div class="col-xs-12 col-sm-9 d-flex justify-content-center align-items-center"> 
                <h1 class="text-center text-uppercase">Page not found!</h1>
            </div>
            <div class="col-xs-12 col-sm-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
