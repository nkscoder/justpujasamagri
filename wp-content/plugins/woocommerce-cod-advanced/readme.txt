=== WooCommerce COD Advanced Plugin ===
Contributors: aheadzen
Tags: woocommerce, cod, cash on delivery,cod advanced, minimum amount
Requires at least : 3.0.0
Tested up to: 4.3
Stable tag: 1.0.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Cash On Delivery - advanced options like hide COD payment while checkout if minimum amount, extra charges if minimum amount and round up the total order amount.

== Description ==

<h4>Features :</h4>
<ul>
<li>COD advanced options. </li>
<li>Hide COD payment while checkout if minimum amount.</li>
<li>Extra charges if minimum amount.</li>
<li>Round up the total order amount.</li>
<li>Round up factor of 5/10/50/100.</li>
<li>Postal/Pin code to restrict the COD.</li>
<li>Add the Postal/Pin code and matched pin code user will not display the COD on checkout page.</li>
<li>Exclude Product Category to hide COD if excluded category product is in your cart.</li>
<li>Country to restrict the COD.</li>
<li>States/Provinces to restrict the COD.</li>
<li>City to restrict the COD.</li>
<li>Virtual and Digital products type to restrict the COD.</li>
</ul>


== Installation ==
1. Unzip and upload plugin folder to your /wp-content/plugins/ directory  OR Go to wp-admin > plugins > Add new Plugin & Upload plugin zip.
2. Go to wp-admin > Plugins(left menu) > Activate the plugin
3. See the plugin option under woocommerce > Settings > Checout > Cash on Delivery

== Screenshots ==
1. Plugin Activation
2. Plugin Settings
3. Effect on checkout page


== Changelog ==


= 1.0.0 =
* Fresh Public Release. 


= 1.0.1 =
* Postal/Pin code option added to display COD on checkout page.
 -- so you should add the pin code and matched pin code user will not display the COD on checkout page.
* Exclude Product Category to hide COD if excluded category product is in your cart.


= 1.0.2 =
* Hide COD for maximum cart total amount - Option added.


= 1.0.3 =
* Country to restrict the COD.
* States/Provinces to restrict the COD.
* City to restrict the COD.



= 1.0.4 =
* Display the COD for specific countries or other countries option like (include country or exclude country).
* Display the COD for specific states or other states option like (include states or exclude states).
* Display the COD for specific cities or other cities option like (include cities or exclude cities).
* Display the COD for specific postal code or other postal code option like (include postal code or exclude postal code).


= 1.0.5 =
* Checkout page - on change of country, state , city or pincode -- COD advanced plugin condition not working - Error SOLVED


= 1.0.6 =
* PHP syntax  - Error SOLVED


= 1.0.7 =
* Added New COD icon for checkout page
* added option to show/hide COD icon from settings.


= 1.0.8 =
* Display warnings - Solved.


= 1.0.9 =
* New option added to disable the COD payment option for virtual or digital product selected in the cart.
* Display message for COD disabled condition is applied. It will display the message as per you have inserted in the input box.


= 1.0.10 =
* On checkout pgae if pincode/address not match with your shopping and cod is hidden, message display.
* Pincode checking problem - Solved.

= 1.2.0 =
* For wooCommerce version : 2.4.5, some error on address change for shipping. Now Solved.

= 1.2.1 =
* Added COD extra charge display for order reivew and emails.


= 1.2.3 =
* Added COD extra charge display for order reivew and emails.

= 1.2.4 =
* Added COD extra charge Message so user can change message as per they want.

= 1.2.5 =
* Notice: Undefined variable: zone_fields in ......... woocommerce_advanced_cod.php on line 159 -- ERROR Solved

= 1.2.6 =
* Localization added.

= 1.2.7 =
* Localization added method changed.
