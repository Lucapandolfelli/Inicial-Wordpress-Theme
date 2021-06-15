<div class="row">
    <div class="col-xs-12">
        <?php if(is_archive()): ?>
            <h1><?php the_archive_title(); ?></h1>
        <?php elseif(is_search()): ?>
            <h1>Search Result for '<?php echo get_search_query(); ?>'</h1>
        <?php elseif(is_page()): ?>
            <h1><?php the_title(); ?></h1>
        <?php elseif(is_home() || is_front_page()): ?>
            <h1><?php single_post_title(); ?></h1>
        <?php elseif(is_single()): ?>
            <h1><?php the_title(); ?></h1>
        <?php elseif(is_404()): ?>
            <h1>Error 404</h1>
        <?php endif; ?>
        <hr>
    </div>
</div>