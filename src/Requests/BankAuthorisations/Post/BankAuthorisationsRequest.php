<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BankAuthorisations\Post;

final class BankAuthorisationsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'links',
    ];

    public \GoCardlessSDK\Requests\BankAuthorisations\Post\BankAuthorisations\AuthorisationsLinksRequest $links;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'redirect_uri' => is_string($value) ? $this->redirect_uri = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
