# RelayPay\ECommerceApi

All URIs are relative to https://api.sandbox.relaypay.io/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMerchantTransaction()**](ECommerceApi.md#getMerchantTransaction) | **GET** /e-commerce/transaction | Get merchant transaction by a specified orderId |
| [**getMerchantTxs()**](ECommerceApi.md#getMerchantTxs) | **GET** /e-commerce/transaction/history | Get all bill payment transactions for the merchant |
| [**getMerchantWebhookLogs()**](ECommerceApi.md#getMerchantWebhookLogs) | **GET** /e-commerce/transaction/webhooks | Get merchant webhook logs in date range |
| [**setEcommerceRequest()**](ECommerceApi.md#setEcommerceRequest) | **POST** /e-commerce/request | Ecommerce provider sends a transaction request. |
| [**setEcommerceSalesforce()**](ECommerceApi.md#setEcommerceSalesforce) | **POST** /e-commerce/salesforce | Ecommerce provider pushes a Salesforce specific data for authorisation. |


## `getMerchantTransaction()`

```php
getMerchantTransaction($x_api_key, $x_merchant_id, $order_id): \RelayPay\Model\EcommerceMerchantTransaction
```

Get merchant transaction by a specified orderId

Use this endpoint to retrieve merchant transaction by orderId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RelayPay\Api\ECommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$x_merchant_id = 'x_merchant_id_example'; // string
$order_id = 'order_id_example'; // string

try {
    $result = $apiInstance->getMerchantTransaction($x_api_key, $x_merchant_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->getMerchantTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **x_merchant_id** | **string**|  | |
| **order_id** | **string**|  | |

### Return type

[**\RelayPay\Model\EcommerceMerchantTransaction**](../Model/EcommerceMerchantTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantTxs()`

```php
getMerchantTxs($x_api_key, $x_merchant_id, $pageable): \RelayPay\Model\PageEcommerceMerchantTransaction
```

Get all bill payment transactions for the merchant

Use this endpoint to retrieve transaction history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RelayPay\Api\ECommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$x_merchant_id = 'x_merchant_id_example'; // string
$pageable = new \RelayPay\Model\\RelayPay\Model\Pageable(); // \RelayPay\Model\Pageable

try {
    $result = $apiInstance->getMerchantTxs($x_api_key, $x_merchant_id, $pageable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->getMerchantTxs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **x_merchant_id** | **string**|  | |
| **pageable** | [**\RelayPay\Model\Pageable**](../Model/.md)|  | |

### Return type

[**\RelayPay\Model\PageEcommerceMerchantTransaction**](../Model/PageEcommerceMerchantTransaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantWebhookLogs()`

```php
getMerchantWebhookLogs($x_api_key, $x_merchant_id, $start_date, $end_date): \RelayPay\Model\MerchantWebhookLog[]
```

Get merchant webhook logs in date range

Use this endpoint to retrieve merchant webhook logs in date range for merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RelayPay\Api\ECommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$x_merchant_id = 'x_merchant_id_example'; // string
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->getMerchantWebhookLogs($x_api_key, $x_merchant_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->getMerchantWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **x_merchant_id** | **string**|  | |
| **start_date** | **\DateTime**|  | |
| **end_date** | **\DateTime**|  | |

### Return type

[**\RelayPay\Model\MerchantWebhookLog[]**](../Model/MerchantWebhookLog.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setEcommerceRequest()`

```php
setEcommerceRequest($x_api_key, $x_merchant_id, $x_api_signature, $ecommerce_incoming_request): \RelayPay\Model\EcommerceResponse
```

Ecommerce provider sends a transaction request.

Use this endpoint to create a payment request. The service returns a unique url to be used for redirection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RelayPay\Api\ECommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$x_merchant_id = 'x_merchant_id_example'; // string
$x_api_signature = 'x_api_signature_example'; // string
$ecommerce_incoming_request = new \RelayPay\Model\EcommerceIncomingRequest(); // \RelayPay\Model\EcommerceIncomingRequest

try {
    $result = $apiInstance->setEcommerceRequest($x_api_key, $x_merchant_id, $x_api_signature, $ecommerce_incoming_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->setEcommerceRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **x_merchant_id** | **string**|  | |
| **x_api_signature** | **string**|  | |
| **ecommerce_incoming_request** | [**\RelayPay\Model\EcommerceIncomingRequest**](../Model/EcommerceIncomingRequest.md)|  | |

### Return type

[**\RelayPay\Model\EcommerceResponse**](../Model/EcommerceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setEcommerceSalesforce()`

```php
setEcommerceSalesforce($x_api_key, $x_merchant_id, $x_api_signature, $merchant_salesforce_plugin)
```

Ecommerce provider pushes a Salesforce specific data for authorisation.

Use this endpoint to update Salesforce private key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new RelayPay\Api\ECommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string
$x_merchant_id = 'x_merchant_id_example'; // string
$x_api_signature = 'x_api_signature_example'; // string
$merchant_salesforce_plugin = new \RelayPay\Model\MerchantSalesforcePlugin(); // \RelayPay\Model\MerchantSalesforcePlugin

try {
    $apiInstance->setEcommerceSalesforce($x_api_key, $x_merchant_id, $x_api_signature, $merchant_salesforce_plugin);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceApi->setEcommerceSalesforce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**|  | |
| **x_merchant_id** | **string**|  | |
| **x_api_signature** | **string**|  | |
| **merchant_salesforce_plugin** | [**\RelayPay\Model\MerchantSalesforcePlugin**](../Model/MerchantSalesforcePlugin.md)|  | |

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
