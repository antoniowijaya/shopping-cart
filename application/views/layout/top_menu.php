<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php echo anchor(base_url(), 'Shopping Cart', ['class'=>'navbar-brand']); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li><?php echo anchor(base_url(), 'Home'); ?></li>
      <?php if ($this->session->userdata('username')) { ?>
      <li><?php echo anchor('customer/payment_confirmation', 'Payment Confirmation'); ?></li>
      <li><?php echo anchor('customer/shopping_history', 'History'); ?></li>
      <?php } ?>
        <li>
            <?php 
                $text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
                $text_cart_url .= 'Inside Cart: '. $this->cart->total_items() .' items';
             ?> 
        <?php echo anchor('welcome/cart', $text_cart_url) ?>
        </li>
        <?php if ($this->session->userdata('username')) { ?>
        <li><div style="line-height:50px;">You Are : <?php echo $this->session->userdata('username'); ?></div></li>
        <li>
        <?php echo anchor('logout', 'Logout'); ?></li>
          <?php } else { ?>
        <li>
          <?php echo anchor('login', 'Login'); ?>
        </li>
        <?php } ?>
         </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
