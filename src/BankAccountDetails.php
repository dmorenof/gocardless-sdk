<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class BankAccountDetails extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /bank_account_details/{customer_bank_account_id} [operationId: get_bank_account_details] */
    /**
     * Get encrypted bank details
     *
     * Returns bank account details in the flattened JSON Web Encryption format described in RFC 7516.
     *
     * You must specify a `Gc-Key-Id` header when using this endpoint. See [Public Key Setup](https://docs.gocardless.com/docs/gc-embed/bank-details-access#public-key-setup) for more details.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to organisations with the Encrypted Bank Details Access upgrade</p>
     *
     * <p class="notice"><strong>Note</strong>: See our [Security Requirements](https://docs.gocardless.com/docs/api-reference/security-requirements) before using this feature</p>
     */
    public static function getByCustomerBankAccountId(string $customer_bank_account_id, \GoCardlessSDK\GetParams\BankAccountDetails\ByCustomerBankAccountId $params): \GoCardlessSDK\DTOs\Bank\AccountDetailSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BankAccountDetails::class)->getByCustomerBankAccountId($customer_bank_account_id, $params);
    }
}
