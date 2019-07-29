<section id="navbar" class="navbar">
  <div class="container navbar-div">
    <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">
      <img src="<?php bloginfo('template_url') ?>/assets/images/iconNavbar.svg">
    </a>
    <!-- <nav class="navbar-nav"> -->
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <!-- <a class="navbar-item" href="#body">HOME</a>
      <a class="navbar-item" href="#about">SOBRE</a>
      <a class="navbar-item" href="#project">CASA DA DIVERSIDADE</a>
      <a class="navbar-item" href="#contato">CONTATO</a>
      <a class="navbar-item" href="https://benfeitoria.com/casadadiversidade"><span class="button button--menu navbar-doar">DOAR</span></a> -->
    <!-- </nav> -->
   
    <div class="burger six">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</section>