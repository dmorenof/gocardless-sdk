<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Payout\Item;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Payout\Item\TaxesDTO> */
final class TaxesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Payout\Item\TaxesDTO::class;
}
