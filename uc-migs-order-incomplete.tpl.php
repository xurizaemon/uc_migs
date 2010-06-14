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
  <p>
    An error has occurred during payment.  View the response below and either re-try your order with another method or contact us for help.
  </p>
  <ul>
    <li>Error: <strong><?php print $response_message ; ?></strong></li>
  </ul>
  <p><?php print l('View your shopping cart to attempt payment again.', 'cart') ; ?></p>
</div>