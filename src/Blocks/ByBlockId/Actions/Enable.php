<?php

declare(strict_types=1);

namespace GoCardlessSDK\Blocks\ByBlockId\Actions;

final class Enable extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /blocks/{block_id}/actions/enable [operationId: enable_block] */
    /**
     * Enable a block
     *
     * Enables a previously disabled block so that it will prevent mandate creation
     */
    public static function post(string $block_id, \GoCardlessSDK\PostParams\Blocks\ByBlockId\Actions\Enable $params): \GoCardlessSDK\DTOs\Block\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Blocks\ByBlockId\Actions\Enable::class)->post($block_id, $params);
    }
}
