<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
if (!class_exists('WooCommerce')) {
    echo "<div class='notice'>" . esc_html__('Warning: Woocommerce is not activated', 'woocommerce-currency-switcher') . "</div>";
    return;
}
global $WOOCS;
$currencies = $WOOCS->get_currencies();
//***
if (isset($exclude)) {
    $exclude_string = $exclude;
    $exclude = explode(',', $exclude);
} else {
    $exclude_string = "";
    $exclude = array();
}
//***
if (!isset($current_currency)) {
    $current_currency = $WOOCS->current_currency;
}

//***

if (!isset($precision)) {
    $precision = 2;
}
?>

<div class="woocs_rates_shortcode">

    <?php if (!empty($currencies)): ?>
        <select class="woocs_rates_current_currency" data-precision="<?php echo $precision ?>" data-exclude="<?php echo $exclude_string ?>">
            <?php
            if (!empty($currencies)) {
                foreach ($currencies as $key => $c) {

                    if (isset($c['hide_on_front']) AND $c['hide_on_front']) {
                        continue;
                    }

                    if (in_array($key, $exclude)) {
                        continue;
                    }
                    ?>
                    <option <?php selected($current_currency, $key) ?> value="<?php echo $key ?>"><?php printf(esc_html__('1 %s is', 'woocommerce-currency-switcher'), $c['name']) ?></option>
                    <?php
                }
            }
            ?>
        </select><br />

                         <div class="woot-data-table" id="woocs-currencies-options">

                            <div class="scrollbar-external_wrapper">
                                <div class="scrollbar-external">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th><?php echo __('Flag', 'woocommerce-currency-switcher') ?></th>
                                                <th><?php echo __('Currency', 'woocommerce-currency-switcher') ?></th>
                                                <th><?php echo __('Rate', 'woocommerce-currency-switcher') ?></th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th><?php echo __('Flag', 'woocommerce-currency-switcher') ?></th>
                                                <th><?php echo __('Currency', 'woocommerce-currency-switcher') ?></th>
                                                <th><?php echo __('Rate', 'woocommerce-currency-switcher') ?></th>

                                            </tr>
                                        </tfoot>
                                        <tbody id="woocs_list">
                                            <?php foreach ($currencies as $key => $c) : ?>
                                            <?php
                                            if (isset($c['hide_on_front']) AND $c['hide_on_front']) {
                                                   continue;
                                            }
                                            if ($key == $current_currency OR in_array($key, $exclude)) {
                                                continue;
                                            }
                                           ?>                                           
                                            <tr>
                                                <td>                    
                                                    <?php if (!empty($c['flag'])): ?>
                                                        <img class="woocs_currency_rate_flag" src="<?php echo $c['flag'] ?>" alt="<?php echo $c['name'] ?>" />
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <strong><?php echo $key ?></strong>
                                                </td>
                                                <td>
                                                <?php
                                                    $rate = $currencies[$current_currency]['rate'];
                                                    if (!$rate OR $rate == 0) {
                                                        $rate = 1;
                                                    }
                                                    $v = $c['rate'] / $rate;
                                                    echo number_format($v, intval($precision),$this->decimal_sep, '');
                                                ?>                                                    
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="external-scroll_wrapper">
                                <div class="external-scroll_x">
                                    <div class="scroll-element_outer">
                                        <div class="scroll-element_size"></div>
                                        <div class="scroll-element_track"></div>
                                        <div class="scroll-bar"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>       
        
        
        
        
        
        
    <?php endif; ?>

</div>

