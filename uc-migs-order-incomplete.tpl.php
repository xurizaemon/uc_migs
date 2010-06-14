<?php
/**
 * Template file for incomplete MIGS orders.
 *
 * Completed orders are not themeable in the payment module; you
 * need to theme the Ubercart order completion page instead.
 *
 */
 ?>
<div class="uc-migs-order-incomplete">
  <p>
    An error has occurred during payment.  View the response below and either re-try your order with another method or contact us for help.
  </p>
  <ul>
    <li>Response description: <strong><?php print check_plain($response_message) ; ?></strong></li>
    <li>Payment gateway message: <strong><?php print check_plain($message) ; ?></strong></li>
    <li>Response code: <strong><?php print check_plain($response_code); ?></strong></li>
  </ul>
  <p><?php print l('View your shopping cart to attempt payment again.', 'cart') ; ?></p>
</div>