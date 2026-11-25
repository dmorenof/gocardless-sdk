<?php

declare(strict_types=1);

namespace GoCardlessSDK\PayerAuthorisations\ByPayerAuthorisationId\Actions;

final class Submit extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /payer_authorisations/{payer_authorisation_id}/actions/submit [operationId: submit_payer_authorisation] */
    /**
     * Submit a Payer Authorisation
     *
     * Submits all the data previously pushed to this PayerAuthorisation for verification. This time, a 200 HTTP status is returned if the resource is valid and a 422 error response in case of validation errors. After it is successfully submitted, the Payer Authorisation can no longer be edited.
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public static function post(string $payer_authorisation_id, \GoCardlessSDK\PostParams\PayerAuthorisations\ByPayerAuthorisationId\Actions\Submit $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PayerAuthorisations\ByPayerAuthorisationId\Actions\Submit::class)->post($payer_authorisation_id, $params);
    }

}
