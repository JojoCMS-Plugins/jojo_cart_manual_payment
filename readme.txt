The manual payment plugin allows orders to be placed and the customer to pay manually, usually via bank transfer or cheque.

The order is placed as per normal, and the order status is set to pending_payment. The customer is gmiven instructions on how to make payment, and is asked to use the order ID as a payment reference.

When the payment arrives, the admin person clicks a confirmation link within the original admin email, and this marks the order as complete. They can optionally email the customer at this stage to confirm that payment has been received. After this, the order can be dispatched manually.

Some customers will forget about the order and the payment will not arrive. The admin person may wish to follow up on these by emailing the customer. At present, there is no facility for an automated email after (say) 1 week, but this is a logical extension to this plugin.

This plugin requires the jojo_cart plugin.

IMPORTANT NOTE: Ensure that the "Manual Payment details" option contains some meaningful text. This text is used in the customer email, and on the thank you page. Without this text, the customer won't know how to make payment and the order will likely be lost.