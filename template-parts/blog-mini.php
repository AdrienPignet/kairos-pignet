<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-12 medium-6 large-3 columns end">
    <div class="img-container">
        <?php the_post_thumbnail(); ?>
    </div>
    <span>
        <h4><?php the_title(); ?></h4>
        <p>
            <?php the_excerpt(); ?>
        </p>
    </span>
    <a href="<?php the_permalink(); ?>">Lire la suite</a>
</div>
