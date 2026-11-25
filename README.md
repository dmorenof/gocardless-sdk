# GoCardless SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/gocardless-sdk.svg)](https://packagist.org/packages/dmorenof/gocardless-sdk)

**GoCardless direct debit, instant bank payments and billing requests as typed PHP.**

Customers, mandates, payments, subscriptions, billing requests, payouts and refunds across GoCardless's whole public API, generated from the OpenAPI document GoCardless publishes.

> Unofficial. Not affiliated with, endorsed by or supported by GoCardless. See [NOTICE.md](NOTICE.md).

## Why this SDK

- 138 operations from the official contract, with typed models for every resource.
- Query objects such as `metadata` are sent as `metadata[key]=value`; `limit` accepts an integer or a string, as the API does.
- Errors arrive as typed exceptions you can catch by kind.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/gocardless.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 138 operations and 510 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/gocardless-sdk
```

## Quick start

```php
<?php
use GoCardlessSDK\Configuration;
use GoCardlessSDK\GoCardlessAPISDK;
use GoCardlessSDK\GetParams\Payouts as PayoutsParams;
use GoCardlessSDK\Payouts;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['bearerAuth' => getenv('GOCARDLESS_ACCESS_TOKEN') ?: '']);
GoCardlessAPISDK::configure($configuration);

// `GoCardless-Version` is a required header of every call.
$payouts = Payouts::get(new PayoutsParams((object) ['GoCardlessVersion' => '2015-07-06', 'limit' => 25]));

echo json_encode($payouts), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

138 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `billing_requests` | 14 |
| `outbound_payments` | 8 |
| `subscriptions` | 7 |
| `blocks` | 6 |
| `instalment_schedules` | 6 |
| `mandates` | 6 |
| `payments` | 6 |
| `customer_bank_accounts` | 5 |
| `customers` | 5 |
| `payer_authorisations` | 5 |
| `billing_request_templates` | 4 |
| `creditor_bank_accounts` | 4 |

…and 32 more areas; the full list is in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- GoCardless also publishes official libraries; this SDK is generated from its contract and is not affiliated with GoCardless.
- For the sandbox, set `$configuration->baseUrl = 'https://api-sandbox.gocardless.com';`.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://docs.gocardless.com/api-reference)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
