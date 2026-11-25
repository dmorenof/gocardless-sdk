<?php

declare(strict_types=1);

namespace GoCardlessSDK\Mandates\ByMandateId\Actions;

final class Reinstate extends \GoCardlessSDK\GoCardlessAPISDK
{
    /** POST /mandates/{mandate_id}/actions/reinstate [operationId: reinstate_mandate] */
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
    public static function post(string $mandate_id, \GoCardlessSDK\PostParams\Mandates\ByMandateId\Actions\Reinstate $params): \GoCardlessSDK\DTOs\Mandate\SingleResource\Response
    {
        return self::client()->resource(\GoCardlessSDK\Resources\Mandates\ByMandateId\Actions\Reinstate::class)->post($mandate_id, $params);
    }
}
