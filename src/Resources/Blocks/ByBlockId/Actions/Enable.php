<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Blocks\ByBlockId\Actions;

final class Enable extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/blocks/{block_id}/actions/enable',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Block\\SingleResource\\Response',
    ];

    /**
     * Enable a block
     *
     * Enables a previously disabled block so that it will prevent mandate creation
     */
    public function post(string $block_id, \GoCardlessSDK\PostParams\Blocks\ByBlockId\Actions\Enable $params): \GoCardlessSDK\DTOs\Block\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Block\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['block_id' => $block_id], parameters: $params);
        return $result;
    }
}
