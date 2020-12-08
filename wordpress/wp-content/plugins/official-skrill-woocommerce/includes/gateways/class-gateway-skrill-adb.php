<?php
/**
 * Skrill Direct Bank Transfer
 *
 * This gateway is used for Skrill Direct Bank Transfer.
 * Copyright (c) Skrill
 *
 * @class   Gateway_Skrill_ADB
 * @extends Skrill_Payment_Gateway
 * @package Skrill/Classes
 * @located at  /includes/gateways
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

/**
 * Class Gateway_Skrill_ADB
 */
class Gateway_Skrill_ADB extends Skrill_Payment_Gateway
{

    /**
     * Id
     *
     * @var string
     */
    public $id = 'skrill_adb';

    /**
     * Payment method
     *
     * @var string
     */
    public $payment_method = 'ADB';

    /**
     * Payment brand
     *
     * @var string
     */
    public $payment_brand = 'ADB';

    /**
     * Display logo per countries
     *
     * @var array
     */
    protected $logo_per_countries = array(
                                        'ARG' => array(
                                            'Banco Santander Rio' => 'santander-rio.png',
                                        ),
                                        'BRA' => array(
                                            'Banco Itau' => 'itau.png',
                                            'Banco do Brasil' => 'banco-do-brasil.png',
                                            'Banco Bradesco' => 'bradesco.png',
                                        ),
                                    );

    /**
     * Payment method description
     *
     * @var string
     */
    public $payment_method_description = 'Argentina, Brazil';

    /**
     * Get payment title.
     *
     * @return string
     */
    public function get_title() 
    {
        return __('Direct Bank Transfer', 'wc-skrill');
    }
}

$obj = new Gateway_Skrill_ADB();
