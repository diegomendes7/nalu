<?php /* template name: Produtos */ ?>
<?php get_header('interno') ?>

<main class="interno">
  <section class="main-produto">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-2">
          <aside class="lateral-produto">
            <div class="box-lateral">
              <h1>O que você <span>procura?</span></h1>
              <p><a href="#">Camiseta</a></p>
              <p><a href="#">Bermudas</a></p>
              <p><a href="#">Calças</a></p>
              <p><a href="#">Acessórios</a></p>
            </div>

            <div class="box-lateral">
              <h1>Gênero</h1>
              <p><a href="#">Feminino</a></p>
              <p><a href="#">Masculino</a></p>
            </div>

            <div class="box-lateral">
              <h1>Faixa de <span>Preço</span></h1>
              <p><a href="#">R$ 0 - 100</a></p>
              <p><a href="#">R$ 100 - 200</a></p>
              <p><a href="#">R$ 200 - 300</a></p>
            </div>

            <div class="box-lateral">
              <h1>Tamanho</h1>
              <p><a href="#">P</a></p>
              <p><a href="#">M</a></p>
              <p><a href="#">G</a></p>
              <p><a href="#">GG</a></p>
            </div>
          </aside>
        </div>
        <div class="col-xs-12 col-sm-10">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="box-produto-interno">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive">
                <h1><a href="<?php get_permalink() ?>">T-shirt Caveira</a></h1>
                <p class="preco-total">$45</p>
                <p class="preco-parcela">ou 3x R$15</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="box-produto-interno">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive">
                <h1><a href="#">T-shirt Caveira</a></h1>
                <p class="preco-total">$45</p>
                <p class="preco-parcela">ou 3x R$15</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="box-produto-interno">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive">
                <h1><a href="#">T-shirt Caveira</a></h1>
                <p class="preco-total">$45</p>
                <p class="preco-parcela">ou 3x R$15</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="box-produto-interno">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive">
                <h1><a href="#">T-shirt Caveira</a></h1>
                <p class="preco-total">$45</p>
                <p class="preco-parcela">ou 3x R$15</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="box-produto-interno">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive">
                <h1><a href="#">T-shirt Caveira</a></h1>
                <p class="preco-total">$45</p>
                <p class="preco-parcela">ou 3x R$15</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="box-produto-interno">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/produto1.png" alt="" class="img-responsive">
                <h1><a href="#">T-shirt Caveira</a></h1>
                <p class="preco-total">$45</p>
                <p class="preco-parcela">ou 3x R$15</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer() ?>
