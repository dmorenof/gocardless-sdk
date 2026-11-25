<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Creditors
 *
 * Each [payment](https://docs.gocardless.com/docs/api-reference/payment) taken through the API is linked to a "creditor", to whom the payment is then paid out. In most cases your organisation will have a single "creditor", but the API also supports collecting payments on behalf of others.
 *
 * Currently, for Anti Money Laundering reasons, any creditors you add must be directly related to your organisation.
 */
final class Creditor extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The first line of the creditor's address.
     */
    public ?string $address_line1;
    /**
     * The second line of the creditor's address.
     */
    public ?string $address_line2;
    /**
     * The third line of the creditor's address.
     */
    public ?string $address_line3;
    /**
     * Prefix for the bank reference of payouts sent to this creditor. For instance, if
     * the creditor's `bank_reference_prefix` was `ACME`, the bank reference of a payout
     * sent to that creditor could be `ACME-8G7Q8`.
     *
     * This prefix is also used for refunds in EUR and GBP.
     *
     */
    public string $bank_reference_prefix;
    /**
     * Boolean indicating whether the creditor is permitted to create refunds.
     */
    public bool $can_create_refunds;
    /**
     * The city of the creditor's address.
     */
    public ?string $city;
    /**
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     */
    public ?string $country_code;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\Creditor\CreditorType $creditor_type;
    /**
     * Boolean value indicating whether creditor has the [Custom Payment Pages](https://hub.gocardless.com/s/article/Custom-payment-pages) functionality enabled.
     */
    public bool $custom_payment_pages_enabled;
    public \GoCardlessSDK\Enums\Creditor\FxPayoutCurrency $fx_payout_currency;
    /**
     * Unique identifier, beginning with "CR".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Creditor\Links $links;
    /**
     * URL for the creditor's logo, which may be shown on their payment pages.
     */
    public ?string $logo_url;
    /**
     * Boolean value indicating whether creditor has the [Mandate Imports](https://docs.gocardless.com/docs/api-reference/mandate-import) functionality enabled.
     */
    public bool $mandate_imports_enabled;
    /**
     * Boolean value indicating whether the organisation is responsible for sending all customer notifications (note this is separate from the functionality described [here](https://docs.gocardless.com/docs/tutorials/handling-customer-notifications)). If you are a partner app, and this value is true, you should not send notifications on behalf of this organisation.
     */
    public bool $merchant_responsible_for_notifications;
    /**
     * The creditor's trading name.
     */
    public string $name;
    /**
     * The creditor's postal code.
     */
    public ?string $postal_code;
    /**
     * The creditor's address region, county or department.
     */
    public ?string $region;
    /**
     * An array of the scheme identifiers this creditor can create mandates against.
     *
     * The support address, `phone_number` and `email` fields are for customers to contact the merchant for support purposes. They must be displayed on the payment page, please see our [compliance requirements](https://docs.gocardless.com/docs/api-reference/compliance-requirements) for more details.
     */
    public \GoCardlessSDK\Collections\Creditor\SchemeIdentifiersCollection $scheme_identifiers;
    public \GoCardlessSDK\Enums\Creditor\VerificationStatus $verification_status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1' => $value === null || is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_line3' => $value === null || is_string($value) ? $this->address_line3 = $value : parent::assignMember($name, $value),
            'bank_reference_prefix' => is_string($value) ? $this->bank_reference_prefix = $value : parent::assignMember($name, $value),
            'can_create_refunds' => is_bool($value) ? $this->can_create_refunds = $value : parent::assignMember($name, $value),
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'creditor_type' => is_string($value) ? $this->creditor_type = \GoCardlessSDK\Enums\Creditor\CreditorType::from($value) : parent::assignMember($name, $value),
            'custom_payment_pages_enabled' => is_bool($value) ? $this->custom_payment_pages_enabled = $value : parent::assignMember($name, $value),
            'fx_payout_currency' => is_string($value) ? $this->fx_payout_currency = \GoCardlessSDK\Enums\Creditor\FxPayoutCurrency::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Creditor\Links($value) : parent::assignMember($name, $value),
            'logo_url' => $value === null || is_string($value) ? $this->logo_url = $value : parent::assignMember($name, $value),
            'mandate_imports_enabled' => is_bool($value) ? $this->mandate_imports_enabled = $value : parent::assignMember($name, $value),
            'merchant_responsible_for_notifications' => is_bool($value) ? $this->merchant_responsible_for_notifications = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'verification_status' => is_string($value) ? $this->verification_status = \GoCardlessSDK\Enums\Creditor\VerificationStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
