<?php get_header(); ?>

<main class="main-content">
    <?php if(have_posts()): while(have_posts()): the_post();?>
        <div class="container px-5 my-4">
            <?php get_template_part('/template-parts/content', 'title'); ?>
            <div class="row">
                <div class="col-xs-12" style="text-align: justify;"> 
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>