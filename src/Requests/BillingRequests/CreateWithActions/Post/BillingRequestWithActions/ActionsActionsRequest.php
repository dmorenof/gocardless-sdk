<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions;

/**
 * Action payloads
 */
final class ActionsActionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * URL for an oauth flow that will allow the user to authorise the payment
     */
    public ?string $bank_authorisation_redirect_uri;
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\Actions\BankAccountRequest $collect_bank_account;
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\Actions\CustomerDetailsRequest $collect_customer_details;
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\Actions\PayerDetailsRequest $confirm_payer_details;
    /**
     * Create a bank authorisation object as part of this request
     */
    public bool $create_bank_authorisation;
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\Actions\SelectInstitutionRequest $select_institution;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_authorisation_redirect_uri' => $value === null || is_string($value) ? $this->bank_authorisation_redirect_uri = $value : parent::assignMember($name, $value),
            'create_bank_authorisation' => is_bool($value) ? $this->create_bank_authorisation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
