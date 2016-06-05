<div data-scrollreveal="enter bottom over 0.4s and move 100px after 0.3s" class="small-12 medium-6 large-3 columns">
    <div id="img-mini" class="watches-img">
      <span class="price">
          <span class="amount">
              <?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true);?>€
          </span>
      </span>
        <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail(); ?></a>
    </div>
    <span>
        <h4><?php the_excerpt(); ?></h4>
        <h5><?php the_title(); ?></h5>
        <a href="<?php the_permalink(); ?>">Découvrir</a>
    </span>
</div>
