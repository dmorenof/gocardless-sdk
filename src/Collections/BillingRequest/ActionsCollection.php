<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\BillingRequest;

final class ActionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\BillingRequest\ActionsDTO::class;
}
