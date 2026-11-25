<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class BankAccountHolderVerifications extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /bank_account_holder_verifications [operationId: create_bank_account_holder_verification] */
    /**
     * Create a bank account holder verification.
     *
     * Verify the account holder of the bank account. A complete verification can be attached when creating an outbound payment.
     * This endpoint allows partner merchants to create Confirmation of Payee checks on customer bank accounts before sending outbound payments.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to organisations with Outbound Payments enabled</p>
     */
    public static function post(\GoCardlessSDK\PostParams\BankAccountHolderVerifications $params): \GoCardlessSDK\DTOs\Bank\AccountHolderVerificationSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BankAccountHolderVerifications::class)->post($params);
    }

    /** GET /bank_account_holder_verifications/{bank_account_holder_verification_id} [operationId: get_bank_account_holder_verifications] */
    /**
     * Get a bank account holder verification.
     *
     * Fetches a bank account holder verification by ID.
     */
    public static function getByBankAccountHolderVerificationId(string $bank_account_holder_verification_id, \GoCardlessSDK\GetParams\BankAccountHolderVerifications\ByBankAccountHolderVerificationId $params): \GoCardlessSDK\DTOs\Bank\AccountHolderVerificationSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BankAccountHolderVerifications::class)->getByBankAccountHolderVerificationId($bank_account_holder_verification_id, $params);
    }
}
