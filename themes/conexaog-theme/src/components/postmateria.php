<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="container postmateria" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="postmateria-first">
       <div style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>) center no-repeat; background-size: cover;"></div>
       <?php the_excerpt(); ?>
   </div>
   <div class="postmateria-second">
        <p><?php the_content();?></p>
   </div>
</section>

<?php endwhile; else :?>

    Não há Matéria...

<?php endif;?>