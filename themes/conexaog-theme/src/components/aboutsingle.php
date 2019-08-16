<?php
    $args = array('post_type' => 'page', 'pagename' => 'sobre');  

    $my_page = get_posts($args);

    if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>
<section class='container aboutsingle' id='about'>
    <div class='aboutsingle__text'>

        <h2 class="title">Nossa História</h2>

        <?php
            the_content();
        ?>

        <!-- <a  class='button' href='#'>Ver Mais</a> -->
    </div>
    <div class="aboutsingle-box">
        <div class="container container-aboutsingle">
            <!-- year and dots -->
            <div class="year-and-dots">
                <div>
                    <p>2019</p>
                    <div></div>
                </div>
            </div>

            <!-- posts -->
            <?php query_posts('post_type=linhadotempo'); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>

            <div class="post">
                <div class="post-img" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID());?>) no-repeat center; background-size: cover;">
                    <img src="<?php bloginfo('template_url')?>/assets/images/imgmasktime.png">  
                </div>
                <div class="post-lines">
                    <div class="line1"></div>
                    <div class="line2"></div>
                </div>
                <div class="post-desc">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();?>
                </div>
            </div>
           
            <?php endwhile; ?>
        
            <?php else :?>
            
                Não há Notícias...
            
            <?php endif;?>
            <?php wp_reset_query(); ?>
            <!-- year and dots -->
            <div class="year-and-dots">
                <div>
                    <p>2016</p>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
        <?php
            endforeach; else: ?>
                <!-- <p>Nenhum conteúdo inserido na página Sobre</p> -->
        <?php endif; ?>
</section>