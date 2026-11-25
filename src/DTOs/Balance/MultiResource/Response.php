<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Balance\MultiResource;

/**
 * BalanceMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Balance\MultiResource\Response\BalancesCollection $balances;
    public \GoCardlessSDK\DTOs\Balance\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Balance\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
