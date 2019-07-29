<footer>
    <div class="container">
        <div class="containerPrimario">
            <?php 
                $args = array('post_type' => 'page', 'pagename' => 'footer');

                $my_page = get_posts($args);

                if($my_page) : forEach($my_page as $post) : setup_postdata($post);
            ?>

            <?php
                the_content(); 
            ?>

            <?php

                endforeach; else: ?>

            <?php endif; ?>
        </div>
        <div  class="conteinerSecundario">
            <a href="https://www.facebook.com/GrupoConexaoG/" target="_BLANK"><img src="<?php bloginfo('template_url')?>/assets/images/facebook.svg" ></a>
            <!-- <a href="" target="_BLANK"><img src="<?php bloginfo('template_url')?>/assets/images/twitter.svg" ></a>  -->
            <a href="https://www.instagram.com/grupoconexaog/" target="_BLANK"><img src="<?php bloginfo('template_url')?>/assets/images/instagram.svg" ></a>
        </div>
   
    </div>
    <br>
    <p class="textFotter" > © <?php echo date('Y'); ?> Company LTD. All rights reserved.  Terms &amp; Conditions | Privacy Policy.</p>
</footer>

