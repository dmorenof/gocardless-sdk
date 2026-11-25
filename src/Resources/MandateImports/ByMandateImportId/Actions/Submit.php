<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\MandateImports\ByMandateImportId\Actions;

final class Submit extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mandate_imports/{mandate_import_id}/actions/submit',
        'security' => [
            [
                'bearerAuth' => [],
            ],
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Mandate\\ImportSingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\MandateImports\\ByMandateImportId\\Actions\\Submit\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Submit a mandate import
     *
     * Submits the mandate import, which allows it to be processed by a member of the
     * GoCardless team. Once the import has been submitted, it can no longer have entries
     * added to it.
     *
     * In our sandbox environment, to aid development, we automatically process mandate
     * imports approximately 10 seconds after they are submitted. This will allow you to
     * test both the "submitted" response and wait for the webhook to confirm the
     * processing has begun.
     */
    public function post(string $mandate_import_id, \GoCardlessSDK\PostParams\MandateImports\ByMandateImportId\Actions\Submit $params): \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['mandate_import_id' => $mandate_import_id], parameters: $params);
        return $result;
    }
}
