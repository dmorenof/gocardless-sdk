<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class Customers extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /customers [operationId: list_customer] */
    /**
     * List customers
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your customers.
     */
    public static function get(\GoCardlessSDK\GetParams\Customers $params): \GoCardlessSDK\DTOs\Customer\MultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Customers::class)->get($params);
    }

    /** POST /customers [operationId: create_customer] */
    /**
     * Create a customer
     *
     * Creates a new customer object.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is [restricted](https://docs.gocardless.com/docs/api-reference/restrictions) to [GoCardless Pro](https://gocardless.com/pricing) and [GoCardless Enterprise](https://gocardless.com/pricing) accounts with approved payment pages.</p>
     *
     * <p class="notice--warning"><strong>Warning</strong>: this endpoint is a legacy API endpoint and does not support GoCardless' newest features. We recommend using the [Billing Requests API](https://docs.gocardless.com/docs/collect-payments/setting-up-mandates) instead.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\Customers $params): \GoCardlessSDK\DTOs\Customer\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Customers::class)->post($params);
    }

    /** DELETE /customers/{customer_id} [operationId: delete_customers] */
    /**
     * Remove a customer
     *
     * Removed customers will not appear in search results or lists of customers (in our API
     * or exports), and it will not be possible to load an individually removed customer by
     * ID.
     *
     * <p class="restricted-notice"><strong>The action of removing a customer cannot be reversed, so please use with care.</strong></p>
     */
    public static function deleteByCustomerId(string $customer_id, \GoCardlessSDK\DeleteParams\Customers\ByCustomerId $params): void
    {
        self::client()->resource(\GoCardlessSDK\Resources\Customers::class)->deleteByCustomerId($customer_id, $params);
    }

    /** GET /customers/{customer_id} [operationId: get_customers] */
    /**
     * Get a single customer
     *
     * Retrieves the details of an existing customer.
     */
    public static function getByCustomerId(string $customer_id, \GoCardlessSDK\GetParams\Customers\ByCustomerId $params): \GoCardlessSDK\DTOs\Customer\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Customers::class)->getByCustomerId($customer_id, $params);
    }

    /** PUT /customers/{customer_id} [operationId: update_customers] */
    /**
     * Update a customer
     *
     * Updates a customer object. Supports all of the fields supported when creating a customer.
     */
    public static function putByCustomerId(string $customer_id, \GoCardlessSDK\PutParams\Customers\ByCustomerId $params): \GoCardlessSDK\DTOs\Customer\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Customers::class)->putByCustomerId($customer_id, $params);
    }

}
