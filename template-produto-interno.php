<?php /* template name: Produto Interno */ ?>
<?php get_header('interno') ?>

  <main class="main-interno">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="wrap">
              <div class="box-slide-produto">
                <div class="produto-carousel">
                  <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive center-block"></div>
                  <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive center-block"></div>
                  <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive center-block"></div>
                  <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive center-block"></div>
                  <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive center-block"></div>
                  <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive center-block"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
            <div class="box-produto-principal">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="box-titulo-preco">
              <h1>T-shirt Caveira</h1>
              <p class="preco-total">$45</p>
              <p class="preco-parcela">ou 3x R$15</p>
            </div>

            <div class="box-detalhe-produto">
              <h1>Tamanho</h1>
              <ul class="list-unstyled list-inline">
                <li>PP</li>
                <li>P</li>
                <li>M</li>
                <li>G</li>
                <li>GG</li>
              </ul>
            </div>

            <div class="box-quantidade-produto">
              <h1>Quantidade</h1>
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <a class="btn btn-comprar" href="#" role="button"><i class="fa fa-shopping-cart icon-cart" aria-hidden="true"></i>
 Comprar</a>

             <div class="box-medida-produto">
               <h1>Medidas</h1>
               <!-- Dispara o modal -->
               <p>Confira nossa <a href="#" data-toggle="modal" data-target="#myModal">régua de medidas</a></p>
             </div>

             <div class="box-desc-produto">
               <h1>Detalhes</h1>
               <p>100% algodão Pima cultivado no norte do Peru e considerado um dos melhores algodões do mundo possui fíbras longas que, quando tecidas, conferem brilho, maciez e durabilidade a peça.</p>
             </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
<<<<<<< HEAD
      <div class="modal-content">        
=======
      <div class="modal-content">
>>>>>>> 862df5473805c134889b51152ded37828155010d
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/detalhe-medida.png" alt="" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
<?php get_footer() ?>
