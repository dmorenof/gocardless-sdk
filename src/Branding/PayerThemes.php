<?php

declare(strict_types=1);

namespace GoCardlessSDK\Branding;

final class PayerThemes extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /branding/payer_themes [operationId: payer_themes_branding] */
    /**
     * Create a payer theme associated with a creditor
     *
     * Creates a new payer theme associated with a creditor. If a creditor already has payer themes, this will update the existing payer theme linked to the creditor.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\Branding\PayerThemes $params): \GoCardlessSDK\DTOs\PayerThemeSingleResourceResponse
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Branding\PayerThemes::class)->post($params);
    }
}
