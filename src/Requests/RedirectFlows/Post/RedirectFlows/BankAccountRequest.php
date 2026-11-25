<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\RedirectFlows\Post\RedirectFlows;

/**
 * Bank account information used to prefill the payment page so your customer doesn't have to re-type details you already hold about them. It will be stored unvalidated and the customer will be able to review and amend it before completing the form.
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Bank account type for USD-denominated bank accounts. Must not be provided for bank accounts in other currencies. See [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details#united-states) for more information.
     * Example: "savings"
     */
    public ?\GoCardlessSDK\Enums\RedirectFlows\Post\RedirectFlows\PrefilledBankAccount\AccountTypeEnum $account_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_type' => $value === null || is_string($value) ? $this->account_type = $value === null ? null : \GoCardlessSDK\Enums\RedirectFlows\Post\RedirectFlows\PrefilledBankAccount\AccountTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
