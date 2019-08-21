<?php 
    $args = array('post_type' => 'page', 'pagename' => 'materias');

    $my_page = get_posts($args);
?>
<?php 

    if($my_page) : forEach($my_page as $post) : setup_postdata($post);

?>

<section class="container materiasingle">

    <?php 
        query_posts('post_type=materia' );
    ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <a href="<?php permalink_link();?>" class="materiasingle-post">
            <div class="materiasingle-img" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>) center no-repeat; background-size: cover;"> 
            </div>
            <div class="materiasingle-org">
                <h2> <?php the_title(); ?> </h2>
                <?php the_content(); ?>
            </div>
        </a>

    <?php endwhile; ?>
    
    <?php else :?>
    
        Não há Matérias...
    
    <?php endif;?>
    <?php wp_reset_query(); ?>

</section>

<?php endforeach; ?>

<?php else: ?>

    <p>Nenhum conteúdo inserido na página Materia</p>

<?php endif; ?>