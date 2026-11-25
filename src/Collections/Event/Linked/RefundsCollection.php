<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Event\Linked;

final class RefundsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Refund::class;
}
