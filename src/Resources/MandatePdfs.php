<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources;

final class MandatePdfs extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mandate_pdfs',
        'security' => [
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
            401 => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
            404 => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
            422 => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
            500 => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\GoCardlessSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\GoCardlessSDK\\DTOs\\Mandate\\PdfSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\MandatePdfs\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

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
    public function post(\GoCardlessSDK\PostParams\MandatePdfs $params): \GoCardlessSDK\DTOs\Mandate\PdfSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\PdfSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
