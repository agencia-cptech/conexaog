<section class='container' id='materia'>
    <?php 
        $args = array('post_type' => 'page', 'pagename' => 'materias');

        $my_page = get_posts($args);
    ?>
    <?php 
        if($my_page) : forEach($my_page as $post) : setup_postdata($post);
    ?>
    <h2 class="title materia_title"><?php the_title()?></h2>
    <div class="materia-posts">
        <?php 
            query_posts('post_type=materia');
        ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="post">
            <div class="postdiv-img">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>">
            </div>
            <div class="postdiv-cont">
                <div>
                    <h2><?php the_title()?></h2>
                    <?php the_content()?>
                </div>
                <button class="button">Ver Mais</button>
            </div>
        </div>

        <?php endwhile; ?>
        
        <?php else :?>
        
            Não há Matérias...
        
        <?php endif;?>
        <?php wp_reset_query(); ?>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum conteúdo inserido na página Materia</p>
    <?php endif; ?>
</section>