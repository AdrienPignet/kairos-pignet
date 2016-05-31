<div class="arround-slide">
    <div class="cycle cycle-slideshow custom-cycle row" data-cycle-fx="scrollHorz" data-cycle-speed="800" data-cycle-carousel-fluid=true data-cycle-timeout=5000 data-cycle-pause-on-hover="true" data-cycle-slides="> div">
        <?php
    		$args = array(
    		'post_type' => 'product',
    		'posts_per_page' => 3
    		);

    		$loop = new WP_Query( $args );
    		if ( $loop->have_posts() ) {
    		while ( $loop->have_posts() ) : $loop->the_post();
            ?><div class="slide">
                <div class="small-6 large-6 columns end img-slide">
                    <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="small-6 large-6 columns end text-slide">
                        <div class="text-slide-content">
                            <a href="#" class="new">Nouveauté</a><h2><?php the_excerpt(); ?></h2><h3><?php the_title(); ?></h3><a href="<?php the_permalink(); ?>" class="decouvrir">Découvrir</a>
                        </div>
                </div>
            </div>
            <?php
    		endwhile;
    		} else {
    		echo __( 'No products found' );
    		}

    		wp_reset_query();

    		?>
    </div>
</div>
