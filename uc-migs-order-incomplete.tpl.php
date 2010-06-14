<?php
/**
 * Template file for incomplete MIGS orders.
 *
 * Completed orders are not themeable in the payment module; you
 * need to theme the Ubercart order completion page instead.
 *
 * Template specific variables:
 *  'response_message' - message derived from error code
 *  'response_code'    - code returned from VPC
 *  'message'          - message as returned via $_GET['vpc_Message']
 */
 ?>
<div class="uc-migs-order-incomplete">
<?php if ( $response_message != 'Order already completed.') : ?>
  <p>
     Sorry, your order (ID #<?php print $order_info ;?>) couldn't be processed for the following reason:
  </p>
  <ul>
    <li>Error: <strong><?php print $response_message ; ?></strong></li>
  </ul>
  <p>
    You may wish to re-try your order with another payment method, or contact us for help.
  </p>
  <p>
    <?php print l('View your shopping cart to attempt payment again.', 'cart') ; ?>
  </p>
<?php else : ?>
  <p>
    It looks like your order (ID #<?php print $order_info ; ?>) has
    been completed already, but somehow you've reloaded the order 
    confirmation page. This may not be a problem!
  </p>
  <p>
    You might just need to check the mailbox you used to place the
    order for further instructions, or contact the site administrator
    directly.
  </p>
  <p>
    <?php print theme('item_list', array( l('Log in or visit your account page.', 'user'), l('View your shopping cart.', 'cart'))); ?>
  </p>
<?php endif ; ?>
</div>