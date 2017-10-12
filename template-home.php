<?php /* template name: home */ ?>
<?php get_header(); ?>

<section class="banner">
  <img src="<?php echo get_template_directory_uri() ?>/assets/images/1-a.png" alt="" class="img-responsive">
</section>

<main>
  <section class="conteudo-meio">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-produto-home">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/10.png" alt="" class="img-responsive img-cat-home">
            <h1 class="titulo-categoria"> Camisetas <span>Masculinas</span></h1>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-produto-home">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/9.png" alt="" class="img-responsive img-cat-home">
            <h1 class="titulo-categoria"> Camisetas <span>Femininas</span></h1>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-produto-home">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/8.png" alt="" class="img-responsive img-cat-home">
            <h1 class="titulo-categoria">Bermudas</h1>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-produto-home">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/7.png" alt="" class="img-responsive">
            <h1 class="titulo-categoria">Polos</h1>
          </div>
        </div>
      </div>

      <div class="chat">
        <div class="row">
          <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
            <p>Dúvidas?</p>
            <p>Fala com a gente por aqui.</p>
          </div>
          <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
            <a class="btn btn-chat" href="#" role="button">Chat</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contato-home">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
          <div class="social-contato">
            <ul class="list-unstyled list-inline">
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/5.png" alt=""></a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/6.png" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
          <h1>Manda um Alô!</h1>
          <ul class="list-unstyled list-inline">
            <li class="col-contato-esquerda">
              <p>contato@naluwe.com</p>
              <p>(XX) XXXX-XXXX</p>
              <p>(XX) XXXX-XXXX</p>
            </li>
            <li class="col-contato-direita">
              <p>Rua dos Italianos, 502/494</p>
              <p>Bom Retiro - São Paulo - Sp</p>
              <p>Cep 01161-000</p>
            </li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
          <div class="pagamento">
            <ul class="list-unstyled list-inline">
              <li class="forma-paga"><p>Formas de</p> <p>Pagamento</p></li>
              <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/4.png" alt="" class="img-responsive img-pagseguro"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>
