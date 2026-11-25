<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\RedirectFlows\Post;

final class RedirectFlowsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'session_token',
    'success_redirect_url',
];

    /**
     * A description of the item the customer is paying for. This will be shown on the hosted payment pages.
     */
    public ?string $description;
    public \GoCardlessSDK\Requests\RedirectFlows\Post\RedirectFlows\FlowsLinksRequest $links;
    public \GoCardlessSDK\DTOs\RedirectFlow\Metadata $metadata;
    /**
     * Bank account information used to prefill the payment page so your customer doesn't have to re-type details you already hold about them. It will be stored unvalidated and the customer will be able to review and amend it before completing the form.
     */
    public \GoCardlessSDK\Requests\RedirectFlows\Post\RedirectFlows\BankAccountRequest $prefilled_bank_account;
    /**
     * Customer information used to prefill the payment page so your customer doesn't have to re-type details you already hold about them. It will be stored unvalidated and the customer will be able to review and amend it before completing the form.
     */
    public \GoCardlessSDK\Requests\RedirectFlows\Post\RedirectFlows\PrefilledCustomerRequest $prefilled_customer;
    public \GoCardlessSDK\Enums\RedirectFlow\Scheme $scheme;
    /**
     * The customer's session ID must be provided when the redirect flow is set up and again when it is completed. This allows integrators to ensure that the user who was originally sent to the GoCardless payment pages is the one who has completed them.
     */
    public string $session_token;
    /**
     * The URL to redirect to upon successful mandate setup. You must use a URL beginning `https` in the live environment.
     */
    public string $success_redirect_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\RedirectFlow\Scheme::from($value) : parent::assignMember($name, $value),
            'session_token' => is_string($value) ? $this->session_token = $value : parent::assignMember($name, $value),
            'success_redirect_url' => is_string($value) ? $this->success_redirect_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
