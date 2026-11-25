<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use GoCardlessSDK\Configuration;
use GoCardlessSDK\GoCardlessAPISDK;
use GoCardlessSDK\GetParams\Payouts as PayoutsParams;
use GoCardlessSDK\Payouts;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['bearerAuth' => getenv('GOCARDLESS_ACCESS_TOKEN') ?: '']);
GoCardlessAPISDK::configure($configuration);

// `GoCardless-Version` is a required header of every call.
$payouts = Payouts::get(new PayoutsParams((object) ['GoCardlessVersion' => '2015-07-06', 'limit' => 25]));

echo json_encode($payouts), "\n";
