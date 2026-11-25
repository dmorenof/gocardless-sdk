<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payout\SingleResource;

/**
 * PayoutSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Payout $payouts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payouts' => $value instanceof \stdClass ? $this->payouts = new \GoCardlessSDK\DTOs\Payout($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
