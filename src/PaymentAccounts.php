<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class PaymentAccounts extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /payment_accounts [operationId: list_payment_account] */
    /**
     * List payment accounts
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your payment accounts.
     */
    public static function get(\GoCardlessSDK\GetParams\PaymentAccounts $params): \GoCardlessSDK\DTOs\Payment\AccountMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PaymentAccounts::class)->get($params);
    }

    /** GET /payment_accounts/{payment_account_id} [operationId: get_payment_accounts] */
    /**
     * Get a single payment account details
     *
     * Retrieves the details of an existing payment account.
     */
    public static function getByPaymentAccountId(string $payment_account_id, \GoCardlessSDK\GetParams\PaymentAccounts\ByPaymentAccountId $params): \GoCardlessSDK\DTOs\Payment\AccountSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PaymentAccounts::class)->getByPaymentAccountId($payment_account_id, $params);
    }

}
