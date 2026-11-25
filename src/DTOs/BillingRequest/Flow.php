<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * Billing Request Flows
 *
 * Billing Request Flows can be created to enable a payer to authorise a payment created for a scheme with strong payer
 * authorisation (such as open banking single payments).
 */
final class Flow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * URL for a GC-controlled flow which will allow the payer to fulfil the billing request
     */
    public string $authorisation_url;
    /**
     * (Experimental feature) Fulfil the Billing Request on completion of the flow (true by default). Disabling the auto_fulfil is not allowed currently.
     */
    public bool $auto_fulfil;
    /**
     * Timestamp when the flow was created
     * Format: date-time
     */
    public string $created_at;
    /**
     * Identifies whether a Billing Request belongs to a specific customer
     */
    public bool $customer_details_captured;
    /**
     * URL that the payer can be taken to if there isn't a way to progress ahead in flow, for example if the customer searches for a bank that doesn't exist or isn't supported on the scheme.
     */
    public ?string $exit_uri;
    /**
     * Timestamp when the flow will expire. Each flow currently lasts for 7 days.
     * Format: date-time
     */
    public string $expires_at;
    /**
     * Unique identifier, beginning with "BRF".
     */
    public string $id;
    /**
     * Sets the default language of the Billing Request Flow and the customer. [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) code.
     */
    public ?string $language;
    public \GoCardlessSDK\DTOs\BillingRequest\FlowLinks $links;
    /**
     * If true, the payer will not be able to change their bank account within the flow. If the bank_account details are collected as part of bank_authorisation then GC will set this value to true mid flow.
     *
     * You can only lock bank account if these have already been completed as a part of the billing request.
     *
     */
    public bool $lock_bank_account;
    /**
     * If true, the payer will not be able to change their currency/scheme manually within the flow. Note that this only applies to the mandate only flows - currency/scheme can never be changed when there is a specified subscription or payment.
     */
    public bool $lock_currency;
    /**
     * If true, the payer will not be able to edit their customer details within the flow. If the customer details are collected as part of bank_authorisation then GC will set this value to true mid flow.
     *
     * You can only lock customer details if these have already been completed as a part of the billing request.
     *
     */
    public bool $lock_customer_details;
    public \GoCardlessSDK\DTOs\BillingRequest\FlowPrefilledBankAccount $prefilled_bank_account;
    public \GoCardlessSDK\DTOs\BillingRequest\FlowPrefilledCustomer $prefilled_customer;
    /**
     * URL that the payer can be redirected to after completing the request flow.
     */
    public ?string $redirect_uri;
    /**
     * Session token populated when responding to the initialise action
     */
    public ?string $session_token;
    /**
     * If true, the payer will be able to see redirect action buttons on Thank You page. These action buttons will provide a way to connect back to the billing request flow app if opened within a mobile app. For successful flow, the button will take the payer back the billing request flow where they will see the success screen. For failure, button will take the payer to url being provided against exit_uri field.
     */
    public bool $show_redirect_buttons;
    /**
     * If true, the payer will be able to see a redirect action button on the Success page. This action button will provide a way to redirect the payer to the given redirect_uri. This functionality is helpful when merchants do not want payers to be automatically redirected or on Android devices, where automatic redirections are not possible.
     */
    public bool $show_success_redirect_button;
    /**
     * If true, the payer will not be redirected to the success screen after completing the flow. A redirect_uri needs to be provided for this parameter to be taken into account.
     */
    public bool $skip_success_screen;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorisation_url' => is_string($value) ? $this->authorisation_url = $value : parent::assignMember($name, $value),
            'auto_fulfil' => is_bool($value) ? $this->auto_fulfil = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'customer_details_captured' => is_bool($value) ? $this->customer_details_captured = $value : parent::assignMember($name, $value),
            'exit_uri' => $value === null || is_string($value) ? $this->exit_uri = $value : parent::assignMember($name, $value),
            'expires_at' => is_string($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'language' => $value === null || is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\BillingRequest\FlowLinks($value) : parent::assignMember($name, $value),
            'lock_bank_account' => is_bool($value) ? $this->lock_bank_account = $value : parent::assignMember($name, $value),
            'lock_currency' => is_bool($value) ? $this->lock_currency = $value : parent::assignMember($name, $value),
            'lock_customer_details' => is_bool($value) ? $this->lock_customer_details = $value : parent::assignMember($name, $value),
            'prefilled_bank_account' => $value instanceof \stdClass ? $this->prefilled_bank_account = new \GoCardlessSDK\DTOs\BillingRequest\FlowPrefilledBankAccount($value) : parent::assignMember($name, $value),
            'prefilled_customer' => $value instanceof \stdClass ? $this->prefilled_customer = new \GoCardlessSDK\DTOs\BillingRequest\FlowPrefilledCustomer($value) : parent::assignMember($name, $value),
            'redirect_uri' => $value === null || is_string($value) ? $this->redirect_uri = $value : parent::assignMember($name, $value),
            'session_token' => $value === null || is_string($value) ? $this->session_token = $value : parent::assignMember($name, $value),
            'show_redirect_buttons' => is_bool($value) ? $this->show_redirect_buttons = $value : parent::assignMember($name, $value),
            'show_success_redirect_button' => is_bool($value) ? $this->show_success_redirect_button = $value : parent::assignMember($name, $value),
            'skip_success_screen' => is_bool($value) ? $this->skip_success_screen = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
