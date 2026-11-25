<?php

declare(strict_types=1);

namespace GoCardlessSDK\Resources\Mandates\ByMandateId\Actions;

final class Reinstate extends \GoCardlessSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mandates/{mandate_id}/actions/reinstate',
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
        'responseType' => '\\GoCardlessSDK\\DTOs\\Mandate\\SingleResource\\Response',
        'requestBody' => [
            'type' => '\\GoCardlessSDK\\Requests\\Mandates\\ByMandateId\\Actions\\Reinstate\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Reinstate a mandate
     *
     * <a name="mandate_not_inactive"></a>Reinstates a cancelled or expired mandate to the banks. You will receive a `resubmission_requested` webhook, but after that reinstating the mandate follows the same process as its initial creation, so you will receive a `submitted` webhook, followed by a `reinstated` or `failed` webhook up to two working days later. Any metadata supplied to this endpoint will be stored on the `resubmission_requested` event it causes.
     *
     * This will fail with a `mandate_not_inactive` error if the mandate is already being submitted, or is active.
     *
     * Mandates can be resubmitted up to 10 times.
     *
     * <p class="restricted-notice"><strong>Restricted</strong>: this endpoint requires approved
     * [custom payment pages](https://support.gocardless.com/hc/en-gb/articles/115004521925-Custom-Payment-Pages). To instead use the GoCardless hosted payment pages,
     * see the [redirect flows](https://docs.gocardless.com/docs/api-reference/redirect-flow) endpoint.</p>
     *
     * <p class="notice--warning"><strong>Warning</strong>: A mandate can only be reinstated if it has been cancelled through the
     * dashboard or the API. Any mandate that has been cancelled by the bank
     * cannot be reinstated.</p>
     */
    public function post(string $mandate_id, \GoCardlessSDK\PostParams\Mandates\ByMandateId\Actions\Reinstate $params): \GoCardlessSDK\DTOs\Mandate\SingleResource\Response
    {
        /** @var \GoCardlessSDK\DTOs\Mandate\SingleResource\Response $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['mandate_id' => $mandate_id], parameters: $params);
        return $result;
    }

}
