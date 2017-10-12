<form class="cart area_cart" method="post" enctype="multipart/form-data" novalidate="novalidate">
  <?php $product = new WC_Product(get_the_ID()); ?>
  <input type="hidden" class="tm-epo-counter" name="tm-epo-counter" value="1">
  <input type="hidden" class="tc-add-to-cart" name="tcaddtocart" value="<?php echo $product->get_id() ?>">
  <input type="hidden" name="add-to-cart" value="<?php echo $product->get_id() ?>">

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
    <input type="number" step="1" min="1" max="" name="quantity" value="1"
           title="Qty" class="input-text qty text form-control" size="4">
    <!-- <select class="form-control">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select> -->
  </div>

  <button type="submit" class="btn btn-comprar single_add_to_cart_button" role="button">
    <i class="fa fa-shopping-cart icon-cart" aria-hidden="true"></i>
    Comprar
  </button>
</form>
