<?php

# Create a preference object
$preference = new MercadoPago\Preference();
# Create an item object
$item = new MercadoPago\Item();
$item->id = "1234";
$item->title = "Paquete Individual";
$item->quantity = 6;
$item->currency_id = "PEN";
$item->unit_price = 100;
# Create a payer object
$payer = new MercadoPago\Payer();
$payer->email = "luismiguel.reyes@orbis.com.pe";
# Setting preference properties
$preference->items = [$item];
$preference->payer = $payer;
$preference->back_urls = [
    'failure' => 'http://localhost/integracion-mercadopago'
];
# Save and posting preference
$preference->save();
