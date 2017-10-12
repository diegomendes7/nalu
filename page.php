<?php get_header() ?>
  <div class="container">
    <?php if (have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <div class="box-titulo-preco">
          <h1><?php the_title() ?></h1>
        </div>
        <?php the_content() ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php get_footer() ?>
