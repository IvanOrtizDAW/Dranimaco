<?php
/**
 * Skrill Cash / Invoice
 *
 * This gateway is used for Skrill Cash / Invoice.
 * Copyright (c) Skrill
 *
 * @class   Gateway_Skrill_ACI
 * @extends Skrill_Payment_Gateway
 * @package Skrill/Classes
 * @located at  /includes/gateways
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

/**
 * Class Gateway_Skrill_ACI
 */
class Gateway_Skrill_ACI extends Skrill_Payment_Gateway
{

    /**
     * Id
     *
     * @var string
     */
    public $id = 'skrill_aci';

    /**
     * Payment method
     *
     * @var string
     */
    public $payment_method = 'ACI';

    /**
     * Payment brand
     *
     * @var string
     */
    public $payment_brand = 'ACI';

    /**
     * Display logo per countries
     *
     * @var array
     */
    protected $logo_per_countries = array(
                                    'ARG' => array(
                                        'RedLink' => 'red-link.png',
                                        'Pago Facil' => 'pago-facil.png',
                                    ),
                                    'BRA' => array(
                                        'Boleto Bancario' => 'boleto-bancario.png',
                                    ),
                                    'CHL' => array(
                                        'Servi Pag' => 'servi-pag.png',
                                    ),
                                    'COL' => array(
                                        'Efecty' => 'efecty.png',
                                        'Davivienda' => 'davivienda.png',
                                        'Éxito' => 'exito.png',
                                        'Carulla' => 'carulla.png',
                                        'EDEQ' => 'edeq.png',
                                        'SurtiMax' => 'surtimax.png',
                                    ),
                                    'MEX' => array(
                                        'OXXO' => 'oxxo.png',
                                        'BBVA Bancomer' => 'bancomer_m.png',
                                        'Banamex' => 'banamex.png',
                                        'Banco Santander' => 'santander.png',
                                    ),
                                    'PER' => array(
                                        'Banco de Occidente' => 'banco-de-occidente.png',
                                    ),
                                    'URY' => array(
                                        'Redpagos' => 'red-pagos.png',
                                    ),
                                );

    /**
     * Payment method description
     *
     * @var string
     */
    public $payment_method_description = 'Argentina, Brazil, Chile, China, Columbia, Mexico, Peru, Uruguay';

    /**
     * Get payment title.
     *
     * @return string
     */
    public function get_title() 
    {
        return __('Cash/invoice', 'wc-skrill');
    }
}

$obj = new Gateway_Skrill_ACI();
