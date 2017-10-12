<?php /* template name: Produtos */ ?>
<?php get_header('interno') ?>

<main class="interno">
  <section class="main-produto">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-2">
          <aside class="lateral-produto">
            <?php get_template_part('parts/sidebar_ecommerce') ?>
          </aside>
        </div>

        <div class="col-xs-12 col-sm-10">
          <div class="row">
						<?php
						if (have_posts()) {
							while (have_posts()) { the_post();
								$product_id = get_the_id();
								$product = new WC_Product($product_id);
								?>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
		              <div class="box-produto-interno">
										<a href="<?php the_permalink() ?>">
											<?php the_post_thumbnail( 'thumb_produto', array( 'class' => 'img-responsive' ) ); ?>
										</a>
		                <h1><a href="<?php get_permalink() ?>"><?php the_title() ?></a></h1>
		                <p class="preco-total">R$ <?php echo number_format($product->get_price(),2,',',' '); ?></p>
		                <!-- <p class="preco-parcela">ou 3x R$15</p> -->
		              </div>
		            </div>
								<?php
							}
						}
						 ?>




          </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer() ?>
