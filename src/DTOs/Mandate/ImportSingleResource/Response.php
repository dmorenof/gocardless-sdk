<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate\ImportSingleResource;

/**
 * MandateImportSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Mandate\Import $mandate_imports;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_imports' => $value instanceof \stdClass ? $this->mandate_imports = new \GoCardlessSDK\DTOs\Mandate\Import($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
