<?php

declare(strict_types=1);

namespace GoCardlessSDK\PayerAuthorisations\ByPayerAuthorisationId\Actions;

final class Confirm extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /payer_authorisations/{payer_authorisation_id}/actions/confirm [operationId: confirm_payer_authorisation] */
    /**
     * Confirm a Payer Authorisation
     *
     * Confirms the Payer Authorisation, indicating that the resources are ready to be created.
     * A Payer Authorisation cannot be confirmed if it hasn't been submitted yet.
     *
     * <p class="notice">
     *   The main use of the confirm endpoint is to enable integrators to acknowledge the end of the setup process.
     *   They might want to make the payers go through some other steps after they go through our flow or make them go through the necessary verification mechanism (upcoming feature).
     * </p>
     *
     * **Deprecated:** Payer Authorisation is legacy API and cannot be used by new integrators.
     * The [Billing Request](https://docs.gocardless.com/docs/api-reference/billing-request) API should be used for any new integrations.
     *
     * @deprecated
     */
    public static function post(string $payer_authorisation_id, \GoCardlessSDK\PostParams\PayerAuthorisations\ByPayerAuthorisationId\Actions\Confirm $params): \GoCardlessSDK\DTOs\PayerAuthorisation\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\PayerAuthorisations\ByPayerAuthorisationId\Actions\Confirm::class)->post($payer_authorisation_id, $params);
    }

}
