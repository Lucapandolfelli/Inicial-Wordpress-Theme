<?php if(is_search()): ?>
    <div>
<?php elseif(is_archive()): ?>
    <div>
<?php else: ?>
    <div class="col-sm-6">
<?php endif; ?>
        <div class="card shadow-sm my-3 p-2">
            <div class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <small>Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(' / '); ?></small>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
