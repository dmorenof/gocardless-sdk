<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\PayerAuthorisation;

/**
 * PayerAuthorisationMandate
 *
 * All details required for the creation of a [Mandate](https://docs.gocardless.com/docs/api-reference/mandate).
 */
final class Mandate extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * For ACH customers only. Required for ACH customers. A string containing the IP address of the payer to whom the mandate belongs (i.e. as a result of their completion of a mandate setup flow in their browser).
     *
     * Not required for creating offline mandates where `authorisation_source` is set to telephone or paper.
     *
     */
    public ?string $payer_ip_address;
    /**
     * Unique reference. Different schemes have different length and [character set](https://docs.gocardless.com/docs/api-reference/character-sets) requirements. GoCardless will generate a unique reference satisfying the different scheme requirements if this field is left blank.
     */
    public ?string $reference;
    /**
     * A bank payment scheme. Currently "ach", "autogiro", "bacs", "becs", "becs_nz", "betalingsservice", "faster_payments", "pad", "pay_to" and "sepa_core" are supported.
     * Example: "bacs"
     */
    public ?\GoCardlessSDK\Enums\PayerAuthorisation\Mandate\SchemeEnum $scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payer_ip_address' => $value === null || is_string($value) ? $this->payer_ip_address = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'scheme' => $value === null || is_string($value) ? $this->scheme = $value === null ? null : \GoCardlessSDK\Enums\PayerAuthorisation\Mandate\SchemeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
