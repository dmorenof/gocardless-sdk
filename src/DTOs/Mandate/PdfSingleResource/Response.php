<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate\PdfSingleResource;

/**
 * MandatePdfSingleResourceResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Mandate\Pdf $mandate_pdfs;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate_pdfs' => $value instanceof \stdClass ? $this->mandate_pdfs = new \GoCardlessSDK\DTOs\Mandate\Pdf($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
