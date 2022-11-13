=== Title & Descriptions ===

title : IDPay for Easy Digital Downloads (EDD)
Tags: idpay, easy digital downloads, download, edd, digital downloads, آیدی پی
Stable tag: 2.2.0
Tested up to: 6.0.2
Contributors: MimDeveloper.Tv (Mohammad-Malek), imikiani, meysamrazmi, vispa
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

After installing and enabling this plugin, your customers can pay through IDPay gateway.
For doing a transaction through IDPay gateway, you must have an API Key. You can obtain the API Key by going to your [dashboard](https://idpay.ir/dashboard/web-services) in your IDPay [account](https://idpay.ir/user).

== Installation ==

0. After creating a Web Service on https://idpay.ir and getting an API Key, follow this instruction:
1. Activate plugin IDPay for Easy Digital Downloads.
2. Go to Downloads > Settings > Payment Gateways.
3. Check "IDPay" option in the Payment Gateways section.
4. Enter your API Key in "IDPay payment gateway" section.

* If you need to use this plugin in Test mode, Select the "Sandbox" checkbox.

== Changelog ==

== 2.2.1, Nov 13, 2022 ==
* Tested Up With Wordpress 6.1 And Easy Digital Downloads Plugin 3.1.0.1

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
* Develope release
