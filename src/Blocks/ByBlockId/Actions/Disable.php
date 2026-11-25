<?php

declare(strict_types=1);

namespace GoCardlessSDK\Blocks\ByBlockId\Actions;

final class Disable extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /blocks/{block_id}/actions/disable [operationId: disable_block] */
    /**
     * Disable a block
     *
     * Disables a block so that it no longer will prevent mandate creation.
     */
    public static function post(string $block_id, \GoCardlessSDK\PostParams\Blocks\ByBlockId\Actions\Disable $params): \GoCardlessSDK\DTOs\Block\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Blocks\ByBlockId\Actions\Disable::class)->post($block_id, $params);
    }
}
