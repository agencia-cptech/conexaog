<?php
    $args = array('post_type' => 'page', 'pagename' => 'sobre');  

    $my_page = get_posts($args);

    if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>

<section class="container projetos">
    <div class="categorias"></div>
    <div class="projetos-org">

        <?php query_posts('post_type=projetos'); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <div class="projetos-post">
            <div class="projetos-img">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>">
            </div>
            <div class="projetos-desc">
                <h2><?php the_title()?></h2>
                <?php the_excerpt()?>
            </div>
        </div>

        <?php endwhile; ?>
        <?php else :?>

            <p> Não há Notícias... </p>

        <?php endif;?>

        <?php wp_reset_query(); ?>

    </div>
</section>

<?php
    endforeach; else: ?>
    <p>Nenhum conteúdo inserido na página Sobre</p>
<?php endif; ?>