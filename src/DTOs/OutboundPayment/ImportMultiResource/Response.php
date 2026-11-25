<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment\ImportMultiResource;

/**
 * OutboundPaymentImportMultiResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\OutboundPayment\ImportPaginationMeta $meta;
    public \GoCardlessSDK\Collections\OutboundPayment\ImportMultiResource\Response\PaymentImportsCollection $outbound_payment_imports;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'meta' => $value instanceof \stdClass ? $this->meta = new \GoCardlessSDK\DTOs\OutboundPayment\ImportPaginationMeta($value) : parent::assignMember($name, $value),
            'outbound_payment_imports' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->outbound_payment_imports = new \GoCardlessSDK\Collections\OutboundPayment\ImportMultiResource\Response\PaymentImportsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\OutboundPayment\Import::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
