<?php get_header(); ?>

<main class="main-content">
    <?php if(have_posts()): while(have_posts()): the_post();?>
        <div class="container px-5 mt-4 mb-5">
            <div class="row">
                <div class="col-xs-12"> 
                    <h1><?php the_title(); ?></h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs 12" style="text-align: justify;"> 
                    <small>Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(' / '); ?></small>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>