<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\TransferredMandate\SingleResource;

/**
 * TransferredMandateSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\TransferredMandate $transferred_mandates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'transferred_mandates' => $value instanceof \stdClass ? $this->transferred_mandates = new \GoCardlessSDK\DTOs\TransferredMandate($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
