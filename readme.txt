=== IDPay for Easy Digital Downloads (EDD) ===
Contributors: majidlotfinia, jazaali, imikiani, vispa, mnbp1371,MimDeveloper.Tv (Mohammad-Malek)
Tags: idpay, easy digital downloads, download, edd, digital downloads, آیدی پی
Stable tag: 2.2.0
Tested up to: 6.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

IDPay payment gateway for Easy Digital Downloads

== Description ==

After installing and enabling this plugin, you have the ability of selling files, music, picture, book via [Easy Digital Downloads](https://wordpress.org/plugins/easy-digital-downloads) and [IDPay](https://idpay.ir) Payment gateway.

You can obtain an API Key by going to your [dashboard](https://idpay.ir/dashboard/web-services) in your IDPay [account](https://idpay.ir/user).

== Installation ==

After creating a web service on https://idpay.ir and getting an API Key, follow this instruction:

1. Activate plugin IDPay for Easy Digital Downloads.
2. Go to Downloads > Settings > Payment Gateways.
3. Check "IDPay" option in the Payment Gateways section.
4. Enter your API Key in "IDPay payment gateway" section.

After that, if a customer is going to purchase a downloadable product which is created by Easy Digital Downloads, The IDPay payment gateway will appear and she can pay with it.

== Changelog ==

= 2.2.0, June 18, 2022 =
* First Official Release
* Tested Up With Wordpress 6.0 And Easy Digital Downloads Plugin 3.1.0.1
* Check Double Spending Correct
* Check Does Not Xss Attack Correct

= 2.1.3, April 25, 2021 =
* Fix plugin header bug.

= 2.1.2, October 19, 2020 =
* Support GET method in Callback.

= 2.1.1, August 16, 2020 =
* Fix bug.

= 2.1.0, July 15, 2020 =
* Fix bug.
* Clean code.

= 2.0.3, October 02, 2019 =
* Fix a bug which caused notice output in payment verification

= 2.0.2, September 02, 2019 =
* Address a problem is payment cancellation

= 2.0.1, May 08, 2019 =
* Try to connect to the gateway more than one time.
* Store hashed card number.
* Sanitize text fields.

= 2.0, February 10, 2019 =
* Published for web service version 1.1.
* Increase timeout of wp_safe_remote_post().
* Check Double-Spending.

= 1.2.1, December 11, 2018 =
* Load text domain.
* Check if 'ABSPATH' is defined.

= 1.2, December 11, 2018 =
* Plugin translation

= 1.1, November 20, 2018 =
* Save card number returned by the gateway
* [Coding Standards](https://codex.wordpress.org/WordPress_Coding_Standards)
* Bux fix.
* Refactor some function and hook names.
* Use wp_safe_remote_post() instead of curl.
* PHP documentations.

= 1.0, September 30, 2018 =
* First Release