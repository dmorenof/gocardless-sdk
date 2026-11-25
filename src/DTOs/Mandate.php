<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Mandates
 *
 * Mandates represent the Direct Debit mandate with a [customer](https://docs.gocardless.com/docs/api-reference/customer).
 *
 * GoCardless will notify you via a [webhook](https://docs.gocardless.com/docs/api-reference/webhooks) whenever the status of a mandate changes.
 */
final class Mandate extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \GoCardlessSDK\Enums\Mandate\AuthorisationSource $authorisation_source;
    public \GoCardlessSDK\DTOs\Mandate\ConsentParameters $consent_parameters;
    public \GoCardlessSDK\Enums\Mandate\ConsentType $consent_type;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\Mandate\FundsSettlement $funds_settlement;
    /**
     * Unique identifier, beginning with "MD". Note that this prefix may not apply to mandates created before 2016.
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Mandate\Links $links;
    public \GoCardlessSDK\Enums\Mandate\MandateType $mandate_type;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * The earliest date that can be used as a `charge_date` on any newly created payment for this mandate. This value will change over time.
     * Format: date
     */
    public ?string $next_possible_charge_date;
    /**
     * If this is an ACH mandate, the earliest date that can be used as a
     * `charge_date` on any newly created payment to be charged through standard
     * ACH, rather than Faster ACH. This value will change over time.
     *
     * It is only present in the API response for ACH mandates.
     * Format: date
     */
    public ?string $next_possible_standard_ach_charge_date;
    /**
     * Boolean value showing whether payments and subscriptions under this mandate require approval via an automated email before being processed.
     */
    public bool $payments_require_approval;
    /**
     * Unique reference. Different schemes have different length and [character set](https://docs.gocardless.com/docs/api-reference/character-sets) requirements. GoCardless will generate a unique reference satisfying the different scheme requirements if this field is left blank.
     */
    public ?string $reference;
    /**
     * <a name="mandates_scheme"></a>Bank payment scheme to which this mandate and associated payments are submitted. Can be supplied or automatically detected from the customer's bank account.
     */
    public ?string $scheme;
    public \GoCardlessSDK\Enums\Mandate\Status $status;
    /**
     * [Timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times) recording when this mandate was verified.
     * Format: date-time
     */
    public ?string $verified_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorisation_source' => is_string($value) ? $this->authorisation_source = \GoCardlessSDK\Enums\Mandate\AuthorisationSource::from($value) : parent::assignMember($name, $value),
            'consent_parameters' => $value instanceof \stdClass ? $this->consent_parameters = new \GoCardlessSDK\DTOs\Mandate\ConsentParameters($value) : parent::assignMember($name, $value),
            'consent_type' => is_string($value) ? $this->consent_type = \GoCardlessSDK\Enums\Mandate\ConsentType::from($value) : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'funds_settlement' => is_string($value) ? $this->funds_settlement = \GoCardlessSDK\Enums\Mandate\FundsSettlement::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Mandate\Links($value) : parent::assignMember($name, $value),
            'mandate_type' => is_string($value) ? $this->mandate_type = \GoCardlessSDK\Enums\Mandate\MandateType::from($value) : parent::assignMember($name, $value),
            'next_possible_charge_date' => $value === null || is_string($value) ? $this->next_possible_charge_date = $value : parent::assignMember($name, $value),
            'next_possible_standard_ach_charge_date' => $value === null || is_string($value) ? $this->next_possible_standard_ach_charge_date = $value : parent::assignMember($name, $value),
            'payments_require_approval' => is_bool($value) ? $this->payments_require_approval = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'scheme' => $value === null || is_string($value) ? $this->scheme = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\Mandate\Status::from($value) : parent::assignMember($name, $value),
            'verified_at' => $value === null || is_string($value) ? $this->verified_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
