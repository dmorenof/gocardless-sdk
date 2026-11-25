<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\OutboundPayments\Post\OutboundPayments;

final class PaymentsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'recipient_bank_account',
];

    /**
     * ID of the creditor who sends the outbound payment.
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of the outbound payment import that created this outbound payment.
     * Example: "IM123"
     */
    public string $outbound_payment_import;
    /**
     * ID of the customer bank account which receives the outbound payment.
     * Example: "BA123"
     */
    public string $recipient_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'outbound_payment_import' => is_string($value) ? $this->outbound_payment_import = $value : parent::assignMember($name, $value),
            'recipient_bank_account' => is_string($value) ? $this->recipient_bank_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
