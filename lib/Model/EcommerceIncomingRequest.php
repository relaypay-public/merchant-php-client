<?php
/**
 * EcommerceIncomingRequest
 *
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
 * Relay Pay API documentation. Use `sandbox-api.relaypay.io` for Sandbox environment and `api.relaypay.io` for production.  Some useful links: - [Official docs](https://relaypay-merchant.readme.io/reference/merchant-native-integration)
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

namespace RelayPay\Model;

use \ArrayAccess;
use \RelayPay\ObjectSerializer;

/**
 * EcommerceIncomingRequest Class Doc Comment
 *
 * @category Class
 * @description E-commerce Transaction Request
 * @package  RelayPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcommerceIncomingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcommerceIncomingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
'customer_name' => 'string',
'customer_email' => 'string',
'store_name' => 'string',
'merchant_id' => 'string',
'currency' => 'string',
'order_id' => 'string',
'callback_url_redirect' => 'string',
'callback_cancel_url_redirect' => 'string',
'web_hook_url' => 'string',
'security_token' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
'customer_name' => null,
'customer_email' => null,
'store_name' => null,
'merchant_id' => null,
'currency' => null,
'order_id' => null,
'callback_url_redirect' => null,
'callback_cancel_url_redirect' => null,
'web_hook_url' => null,
'security_token' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
'customer_name' => 'customerName',
'customer_email' => 'customerEmail',
'store_name' => 'storeName',
'merchant_id' => 'merchantId',
'currency' => 'currency',
'order_id' => 'orderId',
'callback_url_redirect' => 'callbackUrlRedirect',
'callback_cancel_url_redirect' => 'callbackCancelUrlRedirect',
'web_hook_url' => 'webHookUrl',
'security_token' => 'securityToken'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
'customer_name' => 'setCustomerName',
'customer_email' => 'setCustomerEmail',
'store_name' => 'setStoreName',
'merchant_id' => 'setMerchantId',
'currency' => 'setCurrency',
'order_id' => 'setOrderId',
'callback_url_redirect' => 'setCallbackUrlRedirect',
'callback_cancel_url_redirect' => 'setCallbackCancelUrlRedirect',
'web_hook_url' => 'setWebHookUrl',
'security_token' => 'setSecurityToken'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
'customer_name' => 'getCustomerName',
'customer_email' => 'getCustomerEmail',
'store_name' => 'getStoreName',
'merchant_id' => 'getMerchantId',
'currency' => 'getCurrency',
'order_id' => 'getOrderId',
'callback_url_redirect' => 'getCallbackUrlRedirect',
'callback_cancel_url_redirect' => 'getCallbackCancelUrlRedirect',
'web_hook_url' => 'getWebHookUrl',
'security_token' => 'getSecurityToken'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['customer_email'] = isset($data['customer_email']) ? $data['customer_email'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['callback_url_redirect'] = isset($data['callback_url_redirect']) ? $data['callback_url_redirect'] : null;
        $this->container['callback_cancel_url_redirect'] = isset($data['callback_cancel_url_redirect']) ? $data['callback_cancel_url_redirect'] : null;
        $this->container['web_hook_url'] = isset($data['web_hook_url']) ? $data['web_hook_url'] : null;
        $this->container['security_token'] = isset($data['security_token']) ? $data['security_token'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['callback_url_redirect'] === null) {
            $invalidProperties[] = "'callback_url_redirect' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name customer_name
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets customer_email
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     *
     * @param string $customer_email customer_email
     *
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets store_name
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     *
     * @param string $store_name store_name
     *
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id merchantID obtained from Relaypay
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency corresponding to the amountt given. Must be the currency approved for this merchant.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Your unique reference for this payment. i.e. id of the current shopping cart
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets callback_url_redirect
     *
     * @return string
     */
    public function getCallbackUrlRedirect()
    {
        return $this->container['callback_url_redirect'];
    }

    /**
     * Sets callback_url_redirect
     *
     * @param string $callback_url_redirect Where to redirect once the payment is pending or cancelled. If this value is provided it'll override the general settings.
     *
     * @return $this
     */
    public function setCallbackUrlRedirect($callback_url_redirect)
    {
        $this->container['callback_url_redirect'] = $callback_url_redirect;

        return $this;
    }

    /**
     * Gets callback_cancel_url_redirect
     *
     * @return string
     */
    public function getCallbackCancelUrlRedirect()
    {
        return $this->container['callback_cancel_url_redirect'];
    }

    /**
     * Sets callback_cancel_url_redirect
     *
     * @param string $callback_cancel_url_redirect Where to redirect once the payment is cancelled. If this value is not provided callbackUrlRedirect will be used
     *
     * @return $this
     */
    public function setCallbackCancelUrlRedirect($callback_cancel_url_redirect)
    {
        $this->container['callback_cancel_url_redirect'] = $callback_cancel_url_redirect;

        return $this;
    }

    /**
     * Gets web_hook_url
     *
     * @return string
     */
    public function getWebHookUrl()
    {
        return $this->container['web_hook_url'];
    }

    /**
     * Sets web_hook_url
     *
     * @param string $web_hook_url Where to post updates about a payment. These will be posted with every payment change. This callback is guaranteed to happen before we redirect the user back. If this value is provided it'll override the general settings. If not provide at all - webhook will not send
     *
     * @return $this
     */
    public function setWebHookUrl($web_hook_url)
    {
        $this->container['web_hook_url'] = $web_hook_url;

        return $this;
    }

    /**
     * Gets security_token
     *
     * @return string
     */
    public function getSecurityToken()
    {
        return $this->container['security_token'];
    }

    /**
     * Sets security_token
     *
     * @param string $security_token This token will be sent back with the callback in Authorization header. (Authorization:  [type] [credentials]  (e.x Basic Rjc1234567890jdGMS67890U78...)) When creating the token, both 'type' and 'credentials' are required.
     *
     * @return $this
     */
    public function setSecurityToken($security_token)
    {
        $this->container['security_token'] = $security_token;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
