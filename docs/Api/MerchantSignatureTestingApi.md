# RelayPay\MerchantSignatureTestingApi

All URIs are relative to https://api.sandbox.relaypay.io/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateSign()**](MerchantSignatureTestingApi.md#generateSign) | **POST** /merchant/generate-sign | Testing header signature generation. |
| [**verifyEcommerceApiKeys()**](MerchantSignatureTestingApi.md#verifyEcommerceApiKeys) | **POST** /e-commerce/verify-signature | Ecommerce provider verifies signed request. |


## `generateSign()`

```php
generateSign($private_key, $body): string
```

Testing header signature generation.

Not to be used in the actual merchant implementation. This method is a convenience for a developer to verify that his sign function generates the same header as we do.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RelayPay\Api\MerchantSignatureTestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$private_key = 'private_key_example'; // string | Your private(secret) key from Relaypay
$body = 'body_example'; // string

try {
    $result = $apiInstance->generateSign($private_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantSignatureTestingApi->generateSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **private_key** | **string**| Your private(secret) key from Relaypay | |
| **body** | **string**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyEcommerceApiKeys()`

```php
verifyEcommerceApiKeys($x_api_key, $x_merchant_id, $x_api_signature, $body)
```

Ecommerce provider verifies signed request.

Use this endpoint to verify a request signature. Authorization field requires your public key. The service return ok if the request has been verified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RelayPay\Api\MerchantSignatureTestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$x_merchant_id = 'x_merchant_id_example'; // string
$x_api_signature = 'x_api_signature_example'; // string
$body = 'body_example'; // string

try {
    $apiInstance->verifyEcommerceApiKeys($x_api_key, $x_merchant_id, $x_api_signature, $body);
} catch (Exception $e) {
    echo 'Exception when calling MerchantSignatureTestingApi->verifyEcommerceApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **x_merchant_id** | **string**|  | |
| **x_api_signature** | **string**|  | |
| **body** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
