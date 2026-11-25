<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\ByBillingRequestId\Actions\CollectCustomerDetails\Post;

final class BillingRequestsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Requests\BillingRequests\ByBillingRequestId\Actions\CollectCustomerDetails\Post\BillingRequests\RequestsCustomerRequest $customer;
    public \GoCardlessSDK\Requests\BillingRequests\ByBillingRequestId\Actions\CollectCustomerDetails\Post\BillingRequests\BillingDetailRequest $customer_billing_detail;

}
