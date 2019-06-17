<?php
/**
 * RiskV1AuthenticationsPost201ResponseConsumerAuthenticationInformation
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
 * RiskV1AuthenticationsPost201ResponseConsumerAuthenticationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1AuthenticationsPost201ResponseConsumerAuthenticationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1AuthenticationsPost201Response_consumerAuthenticationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acsUrl' => 'string',
        'authenticationPath' => 'string',
        'authenticationTransactionId' => 'string',
        'cavv' => 'string',
        'cavvAlgorithm' => 'string',
        'challengeRequired' => 'bool',
        'ecommerceIndicator' => 'string',
        'eci' => 'string',
        'eciRaw' => 'string',
        'pareq' => 'string',
        'paresStatus' => 'string',
        'proofXml' => 'string',
        'proxyPan' => 'string',
        'specificationVersion' => 'string',
        'ucafAuthenticationData' => 'string',
        'ucafCollectionIndicator' => 'float',
        'veresEnrolled' => 'string',
        'xid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acsUrl' => null,
        'authenticationPath' => null,
        'authenticationTransactionId' => null,
        'cavv' => null,
        'cavvAlgorithm' => null,
        'challengeRequired' => null,
        'ecommerceIndicator' => null,
        'eci' => null,
        'eciRaw' => null,
        'pareq' => null,
        'paresStatus' => null,
        'proofXml' => null,
        'proxyPan' => null,
        'specificationVersion' => null,
        'ucafAuthenticationData' => null,
        'ucafCollectionIndicator' => null,
        'veresEnrolled' => null,
        'xid' => null
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
        'acsUrl' => 'acsUrl',
        'authenticationPath' => 'authenticationPath',
        'authenticationTransactionId' => 'authenticationTransactionId',
        'cavv' => 'cavv',
        'cavvAlgorithm' => 'cavvAlgorithm',
        'challengeRequired' => 'challengeRequired',
        'ecommerceIndicator' => 'ecommerceIndicator',
        'eci' => 'eci',
        'eciRaw' => 'eciRaw',
        'pareq' => 'pareq',
        'paresStatus' => 'paresStatus',
        'proofXml' => 'proofXml',
        'proxyPan' => 'proxyPan',
        'specificationVersion' => 'specificationVersion',
        'ucafAuthenticationData' => 'ucafAuthenticationData',
        'ucafCollectionIndicator' => 'ucafCollectionIndicator',
        'veresEnrolled' => 'veresEnrolled',
        'xid' => 'xid'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'acsUrl' => 'setAcsUrl',
        'authenticationPath' => 'setAuthenticationPath',
        'authenticationTransactionId' => 'setAuthenticationTransactionId',
        'cavv' => 'setCavv',
        'cavvAlgorithm' => 'setCavvAlgorithm',
        'challengeRequired' => 'setChallengeRequired',
        'ecommerceIndicator' => 'setEcommerceIndicator',
        'eci' => 'setEci',
        'eciRaw' => 'setEciRaw',
        'pareq' => 'setPareq',
        'paresStatus' => 'setParesStatus',
        'proofXml' => 'setProofXml',
        'proxyPan' => 'setProxyPan',
        'specificationVersion' => 'setSpecificationVersion',
        'ucafAuthenticationData' => 'setUcafAuthenticationData',
        'ucafCollectionIndicator' => 'setUcafCollectionIndicator',
        'veresEnrolled' => 'setVeresEnrolled',
        'xid' => 'setXid'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'acsUrl' => 'getAcsUrl',
        'authenticationPath' => 'getAuthenticationPath',
        'authenticationTransactionId' => 'getAuthenticationTransactionId',
        'cavv' => 'getCavv',
        'cavvAlgorithm' => 'getCavvAlgorithm',
        'challengeRequired' => 'getChallengeRequired',
        'ecommerceIndicator' => 'getEcommerceIndicator',
        'eci' => 'getEci',
        'eciRaw' => 'getEciRaw',
        'pareq' => 'getPareq',
        'paresStatus' => 'getParesStatus',
        'proofXml' => 'getProofXml',
        'proxyPan' => 'getProxyPan',
        'specificationVersion' => 'getSpecificationVersion',
        'ucafAuthenticationData' => 'getUcafAuthenticationData',
        'ucafCollectionIndicator' => 'getUcafCollectionIndicator',
        'veresEnrolled' => 'getVeresEnrolled',
        'xid' => 'getXid'
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
        $this->container['acsUrl'] = isset($data['acsUrl']) ? $data['acsUrl'] : null;
        $this->container['authenticationPath'] = isset($data['authenticationPath']) ? $data['authenticationPath'] : null;
        $this->container['authenticationTransactionId'] = isset($data['authenticationTransactionId']) ? $data['authenticationTransactionId'] : null;
        $this->container['cavv'] = isset($data['cavv']) ? $data['cavv'] : null;
        $this->container['cavvAlgorithm'] = isset($data['cavvAlgorithm']) ? $data['cavvAlgorithm'] : null;
        $this->container['challengeRequired'] = isset($data['challengeRequired']) ? $data['challengeRequired'] : null;
        $this->container['ecommerceIndicator'] = isset($data['ecommerceIndicator']) ? $data['ecommerceIndicator'] : null;
        $this->container['eci'] = isset($data['eci']) ? $data['eci'] : null;
        $this->container['eciRaw'] = isset($data['eciRaw']) ? $data['eciRaw'] : null;
        $this->container['pareq'] = isset($data['pareq']) ? $data['pareq'] : null;
        $this->container['paresStatus'] = isset($data['paresStatus']) ? $data['paresStatus'] : null;
        $this->container['proofXml'] = isset($data['proofXml']) ? $data['proofXml'] : null;
        $this->container['proxyPan'] = isset($data['proxyPan']) ? $data['proxyPan'] : null;
        $this->container['specificationVersion'] = isset($data['specificationVersion']) ? $data['specificationVersion'] : null;
        $this->container['ucafAuthenticationData'] = isset($data['ucafAuthenticationData']) ? $data['ucafAuthenticationData'] : null;
        $this->container['ucafCollectionIndicator'] = isset($data['ucafCollectionIndicator']) ? $data['ucafCollectionIndicator'] : null;
        $this->container['veresEnrolled'] = isset($data['veresEnrolled']) ? $data['veresEnrolled'] : null;
        $this->container['xid'] = isset($data['xid']) ? $data['xid'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['acsUrl']) && (strlen($this->container['acsUrl']) > 2048)) {
            $invalid_properties[] = "invalid value for 'acsUrl', the character length must be smaller than or equal to 2048.";
        }

        if (!is_null($this->container['authenticationTransactionId']) && (strlen($this->container['authenticationTransactionId']) > 20)) {
            $invalid_properties[] = "invalid value for 'authenticationTransactionId', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['cavv']) && (strlen($this->container['cavv']) > 255)) {
            $invalid_properties[] = "invalid value for 'cavv', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['cavvAlgorithm']) && (strlen($this->container['cavvAlgorithm']) > 1)) {
            $invalid_properties[] = "invalid value for 'cavvAlgorithm', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['ecommerceIndicator']) && (strlen($this->container['ecommerceIndicator']) > 255)) {
            $invalid_properties[] = "invalid value for 'ecommerceIndicator', the character length must be smaller than or equal to 255.";
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

        if (strlen($this->container['acsUrl']) > 2048) {
            return false;
        }
        if (strlen($this->container['authenticationTransactionId']) > 20) {
            return false;
        }
        if (strlen($this->container['cavv']) > 255) {
            return false;
        }
        if (strlen($this->container['cavvAlgorithm']) > 1) {
            return false;
        }
        if (strlen($this->container['ecommerceIndicator']) > 255) {
            return false;
        }
        return true;
    }


    /**
     * Gets acsUrl
     * @return string
     */
    public function getAcsUrl()
    {
        return $this->container['acsUrl'];
    }

    /**
     * Sets acsUrl
     * @param string $acsUrl URL for the card-issuing bank’s authentication form that you receive when the card is enrolled. The value can be very large.
     * @return $this
     */
    public function setAcsUrl($acsUrl)
    {
        if (!is_null($acsUrl) && (strlen($acsUrl) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $acsUrl when calling RiskV1AuthenticationsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 2048.');
        }

        $this->container['acsUrl'] = $acsUrl;

        return $this;
    }

    /**
     * Gets authenticationPath
     * @return string
     */
    public function getAuthenticationPath()
    {
        return $this->container['authenticationPath'];
    }

    /**
     * Sets authenticationPath
     * @param string $authenticationPath Indicates what displays to the customer during the authentication process. This field can contain one of these values: - `ADS`: (Card not enrolled) customer prompted to activate the card during the checkout process. - `ATTEMPTS`: (Attempts processing) Processing briefly displays before the checkout process is completed. - `ENROLLED`: (Card enrolled) the card issuer’s authentication window displays. - `UNKNOWN`: Card enrollment status cannot be determined. - `NOREDIRECT`: (Card not enrolled, authentication unavailable, or error occurred) nothing displays to the customer.  The following values can be returned if you are using rules-based payer authentication. - `RIBA`: The card-issuing bank supports risk-based authentication, but whether the cardholder is likely to be challenged cannot be determined. - `RIBA_PASS`: The card-issuing bank supports risk-based authentication and it is likely that the cardholder will not be challenged to provide credentials, also known as _silent authentication_.  For details about possible values, see `pa_enroll_authentication_path` field description and \"Rules-Based Payer Authentication\" in [CyberSource Payer Authentication Using the SCMP API.] (https://apps.cybersource.com/library/documentation/dev_guides/Payer_Authentication_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setAuthenticationPath($authenticationPath)
    {
        $this->container['authenticationPath'] = $authenticationPath;

        return $this;
    }

    /**
     * Gets authenticationTransactionId
     * @return string
     */
    public function getAuthenticationTransactionId()
    {
        return $this->container['authenticationTransactionId'];
    }

    /**
     * Sets authenticationTransactionId
     * @param string $authenticationTransactionId Payer authentication transaction identifier passed to link the check enrollment and validate authentication messages.
     * @return $this
     */
    public function setAuthenticationTransactionId($authenticationTransactionId)
    {
        if (!is_null($authenticationTransactionId) && (strlen($authenticationTransactionId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $authenticationTransactionId when calling RiskV1AuthenticationsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 20.');
        }

        $this->container['authenticationTransactionId'] = $authenticationTransactionId;

        return $this;
    }

    /**
     * Gets cavv
     * @return string
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     * @param string $cavv Unique identifier generated by the card-issuing bank for Visa, American Express, JCB, Diners Club, and Discover transactions after the customer is authenticated. The value is in base64. When you request the card authorization service, CyberSource automatically converts the value, not the field name, to the format required by your payment processor.
     * @return $this
     */
    public function setCavv($cavv)
    {
        if (!is_null($cavv) && (strlen($cavv) > 255)) {
            throw new \InvalidArgumentException('invalid length for $cavv when calling RiskV1AuthenticationsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 255.');
        }

        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets cavvAlgorithm
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->container['cavvAlgorithm'];
    }

    /**
     * Sets cavvAlgorithm
     * @param string $cavvAlgorithm Field that is returned only when the CAVV is generated, which occurs when paresStatus contains the values Y (successful authentication) or A (attempted authentication). If you use the ATOS processor, send the value of this field in the `cavv_algorithm` request field of the authorization service. This field contains one of these values: - `2`: Visa, American Express, JCB, Diners Club, and Discover - `3`: Mastercard
     * @return $this
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {
        if (!is_null($cavvAlgorithm) && (strlen($cavvAlgorithm) > 1)) {
            throw new \InvalidArgumentException('invalid length for $cavvAlgorithm when calling RiskV1AuthenticationsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 1.');
        }

        $this->container['cavvAlgorithm'] = $cavvAlgorithm;

        return $this;
    }

    /**
     * Gets challengeRequired
     * @return bool
     */
    public function getChallengeRequired()
    {
        return $this->container['challengeRequired'];
    }

    /**
     * Sets challengeRequired
     * @param bool $challengeRequired Indicates whether a challenge is required to complete authentication (region mandates).
     * @return $this
     */
    public function setChallengeRequired($challengeRequired)
    {
        $this->container['challengeRequired'] = $challengeRequired;

        return $this;
    }

    /**
     * Gets ecommerceIndicator
     * @return string
     */
    public function getEcommerceIndicator()
    {
        return $this->container['ecommerceIndicator'];
    }

    /**
     * Sets ecommerceIndicator
     * @param string $ecommerceIndicator Commerce indicator for cards not enrolled. This field contains one of these values: - `internet`: Card not enrolled, or card type not supported by payer authentication. No liability shift. - `js_attempted`: Card not enrolled, but attempt to authenticate is recorded. Liability shift. - `js_failure`: J/Secure directory service is not available. No liability shift. - `spa`: Mastercard card not enrolled in the SecureCode program. No liability shift. - `vbv_attempted`: Card not enrolled, but attempt to authenticate is recorded. Liability shift. - `vbv_failure`: For payment processor Barclays, Streamline, AIBMS, or FDC Germany, you receive this result if Visa’s directory service is not available. No liability shift.
     * @return $this
     */
    public function setEcommerceIndicator($ecommerceIndicator)
    {
        if (!is_null($ecommerceIndicator) && (strlen($ecommerceIndicator) > 255)) {
            throw new \InvalidArgumentException('invalid length for $ecommerceIndicator when calling RiskV1AuthenticationsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 255.');
        }

        $this->container['ecommerceIndicator'] = $ecommerceIndicator;

        return $this;
    }

    /**
     * Gets eci
     * @return string
     */
    public function getEci()
    {
        return $this->container['eci'];
    }

    /**
     * Sets eci
     * @param string $eci Note This field applies only to non-U.S-issued cards.  For enroll, Numeric electronic commerce indicator (ECI) returned only for Visa, American Express, JCB, Diners Club, and Discover transactions when the card is not enrolled. For more information, see \"Interpreting the Reply,\" page 22.  If you are not using the CyberSource payment services, you must send this value to your payment processor in the subsequent request for card authorization. This field contains one of these values: - `06`: The card can be enrolled. Liability shift. - `07`: The card cannot be enrolled. No liability shift.  For validate, Numeric electronic commerce indicator (ECI) returned only for Visa, American Express, JCB, Diners Club, and Discover transactions. The field is absent when authentication fails. You must send this value to your payment processor in the subsequent request for card authorization. This field contains one of these values: - `05`: Successful authentication - `06`: Authentication attempted - `07`: Failed authentication (No response from the merchant because of a problem.)
     * @return $this
     */
    public function setEci($eci)
    {
        $this->container['eci'] = $eci;

        return $this;
    }

    /**
     * Gets eciRaw
     * @return string
     */
    public function getEciRaw()
    {
        return $this->container['eciRaw'];
    }

    /**
     * Sets eciRaw
     * @param string $eciRaw ECI value that can be returned for Visa, Mastercard, American Express, JCB, Diners Club, and Discover. The field is absent when authentication fails. If your payment processor is Streamline, you must pass the value of this field instead of the value of `eci` or `ucafCollectionIndicator`.  This field can contain one of these values: - `01`: Authentication attempted (Mastercard) - `02`: Successful authentication (Mastercard) - `05`: Successful authentication (Visa, American Express, JCB, Diners Club, and Discover) - `06`: Authentication attempted (Visa, American Express, JCB, Diners Club, and Discover)
     * @return $this
     */
    public function setEciRaw($eciRaw)
    {
        $this->container['eciRaw'] = $eciRaw;

        return $this;
    }

    /**
     * Gets pareq
     * @return string
     */
    public function getPareq()
    {
        return $this->container['pareq'];
    }

    /**
     * Sets pareq
     * @param string $pareq Payer authentication request (PAReq) message that you need to forward to the ACS. The value can be very large. The value is in base64.
     * @return $this
     */
    public function setPareq($pareq)
    {
        $this->container['pareq'] = $pareq;

        return $this;
    }

    /**
     * Gets paresStatus
     * @return string
     */
    public function getParesStatus()
    {
        return $this->container['paresStatus'];
    }

    /**
     * Sets paresStatus
     * @param string $paresStatus Raw result of the authentication check. If you are configured for Asia, Middle East, and Africa Gateway Processing, you need to send the value of this field in your authorization request. This field can contain one of these values: - `A`: Proof of authentication attempt was generated. - `B`: Bypassed authentication. - `N`: Customer failed or canceled authentication. Transaction denied. - `R`: Authentication rejected (used for 3D Secure 2.0 transactions only) - `U`: Authentication not completed regardless of the reason. - `Y`: Customer was successfully authenticated.
     * @return $this
     */
    public function setParesStatus($paresStatus)
    {
        $this->container['paresStatus'] = $paresStatus;

        return $this;
    }

    /**
     * Gets proofXml
     * @return string
     */
    public function getProofXml()
    {
        return $this->container['proofXml'];
    }

    /**
     * Sets proofXml
     * @param string $proofXml Date and time of the enrollment check combined with the VEReq and VERes elements. If you ever need to show proof of enrollment checking, you may need to parse the string for the information required by the payment card company. The value can be very large. For details about possible values, see the `pa_enroll_proofxml` field description in [CyberSource Payer Authentication Using the SCMP API.] (https://apps.cybersource.com/library/documentation/dev_guides/Payer_Authentication_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) - For cards issued in the U.S. or Canada, Visa may require this data for specific merchant category codes. - For cards not issued in the U.S. or Canada, your bank may require this data as proof of enrollment checking for any payer authentication transaction that you re-present because of a chargeback.
     * @return $this
     */
    public function setProofXml($proofXml)
    {
        $this->container['proofXml'] = $proofXml;

        return $this;
    }

    /**
     * Gets proxyPan
     * @return string
     */
    public function getProxyPan()
    {
        return $this->container['proxyPan'];
    }

    /**
     * Sets proxyPan
     * @param string $proxyPan Encrypted version of the card number used in the payer authentication request message.
     * @return $this
     */
    public function setProxyPan($proxyPan)
    {
        $this->container['proxyPan'] = $proxyPan;

        return $this;
    }

    /**
     * Gets specificationVersion
     * @return string
     */
    public function getSpecificationVersion()
    {
        return $this->container['specificationVersion'];
    }

    /**
     * Sets specificationVersion
     * @param string $specificationVersion This field contains the 3D Secure version that was used to process the transaction. For example, 1.0.2 or 2.0.0.
     * @return $this
     */
    public function setSpecificationVersion($specificationVersion)
    {
        $this->container['specificationVersion'] = $specificationVersion;

        return $this;
    }

    /**
     * Gets ucafAuthenticationData
     * @return string
     */
    public function getUcafAuthenticationData()
    {
        return $this->container['ucafAuthenticationData'];
    }

    /**
     * Sets ucafAuthenticationData
     * @param string $ucafAuthenticationData AAV is a unique identifier generated by the cardissuing bank for Mastercard SecureCode transactions after the customer is authenticated. The value is in base64. Include the data in the card authorization request.
     * @return $this
     */
    public function setUcafAuthenticationData($ucafAuthenticationData)
    {
        $this->container['ucafAuthenticationData'] = $ucafAuthenticationData;

        return $this;
    }

    /**
     * Gets ucafCollectionIndicator
     * @return float
     */
    public function getUcafCollectionIndicator()
    {
        return $this->container['ucafCollectionIndicator'];
    }

    /**
     * Sets ucafCollectionIndicator
     * @param float $ucafCollectionIndicator For enroll, Returned only for Mastercard transactions. Indicates that authentication is not required because the customer is not enrolled. Add the value of this field to the authorization field ucaf_collection_indicator. This field can contain these values: 0, 1.  For validate, Numeric electronic commerce indicator (ECI) returned only for Mastercard SecureCode transactions. The field is absent when authentication fails. You must send this value to your payment processor in the request for card authorization. This field contain one of these values: - `0`: Authentication data not collected, and customer authentication was not completed. - `1`: Authentication data not collected because customer authentication was not completed. - `2`: Authentication data collected because customer completed authentication.
     * @return $this
     */
    public function setUcafCollectionIndicator($ucafCollectionIndicator)
    {
        $this->container['ucafCollectionIndicator'] = $ucafCollectionIndicator;

        return $this;
    }

    /**
     * Gets veresEnrolled
     * @return string
     */
    public function getVeresEnrolled()
    {
        return $this->container['veresEnrolled'];
    }

    /**
     * Sets veresEnrolled
     * @param string $veresEnrolled Result of the enrollment check. This field can contain one of these values: - `Y`: Card enrolled or can be enrolled; you must authenticate. Liability shift. - `N`: Card not enrolled; proceed with authorization. Liability shift. - `U`: Unable to authenticate regardless of the reason. No liability shift.  **Note** This field only applies to the Asia, Middle East, and Africa Gateway. If you are configured for this processor, you must send the value of this field in your authorization request.  The following value can be returned if you are using rules-based Payer Authentication: - `B`: Indicates that authentication was bypassed.  For details, see `pa_enroll_veres_enrolled` field description in [CyberSource Payer Authentication Using the SCMP API.] (https://apps.cybersource.com/library/documentation/dev_guides/Payer_Authentication_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setVeresEnrolled($veresEnrolled)
    {
        $this->container['veresEnrolled'] = $veresEnrolled;

        return $this;
    }

    /**
     * Gets xid
     * @return string
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     * @param string $xid Transaction identifier generated by CyberSource for successful enrollment or validation checks. Use this value, which is in base64, to match an outgoing PAReq with an incoming PARes. CyberSource forwards the XID with the card authorization service to these payment processors in these cases: - Barclays - Streamline (when the **ecommerceIndicator**`=spa`)
     * @return $this
     */
    public function setXid($xid)
    {
        $this->container['xid'] = $xid;

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


