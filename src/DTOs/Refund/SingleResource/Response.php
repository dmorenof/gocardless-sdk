<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Refund\SingleResource;

/**
 * RefundSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Refund $refunds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'refunds' => $value instanceof \stdClass ? $this->refunds = new \GoCardlessSDK\DTOs\Refund($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
