<?php get_header() ?>
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
<?php get_footer() ?>
