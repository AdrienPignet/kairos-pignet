<div class="small-12 medium-6 large-3 columns end">
    <div class="img-container">
        <a href="<?php the_permalink(); ?>" class="img-link"><?php the_post_thumbnail(); ?></a>
    </div>
    <span>
        <h4><?php the_title(); ?></h4>
        <p>
            <?php the_excerpt(); ?>
        </p>
    </span>
    <a href="<?php the_permalink(); ?>">Lire la suite</a>
</div>
