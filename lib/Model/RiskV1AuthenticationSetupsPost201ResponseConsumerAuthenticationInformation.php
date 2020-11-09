<?php
/**
 * RiskV1AuthenticationSetupsPost201ResponseConsumerAuthenticationInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * RiskV1AuthenticationSetupsPost201ResponseConsumerAuthenticationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1AuthenticationSetupsPost201ResponseConsumerAuthenticationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1AuthenticationSetupsPost201Response_consumerAuthenticationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessToken' => 'string',
        'referenceId' => 'string',
        'deviceDataCollectionUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessToken' => null,
        'referenceId' => null,
        'deviceDataCollectionUrl' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'accessToken' => 'accessToken',
        'referenceId' => 'referenceId',
        'deviceDataCollectionUrl' => 'deviceDataCollectionUrl'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'referenceId' => 'setReferenceId',
        'deviceDataCollectionUrl' => 'setDeviceDataCollectionUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'referenceId' => 'getReferenceId',
        'deviceDataCollectionUrl' => 'getDeviceDataCollectionUrl'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['referenceId'] = isset($data['referenceId']) ? $data['referenceId'] : null;
        $this->container['deviceDataCollectionUrl'] = isset($data['deviceDataCollectionUrl']) ? $data['deviceDataCollectionUrl'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['referenceId']) && (strlen($this->container['referenceId']) > 50)) {
            $invalid_properties[] = "invalid value for 'referenceId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['deviceDataCollectionUrl']) && (strlen($this->container['deviceDataCollectionUrl']) > 100)) {
            $invalid_properties[] = "invalid value for 'deviceDataCollectionUrl', the character length must be smaller than or equal to 100.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['referenceId']) > 50) {
            return false;
        }
        if (strlen($this->container['deviceDataCollectionUrl']) > 100) {
            return false;
        }
        return true;
    }


    /**
     * Gets accessToken
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     * @param string $accessToken JSON Web Token (JWT) used to authenticate the consumer with the authentication provider, such as, CardinalCommerce or Rupay. Note - Max Length of this field is 2048 characters.
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    /**
     * Gets referenceId
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['referenceId'];
    }

    /**
     * Sets referenceId
     * @param string $referenceId This identifier represents cardinal has started device data collection session and this must be passed in Authentication JWT to Cardinal when invoking the deviceDataCollectionUrl.
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        if (!is_null($referenceId) && (strlen($referenceId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $referenceId when calling RiskV1AuthenticationSetupsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 50.');
        }

        $this->container['referenceId'] = $referenceId;

        return $this;
    }

    /**
     * Gets deviceDataCollectionUrl
     * @return string
     */
    public function getDeviceDataCollectionUrl()
    {
        return $this->container['deviceDataCollectionUrl'];
    }

    /**
     * Sets deviceDataCollectionUrl
     * @param string $deviceDataCollectionUrl The deviceDataCollectionUrl is the location to send the Authentication JWT when invoking the Device Data collection process.
     * @return $this
     */
    public function setDeviceDataCollectionUrl($deviceDataCollectionUrl)
    {
        if (!is_null($deviceDataCollectionUrl) && (strlen($deviceDataCollectionUrl) > 100)) {
            throw new \InvalidArgumentException('invalid length for $deviceDataCollectionUrl when calling RiskV1AuthenticationSetupsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 100.');
        }

        $this->container['deviceDataCollectionUrl'] = $deviceDataCollectionUrl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


