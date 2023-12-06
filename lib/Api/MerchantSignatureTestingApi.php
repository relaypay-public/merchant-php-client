<?php
/**
 * MerchantSignatureTestingApi
 * PHP version 5
 *
 * @category Class
 * @package  RelayPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RelayPay-Api-Spec
 *
 * Relay Pay API documentation. Use `api.sandbox.relaypay.io` for Sandbox environment and `api.relaypay.io` for production.  Some useful links: - [Official docs](https://relaypay-merchant.readme.io/reference/merchant-native-integration)
 *
 * OpenAPI spec version: 0.0.2
 * Contact: support@relaypay.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.26
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RelayPay\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use RelayPay\ApiException;
use RelayPay\Configuration;
use RelayPay\HeaderSelector;
use RelayPay\ObjectSerializer;

/**
 * MerchantSignatureTestingApi Class Doc Comment
 *
 * @category Class
 * @package  RelayPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantSignatureTestingApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation generateSign
     *
     * Testing header signature generation. Not to be used in the actual merchant implementation. This method is a convenience for a developer to verify that his sign function generates the same header as we do.
     *
     * @param  string $private_key your private(secret) key from Relaypay (required)
     * @param  string $body payload for the transaction (optional)
     *
     * @throws \RelayPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function generateSign($private_key, $body = null)
    {
        list($response) = $this->generateSignWithHttpInfo($private_key, $body);
        return $response;
    }

    /**
     * Operation generateSignWithHttpInfo
     *
     * Testing header signature generation. Not to be used in the actual merchant implementation. This method is a convenience for a developer to verify that his sign function generates the same header as we do.
     *
     * @param  string $private_key your private(secret) key from Relaypay (required)
     * @param  string $body payload for the transaction (optional)
     *
     * @throws \RelayPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateSignWithHttpInfo($private_key, $body = null)
    {
        $returnType = 'string';
        $request = $this->generateSignRequest($private_key, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation generateSignAsync
     *
     * Testing header signature generation. Not to be used in the actual merchant implementation. This method is a convenience for a developer to verify that his sign function generates the same header as we do.
     *
     * @param  string $private_key your private(secret) key from Relaypay (required)
     * @param  string $body payload for the transaction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSignAsync($private_key, $body = null)
    {
        return $this->generateSignAsyncWithHttpInfo($private_key, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateSignAsyncWithHttpInfo
     *
     * Testing header signature generation. Not to be used in the actual merchant implementation. This method is a convenience for a developer to verify that his sign function generates the same header as we do.
     *
     * @param  string $private_key your private(secret) key from Relaypay (required)
     * @param  string $body payload for the transaction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateSignAsyncWithHttpInfo($private_key, $body = null)
    {
        $returnType = 'string';
        $request = $this->generateSignRequest($private_key, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'generateSign'
     *
     * @param  string $private_key your private(secret) key from Relaypay (required)
     * @param  string $body payload for the transaction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function generateSignRequest($private_key, $body = null)
    {
        // verify the required parameter 'private_key' is set
        if ($private_key === null || (is_array($private_key) && count($private_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $private_key when calling generateSign'
            );
        }

        $resourcePath = '/api/v1/merchants/generate-sign/{privateKey}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($private_key !== null) {
            $resourcePath = str_replace(
                '{' . 'privateKey' . '}',
                ObjectSerializer::toPathValue($private_key),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
