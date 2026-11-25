<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class BillingRequestTemplates extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** GET /billing_request_templates [operationId: list_billing_request_template] */
    /**
     * List Billing Request Templates
     *
     * Returns a [cursor-paginated](https://docs.gocardless.com/docs/api-reference/data-conventions#cursor-pagination) list of your Billing Request Templates.
     */
    public static function get(\GoCardlessSDK\GetParams\BillingRequestTemplates $params): \GoCardlessSDK\DTOs\BillingRequest\TemplateMultiResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequestTemplates::class)->get($params);
    }

    /** POST /billing_request_templates [operationId: create_billing_request_template] */
    /**
     * Create a Billing Request Template
     */
    public static function post(\GoCardlessSDK\PostParams\BillingRequestTemplates $params): \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequestTemplates::class)->post($params);
    }

    /** GET /billing_request_templates/{billing_request_template_id} [operationId: get_billing_request_templates] */
    /**
     * Get a single Billing Request Template
     *
     * Fetches a Billing Request Template
     */
    public static function getByBillingRequestTemplateId(string $billing_request_template_id, \GoCardlessSDK\GetParams\BillingRequestTemplates\ByBillingRequestTemplateId $params): \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequestTemplates::class)->getByBillingRequestTemplateId($billing_request_template_id, $params);
    }

    /** PUT /billing_request_templates/{billing_request_template_id} [operationId: update_billing_request_templates] */
    /**
     * Update a Billing Request Template
     *
     * Updates a Billing Request Template, which will affect all future Billing Requests created by this template.
     */
    public static function putByBillingRequestTemplateId(string $billing_request_template_id, \GoCardlessSDK\PutParams\BillingRequestTemplates\ByBillingRequestTemplateId $params): \GoCardlessSDK\DTOs\BillingRequest\TemplateSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BillingRequestTemplates::class)->putByBillingRequestTemplateId($billing_request_template_id, $params);
    }
}
