<section id="contato">
    <div class='contatoForm container'>
        <?php 
            $args = array('post_type' => 'page', 'pagename' => 'contato');

            $my_page = get_posts($args);
        ?>
        <?php 
            if($my_page) : forEach($my_page as $post) : setup_postdata($post);
        ?>

        <h2 class="title"><?php the_title(); ?></h2>

        <?php
            the_content(); 
        ?>
    </div>
     <img src="<?php bloginfo('template_url')?>/assets/images/image.svg"> 
    <?php the_post_thumbnail('full', array('style' => 'height: auto !important')); ?>
        <?php
            endforeach; else: ?>
            <!-- <p>Nenhum conteúdo inserido na página Contato</p> -->
        <?php endif; ?>

    <!-- <div class="contatoImage__mask"> -->
    <!-- </div> -->
</section>
