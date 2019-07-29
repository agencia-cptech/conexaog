<?php 
  $args = array('post_type' => 'page', 'pagename' => 'header');

  $my_page = get_posts($args);
?>
<?php 
  if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>
<header id="home" class="header" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>) center no-repeat; background-size: cover;">
  <img src="<?php bloginfo('template_url')?>/assets/images/headerMask.png">
  <div class="container">
      <h2 class="title"><?php bloginfo('name'); ?></h2>
    <?php
        the_content(); 
      endforeach; 
    ?>
    <?php else: ?>
      <!-- <p>Nenhum conteúdo inserido na página Header</p> -->
    <?php endif; ?>
  </div>
</header>