=== Skrill Official ===
Contributors: esphere techno corindo, skrill
Tags: credit cards, payment methods, Skrill, payment gateway
Requires at least: 4.3.1
Tested up to: 5.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Accept payments using cards, over 20 local payment methods and more than 80 banks via Skrill.

== Description ==

= Skrill Merchant On Boarding: =

https://www.youtube.com/watch?v=s34TCs3rIF4


Trusted by millions across the globe Skrill meets the needs of more than 156,000 businesses worldwide providing a convenient and secure way to send and receive money in nearly 200 countries and 40 currencies.

Our payments platform comes with an exclusive reduced fee offer of 0.9% on Debit Card/Prepaid Card/Credit Card (VISA, Mastercard, Maestro) transactions, and 0.5% fees on Rapid Transfer transactions.*
*Fees apply to new merchants only within restricted industry sectors. [Terms and conditions apply.](https://www.skrill.com/en/footer/terms-conditions/fees-reduction-promotion/)

What this module does for you:

* Free and quick setup
* Access credit cards and 100+ local payment solutions with 1 easy integration
* Recurring billing supported
* Take advantage of the Skrill multicurrency account, giving you access to 40+ currencies
* High-security standards and anti-fraud technology
* Seamless payment experience across mobile, tablet and desktop
* Connect with millions of Skrill account holders

Features:

* Additional payment options and control over how they are displayed
* Customisable gateway with embedded page and redirect functionality
* Instant settlement
* Enhanced reporting and transaction status viewing
* Refund capability within Woocommerce


What your customers will like:

* Easy ways to pay safely online – no sign-up required to make payments
* Convenient and immediate payments – pay with a bank account, or debit and credit cards without any hassle
* Multiple local payment options allowing customers to pay how they want
* Internationally recognised and trusted brand

Don't have an account? [Sign up for free today!](https://www.skrill.com/en/business/shopping-carts/woocommerce/)

== Installation ==

This section describes how to install the plugin and get it working.

Note: WooCommerce must be installed for this plugin to work.

1. Upload the content of "copy_this_to_root_folder_wordpress" to the root directory of your wordpress installation, or install the plugin through the WordPress plugins screen directly (by compressing in .zip file 'skrill-woocommerce' directory).
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Plugin Name screen to configure the merchant account
1. Navigate to Woocommerce->Settings->Checkout and select the payment method you wish to enable in the payment gateway section

== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

== Screenshots ==

1. This is screenshot 1 Payment using Skrill.
2. This is screenshot 2 Payment entering details.
3. This is screenshot 3 Payment successful.

== Upgrade Notice ==

Please deactivate the plugin before to update it. This will avoid any issue with mySQL database. 

== Changelog ==

= 1.0.36 =
* 2020.09.21
* Removed SEPA and Bitcoin as a supported payment methods
* Added new compatibilty (WordPress 5.5.1)
* Added new compatibilty (Woocommerce 4.4.1)
* Bug fix: replaced reference_id with transaction_id parameter

= 1.0.35 =
* 2020.06.12
* Adjusted changelog file structure
* Added new compatibility (WordPress 5.4.2)
* Added new compatibility (Woocommerce 4.2.0)
* Newly supported countries for PaysafeCard: Iceland and Paraguay
* Newly supported countries for PaysafeCash: Cyprus and Lithuania
* Bug fix: pay button always showing at Orders section in Woocommerce admin

= 1.0.34 =
* 2020.03.27
* Newly supported country for Rapid Transfer: Greece
* Removed American Express as a supported payment method
* Added new compatibility (Woocommerce 4.0.0)
* Added new compatibility (Woocommerce 4.0.1)

= 1.0.33 =
* 2020.02.12
* bug fix: add error message when WooCommerce Subscriptions not installed, but try reucring payment
* bug fix: missing amount parameter when recurring payments are active and buy non-recurring product
* bug fix: fatal error due to missing of amount parameter

= 1.0.32 =
* 2020.02.05
* NEW FEATURE: Recurring billing supported
* bug fix: remove "Show separately" field for all payment methods except Credit Cards, MasterCard, Visa and AMEX
* newly supported countries for Paysafecash: Belgium, Canada, Czech Republic, Denmark, France, Ireland, Luxembourg, Netherlands, Poland, Slovakia, Sweden, United Kingdom
* Added new compatibility (Woocommerce 3.8.1)
* Added new compatibility (Wordpress 5.3.2)

= 1.0.31 =
* 2019.12.09
* Added new compatibility (Wordpress 5.2.4)
* Added new compatibility (Wordpress 5.3.0)
* Added new compatibility (Woocommerce 3.7.1)
* Added new compatibility (Woocommerce 3.8.0)
* Fix bugs : undefined Index in class-skrill-payment-gateway.php
* New supported country for PaysafeCash : Switzerland

= 1.0.30 =
* 2019.10.16
* Added new compatibility (Wordpress 5.2.3)
* New supported country for PaysafeCash : Greece

= 1.0.29 =
* 2019.08.15
* Added new compatibility (Woocommerce 3.7.0)

= 1.0.28 =
* 2019.07.30
* Bug fix: make Astropay per country
* Added new compatibility (Woocommerce 3.6.5)
* Bug fix: iDeal payment method, solved title issue
* New supported countries for Rapid Transfer: Belgium, Bulgaria, Estonia, Latvia, Netherlands and USA

= 1.0.27 =
* 2019-06-28
* Added new compatibility (Wordpress 5.2.0)
* Added new compatibility (Wordpress 5.2.1)
* Added new compatibility (Woocommerce 3.6.3)
* Bug fix: Alipay available for customers from Great Britain
* Added new compatibility (Wordpress 5.2.2)
* Added new compatibility (Woocommerce 3.6.4)

= 1.0.26 =
* 2019-05-10
* Added new compatibility (Woocommerce 3.5.7)

= 1.0.25 =
* 2019-03-19
* Added new compatibility (Woocommerce 3.5.5)
* Added new compatibility (Woocommerce 3.5.6)
* Added new compatibility (Wordpress 5.1.0)
* Added new compatibility (Wordpress 5.1.1)

= 1.0.24 =
* 2019-01-30
* Bug fix: missing success message with Paysafecard and Paysafecash orders
* Added new compatibility (Woocommerce 3.5.3)
* Added new compatibility (Woocommerce 3.5.4)
* Added new compatibility (Wordpress 5.0.3)

= 1.0.23 =
* 2018-12-21
* Added new compatibility (Woocommerce 3.5.1)
* Added new compatibility (Woocommerce 3.5.2)
* Added new compatibility (Wordpress 5.0.1)

= 1.0.22 =
* 2018-11-15
* Added new payment method: Paysafecash
* Added new compatibility (Wordpress 4.9.8)
* Added new compatibility (Woocommerce 3.5.0)

= 1.0.21 =
* 2018-06-29
* Shop version compatible with wordpress 4.3.1 - 4.9.6 & woocommerce 2.4.10 - 3.4.3
* Added new compatibilty (Woocommerce 3.4.1)
* Added new compatibilty (Woocommerce 3.4.2)
* Added new compatibilty (Woocommerce 3.4.3)
* Added new compatibilty (Wordpress 4.9.6)
* Changed Sofort logo and name
* Fix bug: translation on payment widget

= 1.0.20 =
* 2018-04-13
* Added new compatibilty (Woocommerce 3.3.4)
* Added new compatibilty (Wordpress 4.9.4)
* Fix bug: Wrong redirect page after success payment and page refresh
* Fix bug: Missing error message when use worng Skrill e-mail for Skrill Account Settings
* Fix bug: Order details not show up on payment widget when use Woocommerce 2.x.xx

= 1.0.19 =
* 2018-03-03
* Shop version compatible with wordpress 4.3.1 - 4.9.2 & woocommerce 2.4.10 - 3.3.3
* Added new compatibilty (Woocommerce 3.3.3)
* Fix bug: missing supported country: Guadeloupe
* Move text "Supported Banks" to above the logo on "Direct Bank Transfer", "Manual Bank Transfer", and "Cash/invoice" payment method
* Fix bug: Wrong result message when paid with Paysafecard
* Fix bug: Remove Belau/Palau as supported country

= 1.0.18 =
* 2018-02-02
* Shop version compatible with wordpress 4.3.1 - 4.9.2 & woocommerce 2.4.10 - 3.2.6
* Added new compatibilty (Woocommerce 3.2.6)
* Added new compatibilty (Wordpress 4.9.2)
* Fix bug: can't show the shop menu configuration 

= 1.0.17 =
* 2017-12-22
* Shop version compatible with wordpress 4.3.1 - 4.9.1 & woocommerce 2.4.10 - 3.2.5
* Added new compatibilty (Woocommerce 3.2.5)
* Added new compatibilty (Wordpress 4.9)
* Change Info button content on payment widget

= 1.0.16 =
* 2017-12-01
* Shop version compatible with wordpress 4.3.1 - 4.9 & woocommerce 2.4.10 - 3.2.3
* Added new compatibilty (Woocommerce 3.2.3)
* Added new compatibilty (Wordpress 4.9)
* New logo for Sofort Banking

= 1.0.15 =
* 2017-11-03
* Shop version compatible with wordpress 4.3.1 - 4.8 & woocommerce 2.4.10 - 3.2.1
* Added new compatibilty (Woocommerce 3.2.1)
* Added Norway as supported country for Rapid Transfer
* Removed VISA Electron as separate payment method

= 1.0.14 =
* 2017-10-13
* Shop version compatible with wordpress 4.3.1 - 4.8 & woocommerce 2.4.10 - 3.1.0
* Added "Bitcoin" as payment method option
* Changed cancel URL

= 1.0.13 =
* 2017-10-06
* Shop version compatible with wordpress 4.3.1 - 4.8 & woocommerce 2.4.10 - 3.1.0
* Enable USA as supported country for Skrill Wallet, VISA, MasterCard and Paysafecard
* Fix bug : can not show order received page

= 1.0.12 =
* 2017-08-01
* Shop version compatible with wordpress 4.3.1 - 4.8 & woocommerce 2.4.10 - 3.1.0
* MAJOR UPDATE: Changed MQI and Refund URLs from moneybookers.com to skrill.com

= 1.0.11 =
* 2017-06-09
* Shop version compatible wordpress 4.3.1 - 4.8 & woocommerce 2.4.10 - 3.0.3
* New compatibility (Woocommerce 2.4.10 - 3.0.3)
* New compatibility (WordPress 4.3.1 - 4.8)
* Enable Peru as supported country for Astropay
* Change some payment method logo sizes
* Add United Kingdom as supported country for Alipay payment method
* Implement display message "Please check merchant ID or secret word" when do update order and the merchant typed wrong merchant ID or secret word

= 1.0.10 =
* 2017-04-11
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Version tracker - removed
* Rapid Transfer payment method - added new supported counties: Sweden, Finland, Denmark

= 1.0.09 =
* 2017-03-29
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Change order status Skrill - Payment Accepted to Completed
* Change order status Skrill - Not Verified to On-Hold
* Change order status Skrill - Suspected Fraud to On-Hold
* Remove skrill order status (Skrill - Payment Accepted, Skrill - Not Verified, Skrill - Suspected Fraud)
* Add notification at backend order details when order status is Not Verified or Suspected Fraud
* Add "Transaction Status Completed" with two options available Processing/Completed for accepted successful transactions

= 1.0.08 = 
* 2017-03-17 
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Fix bug: the plugin translation is not translated into all languages
* Change the fraud payment status to "Suspected fraud"
* Change the invalid credential payment status to "not verified"

= 1.0.07 =
* 2017-02-02 
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Implement direct bank transfer, manual bank transfer, cash / invoice, and unionpay
* Change fraud detection from using md5sig into using new hash from database
* Add invalid credential as a new payment status
* Validate if payment signature is not equals to generated signature, mark as invalid credential
* Fix bug : Double order notes if success payment
* Add icons for invalid credential and payment not verified status in backend order list

= 1.0.06 =
* 2017-01-26 
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Remove jcb, diners, and trusly payment method

= 1.0.05 =
* 2017-01-07 
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Implement auto update order status from status url
* Change behavior of payment to make user can pay order again even order already cancelled

= 1.0.04 =
* 2016-12-26 
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Change logic to handling status url when response is late

= 1.0.03 =
* 2016-12-21 
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Fix bug : payment status not automatically updated when response from status url is late
* Remove auto refund when fraud detected and change payment status to not verified
* Resize payment method logo

= 1.0.02 =
* 2016-12-13 
* Shop version compatible wordpress 4.3.1 - 4.7.3 & woocommerce 2.4.10 - 2.6.9
* Fix wrong notification message when changing skrill credential setting
* Fix additional information not show when use All Cards and Alternative Payment Methods
* Fix bug : api password and secret word is not md5 encrypted automatically
* Fix bug : detect fraud payment feature
* Hide api password and secret word when using inspection element
* Fix bug : images in payment method list is float to right when using different template
* Fix bug : icons in backend order list are not shown when using mozilla firefox

= 1.0.01 =
* 2015-10-10 
* Shop version compatible wordpress 4.3.1 - 4.6 & woocommerce 2.4.10 - 2.6.4
* Remove JCB and Diners payment methods and logos
* Rename 'Credit Card / Visa, Mastercard, AMEX, JCB, Diners' payment method to be 'Credit Cards'
* Change logo and name of Skrill Direct into Rapid Transfer
* Trigger refund only when MD5 signature does not match
* Show transaction ID at backend order detail
* Show email address of skrill account at backend order detail - when paid with skrill wallet method
* Implement log for debugging
* Add JCB and Diners payment methods
* Implement status_url to update order status instead off return_url
* Implement partial refund
* Implement refund status pending

= 1.0.0 =
* Initial and beta release










































