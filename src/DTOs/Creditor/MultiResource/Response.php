<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Creditor\MultiResource;

/**
 * CreditorMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\Creditor\MultiResource\Response\CreditorsCollection $creditors;
    public \GoCardlessSDK\DTOs\Creditor\PaginationMeta $meta;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->creditors = new \GoCardlessSDK\Collections\Creditor\MultiResource\Response\CreditorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Creditor::class)) : parent::assignMember($name, $value),
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\Creditor\PaginationMeta($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
