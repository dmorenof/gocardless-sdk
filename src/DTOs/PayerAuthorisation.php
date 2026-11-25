<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Payer Authorisations
 *
 * <p class="restricted-notice">
 *   Don't use Payer Authorisations for new integrations.
 *   It is deprecated in favour of
 *   <a href="https://docs.gocardless.com/docs/collect-payments/setting-up-mandates">
 *   Billing Requests</a>. Use Billing Requests to build any future integrations.
 * </p>
 *
 * Payer Authorisation resource acts as a wrapper for creating customer, bank account and mandate details in a single request.
 * PayerAuthorisation API enables the integrators to build their own custom payment pages.
 *
 * The process to use the Payer Authorisation API is as follows:
 *
 *   1. Create a Payer Authorisation, either empty or with already available information
 *   2. Update the authorisation with additional information or fix any mistakes
 *   3. Submit the authorisation, after the payer has reviewed their information
 *   4. [coming soon] Redirect the payer to the verification mechanisms from the response of the Submit request (this will be introduced as a non-breaking change)
 *   5. Confirm the authorisation to indicate that the resources can be created
 *
 * After the Payer Authorisation is confirmed, resources will eventually be created as it's an asynchronous process.
 *
 * To retrieve the status and ID of the linked resources you can do one of the following:
 * <ol>
 *   <li> Listen to <code>  payer_authorisation_completed </code>  <a href="https://docs.gocardless.com/docs/api-reference/webhooks"> webhook</a> (recommended)</li>
 *   <li> Poll the GET <a href="https://docs.gocardless.com/docs/api-reference/payer-authorisation#get-a-single-payer-authorisation"> endpoint</a></li>
 *   <li> Poll the GET events API <code>https://api.gocardless.com/events?payer_authorisation={id}&action=completed</code> </li>
 * </ol>
 *
 * <p class="notice">
 *   Note that the <code>create</code> and <code>update</code> endpoints behave differently than
 *   other existing <code>create</code> and <code>update</code> endpoints. The Payer Authorisation is still saved if incomplete data is provided.
 *   We return the list of incomplete data in the <code>incomplete_fields</code> along with the resources in the body of the response.
 *   The bank account details(account_number, bank_code & branch_code) must be sent together rather than splitting across different request for both <code>create</code> and <code>update</code> endpoints.
 *   <br><br>
 *   The API is designed to be flexible and allows you to collect information in multiple steps without storing any sensitive data in the browser or in your servers.
 * </p>
 */
final class PayerAuthorisation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bank_account',
    'created_at',
    'customer',
    'id',
    'incomplete_fields',
    'links',
    'mandate',
    'status',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \GoCardlessSDK\DTOs\PayerAuthorisation\BankAccount $bank_account;
    /**
     * [Timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this Payer Authorisation was created.
     * Format: date-time
     */
    public ?string $created_at;
    public \GoCardlessSDK\DTOs\PayerAuthorisation\Customer $customer;
    /**
     * Unique identifier, beginning with "PA".
     */
    public string $id;
    /**
     * An array of fields which are missing and is required to set up the mandate.
     */
    public \GoCardlessSDK\Collections\PayerAuthorisation\IncompleteFieldsCollection $incomplete_fields;
    public \GoCardlessSDK\DTOs\PayerAuthorisation\Links $links;
    public \GoCardlessSDK\DTOs\PayerAuthorisation\Mandate $mandate;
    public \GoCardlessSDK\Enums\PayerAuthorisation\Status $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account' => $value instanceof \stdClass ? $this->bank_account = new \GoCardlessSDK\DTOs\PayerAuthorisation\BankAccount($value) : parent::assignMember($name, $value),
            'created_at' => $value === null || is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'customer' => $value instanceof \stdClass ? $this->customer = new \GoCardlessSDK\DTOs\PayerAuthorisation\Customer($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'incomplete_fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->incomplete_fields = new \GoCardlessSDK\Collections\PayerAuthorisation\IncompleteFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\PayerAuthorisation\IncompleteField::class)) : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\PayerAuthorisation\Links($value) : parent::assignMember($name, $value),
            'mandate' => $value instanceof \stdClass ? $this->mandate = new \GoCardlessSDK\DTOs\PayerAuthorisation\Mandate($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\PayerAuthorisation\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
