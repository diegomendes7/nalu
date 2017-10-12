<?php get_header() ?>
<<<<<<< HEAD
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
=======
  <main>
    <?php if (have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <section>
          <div class="container">
            <h2><?php the_title() ?></h2>
            <?php the_content() ?>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
>>>>>>> 862df5473805c134889b51152ded37828155010d
<?php get_footer() ?>
