<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Payout\Item;

final class TaxesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Payout\Item\TaxesDTO::class;
}
