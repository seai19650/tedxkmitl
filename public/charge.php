<?php
/**
 * Created by PhpStorm.
 * User: zartr
 * Date: 3/6/2017
 * Time: 7:43 PM
 */
require_once dirname(__FILE__).'/omise-php/lib/Omise.php';
define('OMISE_PUBLIC_KEY', 'pkey_test_577rpjrv4ksiu89h2w9');
define('OMISE_SECRET_KEY', 'skey_test_577rpkjqc05ar6wd6ij');

$charges = OmiseCharge::retrieve();
$charge = OmiseCharge::create(array(
    'amount' => 350000,
    'currency' => 'thb',
    'card' => $charges->id
));