<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\VerificationDetail;

/**
 * VerificationDetailLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the [creditor](https://docs.gocardless.com/docs/api-reference/creditor)
     * Example: "CR123"
     */
    public string $creditor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
