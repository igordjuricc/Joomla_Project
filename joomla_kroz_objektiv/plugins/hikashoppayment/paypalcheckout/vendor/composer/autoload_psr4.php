<?php


$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Sample\\' => array($vendorDir . '/paypal/paypal-checkout-sdk/samples'),
    'PayPalHttp\\' => array($vendorDir . '/paypal/paypalhttp/lib/PayPalHttp'),
    'PayPalCheckoutSdk\\' => array($vendorDir . '/paypal/paypal-checkout-sdk/lib/PayPalCheckoutSdk'),
);