<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2008 Harvey Kane <code@ragepank.com>
 * Copyright 2008 Michael Holt <code@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

/* Define the class for the cart */
if (!defined('Jojo_Cart_Class')) {
    define('Jojo_Cart_Class', Jojo::getOption('jojo_cart_class', 'jojo_plugin_jojo_cart'));
}

if (class_exists(Jojo_Cart_Class)) {
    call_user_func(array(Jojo_Cart_Class, 'setPaymentHandler'), 'jojo_plugin_jojo_cart_manual_payment');
}

$_options[] = array(
  'id'          => 'cart_manual_payment_instructions',
  'category'    => 'Cart',
  'label'       => 'Manual Payment details',
  'description' => 'Payment instructions for manual payments (eg bank account / postal address) for use on manual payments.',
  'type'        => 'textarea',
  'default'     => '',
  'options'     => '',
  'plugin'      => 'jojo_cart_manual_payment'
);

$_options[] = array(
  'id'          => 'cart_manual_payment_label',
  'category'    => 'Cart',
  'label'       => 'Manual Payment name',
  'description' => 'Name to display on the Payment Options list',
  'type'        => 'text',
  'default'     => 'Offline payment',
  'options'     => '',
  'plugin'      => 'jojo_cart_manual_payment'
);

$_options[] = array(
  'id'          => 'cart_manual_payment_description',
  'category'    => 'Cart',
  'label'       => 'Manual Payment Description',
  'description' => 'Short description to display on the Payment Options list',
  'type'        => 'text',
  'default'     => 'The order will be dispatched once payment has been made. To confirm the order and receive payment instructions, press continue.',
  'options'     => '',
  'plugin'      => 'jojo_cart_manual_payment'
);

