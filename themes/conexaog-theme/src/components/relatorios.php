<?php
    $args = array('post_type' => 'page', 'pagename' => 'relatorio');  

    $my_page = get_posts($args);

    if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>
<section class="container relatorios">
    <div class="relatorios-info">
        <h2 class="title"> Relatórios Anuais </h2>
        <?php the_content();?>
    </div>
    <div class="relatorios-org">
        <div class="relatorio-planilha">
            <div class="planilha-name">
                <h2>Nome</h2>
            </div>
            <div class="planilha-date">
                <h2>Data</h2>
            </div>
            <div class="planilha-download">
                <h2>Baixar</h2>
            </div>
        </div>

        <?php query_posts('post_type=relatorios'); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <div class="relatorio-planilha">
            <div class="planilha-name">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="planilha-date">
                <h2><?php the_time('d/m/Y')?></h2>
            </div>
            <div class="planilha-download">
                <a href="<?php wp_get_attachment_url( $attachment_id );?>" >
                    <h2>Download</h2>
                </a>
            </div>
        </div>

        <?php endwhile; ?>
        <?php else :?>

            <p> Não há Relatórios... </p>

        <?php endif;?>
        <?php wp_reset_query(); ?>

    </div>
</section>
<?php endforeach; else: ?>

    <p>Nenhum conteúdo inserido na página Sobre</p>

<?php endif; ?>