<?php
namespace action;

use Stripe\Terminal\Location;
require 'vendor/autoload.php';
//   
\Stripe\Stripe::setApiKey('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');
$charge = \Stripe\Charge::create([
  'source' => $_POST['stripeToken'],
  'description' => 'New Song of New Age',
  'amount' => 250,
  'currency' => 'usd'
]);
session_start();
$_SESSION['token'] = $_POST['stripeToken'];
header('Location: dllink.php');

exit;
