<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class PaymentAccountTransactions extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /payment_account_transactions/{payment_account_transaction_id} [operationId: get_payment_account_transactions] */
    /**
     * Get a single payment account transaction
     *
     * Retrieves the details of an existing payment account transaction.
     */
    public static function getByPaymentAccountTransactionId(string $payment_account_transaction_id, \GoCardlessSDK\GetParams\PaymentAccountTransactions\ByPaymentAccountTransactionId $params): \GoCardlessSDK\DTOs\Payment\AccountTransactionSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PaymentAccountTransactions::class)->getByPaymentAccountTransactionId($payment_account_transaction_id, $params);
    }

}
