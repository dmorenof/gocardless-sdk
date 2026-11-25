<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Mandate;

/**
 * Mandate PDFs
 *
 * Mandate PDFs allow you to easily display [scheme-rules compliant](https://docs.gocardless.com/docs/api-reference/compliance-requirements) Direct Debit mandates to your customers.
 */
final class Pdf extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The date and time at which the `url` will expire (10 minutes after the original request).
     * Format: date-time
     */
    public string $expires_at;
    /**
     * The URL at which this mandate PDF can be viewed until it expires at the date and time specified by `expires_at`. You should not store this URL or rely on its structure remaining the same.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => is_string($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
