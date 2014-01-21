<?php

/**
 * @file
 * Template file for Commerce Order UI Improved
 */

?>

<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <table class="commerce-order-customer-information">
      <thead>
        <tr>
          <th>Ship to:</th>
          <th>Bill to:</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td>
            <div class="order-number">Order Number: <?php print render($content['order_number']); ?></div>
            <div class="order-email">Order Email: <?php print render($content['customer_email']); ?></div>
            <div class="customer-id">Customer ID: <?php print render($content['customer_id']); ?></div>
          </td>
          <td>
            <div class="payment-method">Payment Method: <?php print render($content['payment_method']); ?></div>
            <div class="payment-remote-id">Payment Remote ID: <?php print render($content['payment_remote_id']); ?></div>
          </td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>
            <?php if (isset($content['commerce_customer_shipping'])): ?>
              <?php print render($content['commerce_customer_shipping']); ?>
            <?php endif; ?>
          </td>
          <td>
            <?php if (isset($content['commerce_customer_billing'])): ?>
              <?php print render($content['commerce_customer_billing']); ?>
            <?php endif;?>
          </td>
        </tr>
      </tbody>
    </table>
      <?php
        // Render the elements assigned to the left column.
        print render($content['commerce_line_items']);
        print render($content['commerce_order_total']);
        if (isset($content['commerce_message_messages_order_view'])) {
          print render($content['commerce_message_messages_order_view']);
        }
        // Render all additional, unknown elements.
        print render($content);
      ?>
  </div>
</div>
