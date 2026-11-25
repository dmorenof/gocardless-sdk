<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource;

/**
 * PayerAuthorisationSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\PayerAuthorisation $payer_authorisations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payer_authorisations' => $value instanceof \stdClass ? $this->payer_authorisations = new \GoCardlessSDK\DTOs\PayerAuthorisation($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
