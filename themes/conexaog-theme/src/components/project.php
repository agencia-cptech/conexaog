<section class='container' id='project'>
        <?php 
            $args = array('post_type' => 'page', 'pagename' => 'projeto');

            $my_page = get_posts($args);
        ?>
        <?php 
            if($my_page) : forEach($my_page as $post) : setup_postdata($post);
        ?>
    <div class='project__img'>
        <?php the_post_thumbnail('full', array('style' => 'height: auto !important')); ?>
    </div>
    <div class='project__text'>
        <h2 class="title"><?php the_title(); ?></h2>
        <?php
                the_content(); 
            endforeach; 
        ?>
        <?php else: ?>
            <!-- <p>Nenhum conteúdo inserido na página Projeto</p> -->
        <?php endif; ?>
        <div>
            <!-- <a  class='button button--inverse' href='#'>Ver Mais</a> -->
            <a  class='button' href='https://benfeitoria.com/casadadiversidade' target="_BLANK">Fazer Doação</a>
        </div>
    </div>
</section>