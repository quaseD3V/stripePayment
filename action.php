<?php
namespace action;

use Stripe\Terminal\Location;
require 'vendor/autoload.php';
//   
\Stripe\Stripe::setApiKey('put your sk_stripe here');
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
