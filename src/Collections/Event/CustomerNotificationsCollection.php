<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Event;

final class CustomerNotificationsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Event\CustomerNotificationsDTO::class;
}
