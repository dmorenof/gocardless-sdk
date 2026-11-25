<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\NegativeBalanceLimit\MultiResource\Response;

final class BalanceLimitsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\NegativeBalanceLimit::class;
}
