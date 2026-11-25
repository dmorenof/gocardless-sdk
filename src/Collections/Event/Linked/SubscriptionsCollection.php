<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Event\Linked;

final class SubscriptionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Subscription::class;
}
