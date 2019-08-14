<section class='container' id='about'>
    <div class='about__text'>
        <?php
            $args = array('post_type' => 'page', 'pagename' => 'sobre');  

            $my_page = get_posts($args);

            if($my_page) : forEach($my_page as $post) : setup_postdata($post);
        ?>

        <h2 class="title"><?php the_title(); ?></h2>

        <?php
            the_excerpt();
        ?>

        <!-- <a  class='button' href='#'>Ver Mais</a> -->
    </div>
    <?php the_post_thumbnail('full', array('class' => 'about__img', 'style' => 'height: auto !important')); ?>
        <?php
            endforeach; else: ?>
            <!-- <p>Nenhum conteúdo inserido na página Sobre</p> -->
        <?php endif; ?>
</section>