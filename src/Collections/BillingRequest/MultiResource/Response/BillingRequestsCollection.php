<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\BillingRequest\MultiResource\Response;

final class BillingRequestsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\BillingRequest\MultiResource\Response\BillingRequestsDTO::class;
}
