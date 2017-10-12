<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php title_page() ?></title>

    <?php wp_head() ?>
  </head>
  <body>

    <header>
<<<<<<< HEAD
      <div class="" id="topoSite">
=======
      <div class="navbar-fixed-top" id="topoSite">
>>>>>>> 862df5473805c134889b51152ded37828155010d
        <div class="bar-top">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <span class="frete-top">Frete Grátis nas compras acima de R$350 | Parcele em até 6x sem juros</span>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <ul class="list-unstyled list-inline">
                  <li class="conta-user">Minha Conta</li>
                  <li><img src="<?php echo get_template_directory_uri() ?>/assets/images/CONTA.png" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <nav class="navbar navbar-naluwe">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuTopo" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand hidden-md hidden-lg" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/LOGO-NALUWE-BRANCA.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menuTopo">
              <!--Inicio: Navbar para resoluções >=360px até >=768px-->
              <?php
                $args = array(
                  'theme_location' => 'menu_topo',
                  'menu_class' => 'nav navbar-nav nav-centralizada',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'	 => new wp_bootstrap_navwalker()
                );
                wp_nav_menu( $args );
              ?>

              <!--<div id="header-search-bar" class="hidden-xs fadeIn animated">
                <form action="" class="form-inline ">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="s" class="form-control" placeholder="Buscar..." aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">
                        <span><i class="fa fa-search" aria-hidden="true"></i></span>
                      </span>
                      <button type="submit" class="btn btn-pesquisa-search-bar">Buscar</button>
                    </div>
                  </div>
                </form>
              </div>-->

              <div class="area-pesquisa hidden-md hidden-lg">
                <div class="input-group pesquisa-home">
                  <div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Buscar">
                </div>
                <!--<div class="hidden-xs pesquisa-topo">
                    <button type="button" class="btn btn-pesquisa-topo btn-togle-search-header" aria-label="Left Align">
                      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                  </div>-->
              </div>

              <div class="carrinho hidden-md hidden-lg">
                <a href="#" class="link-cart">Carrinho <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/CARRINHO.png" alt=""></span></a>
              </div>

              <!--Fim: Navbar para resoluções >=360px até >=768px-->

              <!--Inicio: Navbar para resoluções >= 992px-->

              <ul class="nav navbar-nav hidden-xs hidden-sm">
                <li id="item-complementar"><a class="hidden-xs hidden-sm" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/LOGO-NALUWE-BRANCA.png" alt=""></a></li>
                <li>
                  <div class="input-group pesquisa-home">
                    <div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Buscar">
                  </div>
                </li>
                <li id="item-complementar"><a href="#">Carrinho <span><img src="<?php echo get_template_directory_uri() ?>/assets/images/CARRINHO.png" alt=""></span></a></li>
              </ul>
              <!--Fim: Navbar para resoluções >=360px até >=768px-->

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
      </div>
    </header>
