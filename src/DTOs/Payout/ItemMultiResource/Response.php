<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payout\ItemMultiResource;

/**
 * PayoutItemMultiResourceResponse
 *
 * A list of payout items
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payout\ItemPaginationMeta $meta;
    public \GoCardlessSDK\Collections\Payout\ItemMultiResource\Response\PayoutItemsCollection $payout_items;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Payout\ItemPaginationMeta($value) : parent::assignMember($name, $value),
            'payout_items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payout_items = new \GoCardlessSDK\Collections\Payout\ItemMultiResource\Response\PayoutItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Payout\Item::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
