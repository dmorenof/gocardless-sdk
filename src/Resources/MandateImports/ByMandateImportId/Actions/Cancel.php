<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\MandateImports\ByMandateImportId\Actions;

final class Cancel extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mandate_imports/{mandate_import_id}/actions/cancel',
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
            'type' => '\\GoCardlessSDK\\Requests\\MandateImports\\ByMandateImportId\\Actions\\Cancel\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Cancel a mandate import
     *
     * Cancels the mandate import, which aborts the import process and stops the mandates
     * being set up in GoCardless. Once the import has been cancelled, it can no longer have
     * entries added to it. Mandate imports which have already been submitted or processed
     * cannot be cancelled.
     */
    public function post(string $mandate_import_id, \GoCardlessSDK\PostParams\MandateImports\ByMandateImportId\Actions\Cancel $params): \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\ImportSingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['mandate_import_id' => $mandate_import_id], parameters: $params);
        return $result;
    }
}
