<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Webhooks
 *
 * Basic description of a webhook
 */
final class Webhook extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * Unique identifier, beginning with "WB".
     */
    public string $id;
    /**
     * Boolean value showing whether this was a demo webhook for testing
     */
    public bool $is_test;
    /**
     * The body of the request sent to the webhook URL
     */
    public string $request_body;
    public \GoCardlessSDK\DTOs\Webhook\RequestHeaders $request_headers;
    /**
     * The body of the response from the webhook URL
     */
    public ?string $response_body;
    /**
     * Boolean value indicating the webhook response body was truncated
     */
    public ?bool $response_body_truncated;
    /**
     * The response code from the webhook request
     */
    public ?int $response_code;
    public \GoCardlessSDK\DTOs\Webhook\ResponseHeaders $response_headers;
    /**
     * Boolean indicating the content of response headers was truncated
     */
    public ?bool $response_headers_content_truncated;
    /**
     * Boolean indicating the number of response headers was truncated
     */
    public ?bool $response_headers_count_truncated;
    /**
     * Boolean indicating whether the request was successful or failed
     */
    public bool $successful;
    /**
     * URL the webhook was POST-ed to
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_test' => is_bool($value) ? $this->is_test = $value : parent::assignMember($name, $value),
            'request_body' => is_string($value) ? $this->request_body = $value : parent::assignMember($name, $value),
            'response_body' => $value === null || is_string($value) ? $this->response_body = $value : parent::assignMember($name, $value),
            'response_body_truncated' => $value === null || is_bool($value) ? $this->response_body_truncated = $value : parent::assignMember($name, $value),
            'response_code' => $value === null || is_int($value) ? $this->response_code = $value : parent::assignMember($name, $value),
            'response_headers_content_truncated' => $value === null || is_bool($value) ? $this->response_headers_content_truncated = $value : parent::assignMember($name, $value),
            'response_headers_count_truncated' => $value === null || is_bool($value) ? $this->response_headers_count_truncated = $value : parent::assignMember($name, $value),
            'successful' => is_bool($value) ? $this->successful = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
