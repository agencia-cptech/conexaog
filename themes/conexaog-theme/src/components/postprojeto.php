<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="container postprojeto">
    <?php the_content();?>
</section>

<?php endwhile; else :?>

    Não há Projeto...

<?php endif;?>