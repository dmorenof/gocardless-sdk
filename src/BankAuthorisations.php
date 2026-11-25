<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class BankAuthorisations extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /bank_authorisations [operationId: create_bank_authorisation] */
    /**
     * Create a Bank Authorisation
     *
     * Create a Bank Authorisation.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint is restricted as the authorisation must be used within a
     * checkout flow that meets regulatory requirements for each payment
     * scheme. Integrators should use a Billing Request Flow to do this.<br /><br />
     * If you would like to enable bank authorisations, you will need to go through a separate compliance process.
     * For more details please <a href="mailto:help&#64;gocardless.com">get in touch</a>.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\BankAuthorisations $params): \GoCardlessSDK\DTOs\Bank\AuthorisationSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BankAuthorisations::class)->post($params);
    }

    /** GET /bank_authorisations/{bank_authorisation_id} [operationId: get_bank_authorisations] */
    /**
     * Get a Bank Authorisation
     *
     * Get a single bank authorisation.
     */
    public static function getByBankAuthorisationId(string $bank_authorisation_id, \GoCardlessSDK\GetParams\BankAuthorisations\ByBankAuthorisationId $params): \GoCardlessSDK\DTOs\Bank\AuthorisationSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\BankAuthorisations::class)->getByBankAuthorisationId($bank_authorisation_id, $params);
    }

}
