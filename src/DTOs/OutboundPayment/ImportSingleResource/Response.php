<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\ImportSingleResource;

/**
 * OutboundPaymentImportSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\OutboundPayment\Import $outbound_payment_imports;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'outbound_payment_imports' => $value instanceof \stdClass ? $this->outbound_payment_imports = new \GoCardlessSDK\DTOs\OutboundPayment\Import($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
