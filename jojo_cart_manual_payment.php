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

class JOJO_Plugin_jojo_cart_manual_payment extends JOJO_Plugin
{
    function getPaymentOptions()
    {
        global $smarty;
        $options = array();
        $options[] = array(
                'id' => 'manual_payment',
                'label' => "Offline payment - Pay by cheque or bank deposit",
                'html' => $smarty->fetch('jojo_cart_manual_payment_checkout.tpl')
                );
        $options = Jojo::applyFilter('jojo_cart_manual_payment:get_payment_options', $options);
        return $options;
    }

    /*
    * Determines whether this payment plugin is active for the current payment.
    */
    function isActive()
    {
        /* Look for a post variable specifying the test processor */
        return (Jojo::getFormData('handler', false) == 'manual_payment') ? true : false;
    }

    function process()
    {
        $receipt = array();
        $errors  = array();

        return array(
                    'success' => true,
                    'paid'    => false,
                    'receipt' => $receipt,
                    'errors'  => $errors,
                    'message' => Jojo::getOption('cart_manual_payment_instructions', 'We look forward to receiving your payment. Please refer to the website for payment details.')
                    );
    }
}