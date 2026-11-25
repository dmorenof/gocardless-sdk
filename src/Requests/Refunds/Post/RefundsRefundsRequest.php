<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Refunds\Post;

final class RefundsRefundsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'links',
    ];

    public \GoCardlessSDK\DTOs\Refund\AnyOfAmountStringable $amount;
    public \GoCardlessSDK\Requests\Refunds\Post\Refunds\RefundsLinksRequest $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * An optional reference that will appear on your customer's bank statement. The character limit for this reference is dependent on the scheme.<br /> <strong>ACH</strong> - 10 characters<br /> <strong>Autogiro</strong> - 11 characters<br /> <strong>Bacs</strong> - 10 characters<br /> <strong>BECS</strong> - 30 characters<br /> <strong>BECS NZ</strong> - 12 characters<br /> <strong>Betalingsservice</strong> - 30 characters<br /> <strong>Faster Payments</strong> - 18 characters<br /> <strong>PAD</strong> - scheme doesn't offer references<br /> <strong>PayTo</strong> - 18 characters<br /> <strong>SEPA</strong> - 140 characters<br /> Note that this reference must be unique (for each merchant) for the BECS scheme as it is a scheme requirement. <p class='restricted-notice'><strong>Restricted</strong>: You can only specify a payment reference for Bacs payments (that is, when collecting from the UK) if you're on the <a href='https://gocardless.com/pricing'>GoCardless Plus, Pro or Enterprise packages</a>.</p> <p class='restricted-notice'><strong>Restricted</strong>: You can not specify a payment reference for Faster Payments.</p>
     */
    public ?string $reference;
    public \GoCardlessSDK\DTOs\Refund\AnyOfTotalAmountConfirmation $total_amount_confirmation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
