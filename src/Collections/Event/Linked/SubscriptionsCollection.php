<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Event\Linked;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Subscription> */
final class SubscriptionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Subscription::class;
}
