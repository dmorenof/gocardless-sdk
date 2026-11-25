<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate;

/**
 * MandateImportLinks
 *
 * Related resources
 */
final class ImportLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the associated creditor.
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
