<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Creditor\SingleResource;

/**
 * CreditorSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Creditor $creditors;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditors' => $value instanceof \stdClass ? $this->creditors = new \GoCardlessSDK\DTOs\Creditor($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
