<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\NegativeBalanceLimit\MultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\NegativeBalanceLimit> */
final class BalanceLimitsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\NegativeBalanceLimit::class;
}
