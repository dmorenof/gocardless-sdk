<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Customer\MultiResource\Response;

final class CustomersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Customer::class;
}
