<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\BillingRequest\InstalmentsWithScheduleStringable;

final class AmountsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Payment\AnyOfAmountStringable::class;
}
