<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

final class ActionsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of country codes supported for collecting bank account details, for the collect_bank_account action
     */
    public \GoCardlessSDK\Collections\StringCollection $available_country_codes;
    /**
     * List of currencies the current mandate supports
     */
    public \GoCardlessSDK\Collections\StringCollection $available_currencies;
    /**
     * Describes the behaviour of bank authorisations, for the bank_authorisation action
     */
    public \GoCardlessSDK\DTOs\BillingRequest\ActionsItem\BankAuthorisationDTO $bank_authorisation;
    /**
     * Additional parameters to help complete the collect_customer_details action
     */
    public \GoCardlessSDK\DTOs\BillingRequest\ActionsItem\CustomerDetailsDTO $collect_customer_details;
    /**
     * Which other action types this action can complete.
     * Example: ["collect_bank_account"]
     */
    public \GoCardlessSDK\Collections\StringCollection $completes_actions;
    /**
     * Describes whether we inferred the institution from the provided bank account details. One of:
     * - `not_needed`: we won't attempt to infer the institution as it is not needed. Either because it was manually selected or the billing request does not support this feature
     * - `pending`: we are waiting on the bank details in order to infer the institution
     * - `failed`: we weren't able to infer the institution
     * - `success`: we inferred the institution and added it to the resources of a Billing Request
     *
     * Example: "pending"
     */
    public \GoCardlessSDK\Enums\BillingRequest\ActionsItem\GuessStatusEnum $institution_guess_status;
    /**
     * Informs you whether the action is required to fulfil the billing request or not.
     * Example: true
     */
    public bool $required;
    /**
     * Requires completing these actions before this action can be completed.
     * Example: ["collect_bank_account"]
     */
    public \GoCardlessSDK\Collections\StringCollection $requires_actions;
    /**
     * Status of the action
     * Example: "pending"
     */
    public \GoCardlessSDK\Enums\BillingRequest\ActionsItem\StatusEnum $status;
    /**
     * Unique identifier for the action.
     * Example: "collect_bank_account"
     */
    public \GoCardlessSDK\Enums\BillingRequest\ActionsItem\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available_country_codes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->available_country_codes = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'available_currencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->available_currencies = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'completes_actions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->completes_actions = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'institution_guess_status' => is_string($value) ? $this->institution_guess_status = \GoCardlessSDK\Enums\BillingRequest\ActionsItem\GuessStatusEnum::from($value) : parent::assignMember($name, $value),
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            'requires_actions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->requires_actions = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\BillingRequest\ActionsItem\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \GoCardlessSDK\Enums\BillingRequest\ActionsItem\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
