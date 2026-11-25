<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\OutboundPayment;

/**
 * OutboundPaymentVerifications
 *
 * Contains details of the verifications performed for the outbound payment
 */
final class Verifications extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Checks if the recipient owns the provided bank account
     */
    public ?\GoCardlessSDK\DTOs\OutboundPayment\Verifications\HolderVerificationDTO $recipient_bank_account_holder_verification;
}
