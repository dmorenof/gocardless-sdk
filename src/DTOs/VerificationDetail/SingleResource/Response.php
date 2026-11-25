<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\VerificationDetail\SingleResource;

/**
 * VerificationDetailSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\VerificationDetail $verification_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'verification_details' => $value instanceof \stdClass ? $this->verification_details = new \GoCardlessSDK\DTOs\VerificationDetail($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
