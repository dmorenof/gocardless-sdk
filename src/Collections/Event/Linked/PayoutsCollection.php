<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Event\Linked;

final class PayoutsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Payout::class;
}
