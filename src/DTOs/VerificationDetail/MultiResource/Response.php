<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\VerificationDetail\MultiResource;

/**
 * VerificationDetailMultiResourceResponse
 *
 * A list of verification details
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\VerificationDetail\PaginationMeta $meta;
    public \GoCardlessSDK\Collections\VerificationDetail\MultiResource\Response\VerificationDetailsCollection $verification_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\VerificationDetail\PaginationMeta($value) : parent::assignMember($name, $value),
            'verification_details' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->verification_details = new \GoCardlessSDK\Collections\VerificationDetail\MultiResource\Response\VerificationDetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\VerificationDetail::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
