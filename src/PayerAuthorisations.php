<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class PayerAuthorisations extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /payer_authorisations [operationId: create_payer_authorisation] */
    /**
     * Create a Payer Authorisation
     *
     * Creates a Payer Authorisation. The resource is saved to the database even if incomplete. An empty array of incomplete_fields means that the resource is valid. The ID of the resource is used for the other actions. This endpoint has been designed this way so you do not need to save any payer data on your servers or the browser while still being able to implement a progressive solution, such as a multi-step form.
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public static function post(\GoCardlessSDK\PostParams\PayerAuthorisations $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PayerAuthorisations::class)->post($params);
    }

    /** GET /payer_authorisations/{payer_authorisation_id} [operationId: get_payer_authorisations] */
    /**
     * Get a single Payer Authorisation
     *
     * Retrieves the details of a single existing Payer Authorisation. It can be used for polling the status of a Payer Authorisation.
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public static function getByPayerAuthorisationId(string $payer_authorisation_id, \GoCardlessSDK\GetParams\PayerAuthorisations\ByPayerAuthorisationId $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PayerAuthorisations::class)->getByPayerAuthorisationId($payer_authorisation_id, $params);
    }

    /** PUT /payer_authorisations/{payer_authorisation_id} [operationId: update_payer_authorisations] */
    /**
     * Update a Payer Authorisation
     *
     * Updates a Payer Authorisation. Updates the Payer Authorisation with the request data. Can be invoked as many times as needed. Only fields present in the request will be modified. An empty array of incomplete_fields means that the resource is valid. This endpoint has been designed this way so you do not need to save any payer data on your servers or the browser while still being able to implement a progressive solution, such a multi-step form. <p class="notice"> Note that in order to update the `metadata` attribute values it must be sent completely as it overrides the previously existing values. </p>
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public static function putByPayerAuthorisationId(string $payer_authorisation_id, \GoCardlessSDK\PutParams\PayerAuthorisations\ByPayerAuthorisationId $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PayerAuthorisations::class)->putByPayerAuthorisationId($payer_authorisation_id, $params);
    }

}
