<?php
/**
 * Skrill Paysafecard
 *
 * This gateway is used for Skrill Paysafecard.
 * Copyright (c) Skrill
 *
 * @class   Gateway_Skrill_PSC
 * @extends Skrill_Payment_Gateway
 * @package Skrill/Classes
 * @located at  /includes/gateways
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

/**
 * Class Gateway_Skrill_PSC
 */
class Gateway_Skrill_PSC extends Skrill_Payment_Gateway
{

    /**
     * Id
     *
     * @var string
     */
    public $id = 'skrill_psc';

    /**
     * Payment method logo
     *
     * @var string
     */
    public $payment_method_logo = 'psc.png';

    /**
     * Payment method
     *
     * @var string
     */
    public $payment_method = 'PSC';

    /**
     * Payment brand
     *
     * @var string
     */
    public $payment_brand = 'PSC';

    /**
     * Allowed countries
     *
     * @var array
     */
    protected $allowed_countries = array( 'ASM', 'AUT', 'BEL', 'CAN', 'HRV', 'CYP', 'CZE', 'DNK', 'FIN', 'FRA', 'DEU', 'GUM', 'HUN', 'IRL', 'ISL', 'ITA', 'LVA', 'LUX', 'MLT', 'MEX', 'NLD', 'MNP', 'NOR', 'POL', 'PRT', 'PRI', 'PRY', 'ROU', 'SVK', 'SVN', 'ESP', 'SWE', 'CHE', 'TUR', 'GBR', 'USA', 'VIR' );

    /**
     * Payment method description
     *
     * @var string
     */
    public $payment_method_description = 'American Samoa, Austria, Belgium, Canada,
        Croatia, Cyprus, Czech Republic, Denmark,
        Finland, France, Germany, Guam, Hungary, Iceland,
        Ireland, Italy, Latvia, Luxembourg, Malta,
        Mexico, Netherlands, Northern Mariana Islands,
        Norway, Paraguay, Poland, Portugal, Puerto Rico,
        Romania, Slovakia, Slovenia, Spain, Sweden,
        Switzerland, Turkey, United Kingdom, United
        States Of America and US Virgin Islands';

    /**
     * Get payment title.
     *
     * @return string
     */
    public function get_title() 
    {
        return __('Paysafecard', 'wc-skrill');
    }
}

$obj = new Gateway_Skrill_PSC();
