<?php

declare(strict_types=1);

namespace GoCardlessSDK\Branding;

final class Logos extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /branding/logos [operationId: logos_branding] */
    /**
     * Create a logo associated with a creditor
     *
     * Creates a new logo associated with a creditor. If a creditor already has a logo, this will update the existing logo linked to the creditor.
     *
     * We support JPG and PNG formats. Your logo will be scaled to a maximum of 300px by 40px. For more guidance on how to upload logos that will look
     * great across your customer payment page and notification emails see [here](https://docs.gocardless.com/docs/gc-embed/setting-up-branding#tips-for-uploading-your-logo).
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: This endpoint is restricted to GoCardless Embed customers. Please email [embed-commercial-team&#64;gocardless.com](mailto:embed-commercial-team&#64;gocardless.com) if you are interested in using this product.</p>
     */
    public static function post(\GoCardlessSDK\PostParams\Branding\Logos $params): \GoCardlessSDK\DTOs\LogoSingleResourceResponse
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Branding\Logos::class)->post($params);
    }

}
