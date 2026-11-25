<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank\AuthorisationSingleResource;

/**
 * BankAuthorisationSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Bank\Authorisation $bank_authorisations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_authorisations' => $value instanceof \stdClass ? $this->bank_authorisations = new \GoCardlessSDK\DTOs\Bank\Authorisation($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
