<?php get_header('interno') ?>
		<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<?php $product = new WC_Product(get_the_ID()); ?>
				<main class="main-interno">
			    <section>
			      <div class="container">
			        <div class="row">
			          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
			            <div class="wrap">
			              <div class="box-slide-produto">
			                <div class="produto-carousel">
			                  <?php
													$imgGaleria = $product->get_gallery_image_ids();
													if ($imgGaleria) {
														foreach ($imgGaleria as $prodGaleria) {
															 echo
															  wp_get_attachment_image(
																 	$prodGaleria,
																	'thumb_produto',
																	"",
																	array( "class" => "img-responsive" )
																);
														}
													}
												 ?>
			                </div>
			              </div>
			            </div>
			          </div>
			          <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
			            <div class="box-produto-principal">
			              <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
			            </div>
			          </div>
			          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
			            <div class="box-titulo-preco">
			              <h1><?php the_title() ?></h1>
			              <p class="preco-total">R$ <?php echo number_format($product->get_price(),2,',',' '); ?></p>
			              <!-- <p class="preco-parcela">ou 3x R$15</p> -->
			            </div>

									<?php wc_get_template('parts/add_cart.php') ?>

			             <div class="box-medida-produto">
			               <h1>Medidas</h1>
			               <!-- Dispara o modal -->
			               <p>Confira nossa <a href="#" data-toggle="modal" data-target="#myModal">régua de medidas</a></p>
			             </div>

			             <div class="box-desc-produto">
			               <h1>Detalhes</h1>
			               <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
			             </div>
			          </div>
			        </div>
			      </div>
			    </section>
			  </main>

			  <!-- Modal -->
			  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			    <div class="modal-dialog" role="document">
			      <div class="modal-content">
			        <div class="modal-body">
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			          <img src="<?php echo get_template_directory_uri() ?>/assets/images/detalhe-medida.png" alt="" class="img-responsive">
			        </div>
			      </div>
			    </div>
			  </div>
			<?php endwhile; ?>
		<?php endif; ?>

<?php get_footer() ?>
