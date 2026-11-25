<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\Actions;

final class CustomerDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\Actions\CollectCustomerDetails\DetailsCustomerRequest $customer;
    public \GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\Actions\CollectCustomerDetails\BillingDetailRequest $customer_billing_detail;
}
