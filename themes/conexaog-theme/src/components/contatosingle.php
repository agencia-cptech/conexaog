<?php 
    $args = array('post_type' => 'page', 'pagename' => 'contato');

    $my_page = get_posts($args);

    if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>

<section class="container contatosingle">
    <div class="contatosingle-org">
        <h2 class="title">Endereço</h2>
        <div class="org-info">
            <img src="<?php bloginfo('template_url')?>/assets/images/address.png">
            <p>R. Srg. Silva Nunes, 1012 - Complexo da Maré, Rio de Janeiro - RJ, 21044-242</p>
        </div>
        <div class="org-info">
            <img src="<?php bloginfo('template_url')?>/assets/images/phone-symbol-of-an-auricular-inside-a-circle.png">
            <p>(21) 999999-9999</p>
        </div>
    </div>
    <a href="https://www.google.com/maps/place/R.+Srg.+Silva+Nunes,+1012+-+Nova+Holanda,+Rio+de+Janeiro+-+RJ,+21044-242/@-22.8541978,-43.243313,17z/data=!4m5!3m4!1s0x997945248a82db:0x556d49f80990c593!8m2!3d-22.8542275!4d-43.2416393" target="blank" class="contatosingle-img">
        <img src="<?php bloginfo('template_url')?>/assets/images/finalmentemapa.svg">
    </a>
</section>

<?php endforeach; else: ?>

    <p>Nenhum conteúdo inserido na página Contato</p>

<?php endif; ?>