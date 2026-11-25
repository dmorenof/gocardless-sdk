<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment;

/**
 * OutboundPaymentImportLinks
 */
final class ImportLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the creditor who sends the outbound payments from the import.
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
