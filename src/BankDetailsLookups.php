<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class BankDetailsLookups extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /bank_details_lookups [operationId: create_bank_details_lookup] */
    /**
     * Perform a bank details lookup
     *
     * Performs a bank details lookup. As part of the lookup, a modulus check and
     * reachability check are performed.
     *
     * For UK or Eurozone-based bank accounts, where an account holder name is provided
     * (and an account number, a sort code or an IBAN are already present), we verify that
     * the account holder name and bank account number match the details held by the relevant bank.
     * If there is no match, the endpoint will return a 422 - validation error on account_holder_name:
     * "Account holder name does not match bank account details provided".
     *
     * If your request returns an [error](https://docs.gocardless.com/docs/api-reference/responses-and-errors) or the `available_debit_schemes`
     * attribute is an empty array, you will not be able to collect payments from the
     * specified bank account. GoCardless may be able to collect payments from an account
     * even if no `bic` is returned.
     *
     * Bank account details may be supplied using [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) or an IBAN.
     *
     * _ACH scheme_ For compliance reasons, an extra validation step is done using
     * a third-party provider to make sure the customer's bank account can accept
     * Direct Debit. If a bank account is discovered to be closed or invalid, the
     * customer is requested to adjust the account number/routing number and
     * succeed in this check to continue with the flow.
     *
     * _Note:_ Usage of this endpoint is monitored. If your organisation relies on GoCardless for
     * modulus or reachability checking but not for payment collection, please get in touch.
     */
    public static function post(\GoCardlessSDK\PostParams\BankDetailsLookups $params): \GoCardlessSDK\DTOs\Bank\DetailsLookupSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BankDetailsLookups::class)->post($params);
    }

}
