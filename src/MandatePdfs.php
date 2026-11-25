<?php

declare(strict_types=1);

namespace GoCardlessSDK;

final class MandatePdfs extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /mandate_pdfs [operationId: create_mandate_pdf] */
    /**
     * Create a mandate PDF
     *
     * Generates a PDF mandate and returns its temporary URL.
     *
     * Customer and bank account details can be left blank (for a blank mandate), provided manually, or inferred from the ID of an existing [mandate](https://docs.gocardless.com/docs/api-reference/mandate).
     *
     * By default, we'll generate PDF mandates in English.
     *
     * To generate a PDF mandate in another language, set the `Accept-Language` header when creating the PDF mandate to the relevant [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language code supported for the scheme.
     *
     * | Scheme           | Supported languages                                                                                                                          |
     * | :--------------- | :------------------------------------------------------------------------------------------------------------------------------------------- |
     * | ACH              | English (`en`)                                                                                                                               |
     * | Autogiro         | English (`en`), Swedish (`sv`)                                                                                                               |
     * | Bacs             | English (`en`)                                                                                                                               |
     * | BECS             | English (`en`)                                                                                                                               |
     * | BECS NZ          | English (`en`)                                                                                                                               |
     * | Betalingsservice | Danish (`da`), English (`en`)                                                                                                                |
     * | PAD              | English (`en`)                                                                                                                               |
     * | SEPA Core        | Danish (`da`), Dutch (`nl`), English (`en`), French (`fr`), German (`de`), Italian (`it`), Portuguese (`pt`), Spanish (`es`), Swedish (`sv`) |
     */
    public static function post(\GoCardlessSDK\PostParams\MandatePdfs $params): \GoCardlessSDK\DTOs\Mandate\PdfSingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\MandatePdfs::class)->post($params);
    }

}
