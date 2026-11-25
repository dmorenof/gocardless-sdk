<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Payout\ItemMultiResource\Response;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\GoCardlessSDK\DTOs\Payout\Item> */
final class PayoutItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Payout\Item::class;
}
