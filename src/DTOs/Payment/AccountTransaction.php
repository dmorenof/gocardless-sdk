<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment;

/**
 * Payment Account Transactions
 *
 * Payment account transactions represent movements of funds on a given payment account. The payment account is provisioned by GoCardless and is used to fund [outbound payments](https://docs.gocardless.com/docs/api-reference/outbound-payment).
 */
final class AccountTransaction extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Amount, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $amount;
    /**
     * Balance after transaction, in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $balance_after_transaction;
    /**
     * The name of the counterparty of the transaction. The counterparty is the recipient for a credit, or the sender for a debit.
     */
    public string $counterparty_name;
    public \GoCardlessSDK\Enums\Payment\AccountTransactionCurrency $currency;
    /**
     * The description of the transaction, if available
     */
    public string $description;
    public \GoCardlessSDK\Enums\Payment\AccountTransactionDirection $direction;
    /**
     * The unique ID of the payment account transaction.
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Payment\AccountTransactionLinks $links;
    /**
     * The reference of the transaction. This is typically supplied by the sender.
     */
    public string $reference;
    /**
     * The date of when the transaction occurred.
     * Format: date
     */
    public string $value_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'balance_after_transaction' => is_int($value) ? $this->balance_after_transaction = $value : parent::assignMember($name, $value),
            'counterparty_name' => is_string($value) ? $this->counterparty_name = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\Payment\AccountTransactionCurrency::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \GoCardlessSDK\Enums\Payment\AccountTransactionDirection::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Payment\AccountTransactionLinks($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'value_date' => is_string($value) ? $this->value_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
