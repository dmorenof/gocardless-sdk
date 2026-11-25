# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by GoCardless.

- GoCardless and its service names belong to their owners; the MIT license grants no rights to them and does not sublicense the GoCardless API or its terms. GoCardless publishes official PHP libraries; this one is generated from the contract.
- The contract in `contract/gocardless.json` is the OpenAPI document GoCardless publishes at <https://docs.gocardless.com/openapi-schema-public.json> (API version 2015-07-06). The generator repaired a few defects of that document, which the generation report listed (an `items`-less array read as a list of any value, a free-form `metadata` query object read as `metadata[key]=value`).
- Using the API requires an access token from GoCardless and compliance with its terms. Send the `GoCardless-Version` header the API asks for.
- Provided without warranty.
