<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\NegativeBalanceLimit\MultiResource;

/**
 * NegativeBalanceLimitMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\NegativeBalanceLimit\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\NegativeBalanceLimit\MultiResource\Response\BalanceLimitsCollection $negative_balance_limits;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\NegativeBalanceLimit\PaginationMeta($value) : parent::assignMember($name, $value),
            'negative_balance_limits' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->negative_balance_limits = new \GoCardlessSDK\Collections\NegativeBalanceLimit\MultiResource\Response\BalanceLimitsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\NegativeBalanceLimit::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
