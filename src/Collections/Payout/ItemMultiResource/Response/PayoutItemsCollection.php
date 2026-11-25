<?php

declare(strict_types=1);

namespace GoCardlessSDK\Collections\Payout\ItemMultiResource\Response;

final class PayoutItemsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \GoCardlessSDK\DTOs\Payout\Item::class;
}
