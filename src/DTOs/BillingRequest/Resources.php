<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestResources
 */
final class Resources extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Embedded customer
     */
    public \GoCardlessSDK\DTOs\BillingRequest\Resources\CustomerDTO $customer;
    /**
     * Embedded customer bank account, only if a bank account is linked
     */
    public ?\GoCardlessSDK\DTOs\BillingRequest\Resources\BankAccountDTO $customer_bank_account;
    /**
     * Embedded customer billing detail
     */
    public \GoCardlessSDK\DTOs\BillingRequest\Resources\BillingDetailDTO $customer_billing_detail;
    /**
     * Embedded mandate, only once the mandate request has been fulfilled
     */
    public \GoCardlessSDK\DTOs\BillingRequest\Resources\MandateDTO $mandate;
}
