<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank;

/**
 * Bank Authorisations
 *
 * Bank Authorisations can be used to authorise Billing Requests. Authorisations
 * are created against a specific bank, usually the bank that provides the payer's
 * account.
 *
 * Creation of Bank Authorisations is only permitted from GoCardless hosted UIs
 * (see Billing Request Flows) to ensure we meet regulatory requirements for
 * checkout flows.
 */
final class Authorisation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \GoCardlessSDK\Enums\Bank\AuthorisationAuthorisationType $authorisation_type;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when the user has been authorised.
     * Format: date-time
     */
    public ?string $authorised_at;
    /**
     * Timestamp when the flow was created
     * Format: date-time
     */
    public string $created_at;
    /**
     * Timestamp when the url will expire. Each authorisation url currently lasts for 15 minutes, but this can vary by bank.
     * Format: date-time
     */
    public string $expires_at;
    /**
     * Unique identifier, beginning with "BAU".
     */
    public string $id;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when the authorisation URL has been visited.
     * Format: date-time
     */
    public ?string $last_visited_at;
    public \GoCardlessSDK\DTOs\Bank\AuthorisationLinks $links;
    /**
     * URL to a QR code PNG image of the bank authorisation url.
     * This QR code can be used as an alternative to providing the `url` to the payer to allow them to authorise with their mobile devices.
     */
    public ?string $qr_code_url;
    /**
     * URL that the payer can be redirected to after authorising the payment.
     *
     * On completion of bank authorisation, the query parameter of either `outcome=success` or `outcome=failure` will be
     * appended to the `redirect_uri` to indicate the result of the bank authorisation. If the bank authorisation is
     * expired, the query parameter `outcome=timeout` will be appended to the `redirect_uri`, in which case you should
     * prompt the user to try the bank authorisation step again.
     *
     * Please note: bank authorisations can still fail despite an `outcome=success` on the `redirect_uri`. It is therefore recommended to wait for the relevant bank authorisation event, such as [`BANK_AUTHORISATION_AUTHORISED`](https://docs.gocardless.com/docs/api-reference/events/billing-request), [`BANK_AUTHORISATION_DENIED`](https://docs.gocardless.com/docs/api-reference/events/billing-request), or [`BANK_AUTHORISATION_FAILED`](https://docs.gocardless.com/docs/api-reference/events/billing-request) in order to show the correct outcome to the user.
     *
     * The BillingRequestFlow ID will also be appended to the `redirect_uri` as query parameter `id=BRF123`.
     *
     * Defaults to `https://pay.gocardless.com/billing/static/thankyou`.
     */
    public string $redirect_uri;
    /**
     * URL for an oauth flow that will allow the user to authorise the payment
     */
    public ?string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authorisation_type' => is_string($value) ? $this->authorisation_type = \GoCardlessSDK\Enums\Bank\AuthorisationAuthorisationType::from($value) : parent::assignMember($name, $value),
            'authorised_at' => $value === null || is_string($value) ? $this->authorised_at = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'expires_at' => is_string($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_visited_at' => $value === null || is_string($value) ? $this->last_visited_at = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Bank\AuthorisationLinks($value) : parent::assignMember($name, $value),
            'qr_code_url' => $value === null || is_string($value) ? $this->qr_code_url = $value : parent::assignMember($name, $value),
            'redirect_uri' => is_string($value) ? $this->redirect_uri = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
