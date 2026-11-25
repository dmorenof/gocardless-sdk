<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank;

/**
 * Bank Details Lookups
 *
 * Look up the name and reachability of a bank account.
 */
final class DetailsLookup extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'available_debit_schemes',
        'bank_name',
        'bic',
        'payer_name_verification_result',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Array of [schemes](https://docs.gocardless.com/docs/api-reference/mandate) supported for this bank account. This will be an empty array if the bank account is not reachable by any schemes.
     */
    public \GoCardlessSDK\Collections\Bank\DetailsLookup\DebitSchemesCollection $available_debit_schemes;
    /**
     * The name of the bank with which the account is held (if available).
     */
    public ?string $bank_name;
    /**
     * ISO 9362 SWIFT BIC of the bank with which the account is held.
     *
     * <p class="notice">Even if no BIC is returned for an account, GoCardless may still be able to collect payments from it - you should refer to the <code>available_debit_schemes</code> attribute to determine reachability.</p>
     */
    public ?string $bic;
    public \GoCardlessSDK\Enums\Bank\DetailsLookupPayerNameVerificationResult $payer_name_verification_result;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'bic' => $value === null || is_string($value) ? $this->bic = $value : parent::assignMember($name, $value),
            'payer_name_verification_result' => is_string($value) ? $this->payer_name_verification_result = \GoCardlessSDK\Enums\Bank\DetailsLookupPayerNameVerificationResult::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
