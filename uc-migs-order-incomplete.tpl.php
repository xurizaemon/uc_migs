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
    An error has occurred during payment.  View the response below and either re-try your order with another method or contact us for help.
  </p>
  <ul>
    <li>Error: <strong><?php print $response_message ; ?></strong></li>
  </ul>
  <p><?php print l('View your shopping cart to attempt payment again.', 'cart') ; ?></p>
<?php else : ?>
  <p>
    It looks like your order has been completed already, but somehow 
    you've reloaded the order confirmation page. This may not be a problem!
  </p>
  <p>
    You might just need to check the mailbox you used to place the
    order for further instructions, or contact the site administrator
    directly.
  </p>
  <p><?php print theme('item_list', array( l('Log in or visit your account page.', 'user'), l('View your shopping cart.', 'cart'))); ?></p>
<?php endif ; ?>
</div>