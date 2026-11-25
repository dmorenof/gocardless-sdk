<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Subscription;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Subscription\UpcomingPaymentsDTO> */
final class UpcomingPaymentsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Subscription\UpcomingPaymentsDTO::class;
}
