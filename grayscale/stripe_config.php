<?php

//Stripe Checkout

require_once('./lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_BQokikJOvBiI2HlWgH4olfQ2",
  "publishable_key" => "pk_test_6pRNASCoBOKtIshFeQd4XMUh"
);

Stripe::setApiKey($stripe['secret_key']);
