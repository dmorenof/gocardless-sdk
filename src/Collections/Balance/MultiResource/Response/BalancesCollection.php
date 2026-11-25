<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Balance\MultiResource\Response;

final class BalancesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Balance\MultiResource\Response\BalancesDTO::class;
}
