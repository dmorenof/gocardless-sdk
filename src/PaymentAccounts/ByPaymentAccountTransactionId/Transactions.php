<?php

declare(strict_types=1);

namespace GoCardlessSDK\PaymentAccounts\ByPaymentAccountTransactionId;

final class Transactions extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /payment_accounts/{payment_account_transaction_id}/transactions [operationId: get_transactions_from_payment_account_transaction] */
    /**
     * List payment account transactions
     *
     * List transactions for a given payment account.
     */
    public static function get(string $payment_account_transaction_id, \GoCardlessSDK\GetParams\PaymentAccounts\ByPaymentAccountTransactionId\Transactions $params): \GoCardlessSDK\DTOs\Payment\AccountTransactionMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PaymentAccounts\ByPaymentAccountTransactionId\Transactions::class)->get($payment_account_transaction_id, $params);
    }
}
