<?php
/**
 * Ptsv2paymentsProcessingInformationAuthorizationOptions
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
 * Ptsv2paymentsProcessingInformationAuthorizationOptions Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsProcessingInformationAuthorizationOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_processingInformation_authorizationOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authType' => 'string',
        'verbalAuthCode' => 'string',
        'verbalAuthTransactionId' => 'string',
        'authIndicator' => 'string',
        'partialAuthIndicator' => 'bool',
        'balanceInquiry' => 'bool',
        'ignoreAvsResult' => 'bool',
        'declineAvsFlags' => 'string[]',
        'ignoreCvResult' => 'bool',
        'initiator' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiator',
        'billPayment' => 'bool',
        'billPaymentType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authType' => null,
        'verbalAuthCode' => null,
        'verbalAuthTransactionId' => null,
        'authIndicator' => null,
        'partialAuthIndicator' => null,
        'balanceInquiry' => null,
        'ignoreAvsResult' => null,
        'declineAvsFlags' => null,
        'ignoreCvResult' => null,
        'initiator' => null,
        'billPayment' => null,
        'billPaymentType' => null
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
        'authType' => 'authType',
        'verbalAuthCode' => 'verbalAuthCode',
        'verbalAuthTransactionId' => 'verbalAuthTransactionId',
        'authIndicator' => 'authIndicator',
        'partialAuthIndicator' => 'partialAuthIndicator',
        'balanceInquiry' => 'balanceInquiry',
        'ignoreAvsResult' => 'ignoreAvsResult',
        'declineAvsFlags' => 'declineAvsFlags',
        'ignoreCvResult' => 'ignoreCvResult',
        'initiator' => 'initiator',
        'billPayment' => 'billPayment',
        'billPaymentType' => 'billPaymentType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authType' => 'setAuthType',
        'verbalAuthCode' => 'setVerbalAuthCode',
        'verbalAuthTransactionId' => 'setVerbalAuthTransactionId',
        'authIndicator' => 'setAuthIndicator',
        'partialAuthIndicator' => 'setPartialAuthIndicator',
        'balanceInquiry' => 'setBalanceInquiry',
        'ignoreAvsResult' => 'setIgnoreAvsResult',
        'declineAvsFlags' => 'setDeclineAvsFlags',
        'ignoreCvResult' => 'setIgnoreCvResult',
        'initiator' => 'setInitiator',
        'billPayment' => 'setBillPayment',
        'billPaymentType' => 'setBillPaymentType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authType' => 'getAuthType',
        'verbalAuthCode' => 'getVerbalAuthCode',
        'verbalAuthTransactionId' => 'getVerbalAuthTransactionId',
        'authIndicator' => 'getAuthIndicator',
        'partialAuthIndicator' => 'getPartialAuthIndicator',
        'balanceInquiry' => 'getBalanceInquiry',
        'ignoreAvsResult' => 'getIgnoreAvsResult',
        'declineAvsFlags' => 'getDeclineAvsFlags',
        'ignoreCvResult' => 'getIgnoreCvResult',
        'initiator' => 'getInitiator',
        'billPayment' => 'getBillPayment',
        'billPaymentType' => 'getBillPaymentType'
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

    const DECLINE_AVS_FLAGS_D = 'D';
    const DECLINE_AVS_FLAGS_A = 'A';
    const DECLINE_AVS_FLAGS_V = 'V';
    const DECLINE_AVS_FLAGS_S = 'S';
    const DECLINE_AVS_FLAGS_N = 'N';
    const DECLINE_AVS_FLAGS_O = 'O';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDeclineAvsFlagsAllowableValues()
    {
        return [
            self::DECLINE_AVS_FLAGS_D,
            self::DECLINE_AVS_FLAGS_A,
            self::DECLINE_AVS_FLAGS_V,
            self::DECLINE_AVS_FLAGS_S,
            self::DECLINE_AVS_FLAGS_N,
            self::DECLINE_AVS_FLAGS_O,
        ];
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
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['verbalAuthCode'] = isset($data['verbalAuthCode']) ? $data['verbalAuthCode'] : null;
        $this->container['verbalAuthTransactionId'] = isset($data['verbalAuthTransactionId']) ? $data['verbalAuthTransactionId'] : null;
        $this->container['authIndicator'] = isset($data['authIndicator']) ? $data['authIndicator'] : null;
        $this->container['partialAuthIndicator'] = isset($data['partialAuthIndicator']) ? $data['partialAuthIndicator'] : null;
        $this->container['balanceInquiry'] = isset($data['balanceInquiry']) ? $data['balanceInquiry'] : null;
        $this->container['ignoreAvsResult'] = isset($data['ignoreAvsResult']) ? $data['ignoreAvsResult'] : false;
        $this->container['declineAvsFlags'] = isset($data['declineAvsFlags']) ? $data['declineAvsFlags'] : null;
        $this->container['ignoreCvResult'] = isset($data['ignoreCvResult']) ? $data['ignoreCvResult'] : false;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['billPayment'] = isset($data['billPayment']) ? $data['billPayment'] : null;
        $this->container['billPaymentType'] = isset($data['billPaymentType']) ? $data['billPaymentType'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['authType']) && (strlen($this->container['authType']) > 15)) {
            $invalid_properties[] = "invalid value for 'authType', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['verbalAuthCode']) && (strlen($this->container['verbalAuthCode']) > 7)) {
            $invalid_properties[] = "invalid value for 'verbalAuthCode', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['verbalAuthTransactionId']) && (strlen($this->container['verbalAuthTransactionId']) > 15)) {
            $invalid_properties[] = "invalid value for 'verbalAuthTransactionId', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['authIndicator']) && (strlen($this->container['authIndicator']) > 1)) {
            $invalid_properties[] = "invalid value for 'authIndicator', the character length must be smaller than or equal to 1.";
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

        if (strlen($this->container['authType']) > 15) {
            return false;
        }
        if (strlen($this->container['verbalAuthCode']) > 7) {
            return false;
        }
        if (strlen($this->container['verbalAuthTransactionId']) > 15) {
            return false;
        }
        if (strlen($this->container['authIndicator']) > 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets authType
     * @return string
     */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
     * Sets authType
     * @param string $authType Authorization type. Possible values:   - `AUTOCAPTURE`: automatic capture.  - `STANDARDCAPTURE`: standard capture.  - `VERBAL`: forced capture. Include it in the payment request for a forced capture. Include it in the capture request for a verbal payment.  #### Asia, Middle East, and Africa Gateway; Cielo; Comercio Latino; and CyberSource Latin American Processing Set this field to `AUTOCAPTURE` and include it in a bundled request to indicate that you are requesting an automatic capture. If your account is configured to enable automatic captures, set this field to `STANDARDCAPTURE` and include it in a standard authorization or bundled request to indicate that you are overriding an automatic capture. For more information, see the `auth_type` field description in [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  #### Forced Capture Set this field to `VERBAL` and include it in the authorization request to indicate that you are performing a forced capture; therefore, you receive the authorization code outside the CyberSource system.  For more information, see \"Forced Captures\" in [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm).  #### Verbal Authorization Set this field to `VERBAL` and include it in the capture request to indicate that the request is for a verbal authorization. For more information, see \"Verbal Authorizations\" in [Credit Card Services Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html).  For processor-specific information, see the `auth_type` field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setAuthType($authType)
    {
        if (!is_null($authType) && (strlen($authType) > 15)) {
            throw new \InvalidArgumentException('invalid length for $authType when calling Ptsv2paymentsProcessingInformationAuthorizationOptions., must be smaller than or equal to 15.');
        }

        $this->container['authType'] = $authType;

        return $this;
    }

    /**
     * Gets verbalAuthCode
     * @return string
     */
    public function getVerbalAuthCode()
    {
        return $this->container['verbalAuthCode'];
    }

    /**
     * Sets verbalAuthCode
     * @param string $verbalAuthCode Authorization code.  #### Forced Capture Use this field to send the authorization code you received from a payment that you authorized outside the CyberSource system.  #### Verbal Authorization Use this field in CAPTURE API to send the verbally received authorization code.  For processor-specific information, see the `auth_code` field description in [Credit Card Services Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html).
     * @return $this
     */
    public function setVerbalAuthCode($verbalAuthCode)
    {
        if (!is_null($verbalAuthCode) && (strlen($verbalAuthCode) > 7)) {
            throw new \InvalidArgumentException('invalid length for $verbalAuthCode when calling Ptsv2paymentsProcessingInformationAuthorizationOptions., must be smaller than or equal to 7.');
        }

        $this->container['verbalAuthCode'] = $verbalAuthCode;

        return $this;
    }

    /**
     * Gets verbalAuthTransactionId
     * @return string
     */
    public function getVerbalAuthTransactionId()
    {
        return $this->container['verbalAuthTransactionId'];
    }

    /**
     * Sets verbalAuthTransactionId
     * @param string $verbalAuthTransactionId Transaction ID (TID).  #### FDMS South This field is required for verbal authorizations and forced captures with the American Express card type to comply with the CAPN requirements: - Forced capture: Obtain the value for this field from the authorization response. - Verbal authorization: You cannot obtain a value for this field so CyberSource uses the default value of `000000000000000` (15 zeros).  For more information about using this default value, see \"Verbal Authorizations\" in [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setVerbalAuthTransactionId($verbalAuthTransactionId)
    {
        if (!is_null($verbalAuthTransactionId) && (strlen($verbalAuthTransactionId) > 15)) {
            throw new \InvalidArgumentException('invalid length for $verbalAuthTransactionId when calling Ptsv2paymentsProcessingInformationAuthorizationOptions., must be smaller than or equal to 15.');
        }

        $this->container['verbalAuthTransactionId'] = $verbalAuthTransactionId;

        return $this;
    }

    /**
     * Gets authIndicator
     * @return string
     */
    public function getAuthIndicator()
    {
        return $this->container['authIndicator'];
    }

    /**
     * Sets authIndicator
     * @param string $authIndicator Flag that specifies the purpose of the authorization.  Possible values:  - **0**: Preauthorization  - **1**: Final authorization  To set the default for this field, contact CyberSource Customer Support. For details, see \"Final Authorization Indicator\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm).  Barclays and Elavon The default for Barclays and Elavon is 1 (final authorization). To change the default for this field, contact CyberSource Customer Support.  CyberSource through VisaNet When the value for this field is 0, it corresponds to the following data in the TC 33 capture file5:  - Record: CP01 TCR0  - Position: 164  - Field: Additional Authorization Indicators When the value for this field is 1, it does not correspond to any data in the TC 33 capture file.  For processor-specific information, see the `auth_indicator` field in [Credit Card Services Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html).
     * @return $this
     */
    public function setAuthIndicator($authIndicator)
    {
        if (!is_null($authIndicator) && (strlen($authIndicator) > 1)) {
            throw new \InvalidArgumentException('invalid length for $authIndicator when calling Ptsv2paymentsProcessingInformationAuthorizationOptions., must be smaller than or equal to 1.');
        }

        $this->container['authIndicator'] = $authIndicator;

        return $this;
    }

    /**
     * Gets partialAuthIndicator
     * @return bool
     */
    public function getPartialAuthIndicator()
    {
        return $this->container['partialAuthIndicator'];
    }

    /**
     * Sets partialAuthIndicator
     * @param bool $partialAuthIndicator Flag that indicates whether the transaction is enabled for partial authorization or not. When your request includes this field, this value overrides the information in your CyberSource account.  For processor-specific information, see the `auth_partial_auth_indicator` field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)  **CyberSource through VisaNet**\\ To set the default for this field, contact CyberSource Customer Support. The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCR0 - Position: 164 - Field: Additional Authorization Indicators  Possible values: - **true** Enable the transaction for partial authorization. - **false** Do not enable the transaction for partial authorization.
     * @return $this
     */
    public function setPartialAuthIndicator($partialAuthIndicator)
    {
        $this->container['partialAuthIndicator'] = $partialAuthIndicator;

        return $this;
    }

    /**
     * Gets balanceInquiry
     * @return bool
     */
    public function getBalanceInquiry()
    {
        return $this->container['balanceInquiry'];
    }

    /**
     * Sets balanceInquiry
     * @param bool $balanceInquiry Flag that indicates whether to return balance information.  Possible values: - **true** - **false**
     * @return $this
     */
    public function setBalanceInquiry($balanceInquiry)
    {
        $this->container['balanceInquiry'] = $balanceInquiry;

        return $this;
    }

    /**
     * Gets ignoreAvsResult
     * @return bool
     */
    public function getIgnoreAvsResult()
    {
        return $this->container['ignoreAvsResult'];
    }

    /**
     * Sets ignoreAvsResult
     * @param bool $ignoreAvsResult Flag that indicates whether to allow the capture service to run, even when the payment receives an AVS decline.  Possible values: - **true**  Ignore the results of AVS checking and run the capture service. - **false**  (default): If the authorization receives an AVS decline, do not run the capture service.
     * @return $this
     */
    public function setIgnoreAvsResult($ignoreAvsResult)
    {
        $this->container['ignoreAvsResult'] = $ignoreAvsResult;

        return $this;
    }

    /**
     * Gets declineAvsFlags
     * @return string[]
     */
    public function getDeclineAvsFlags()
    {
        return $this->container['declineAvsFlags'];
    }

    /**
     * Sets declineAvsFlags
     * @param string[] $declineAvsFlags Comma-separated list of AVS flags that cause the reply flag `DAVSNO` to be returned.  **Important** To receive declines for the AVS code `N`, you must include the value `N` in the comma-separated list.  ### AVS Codes for Cielo 3.0 and CyberSource Latin American Processing  **Note** CyberSource Latin American Processing is the name of a specific processing connection that CyberSource supports. In the CyberSource API documentation, CyberSource Latin American Processing does not refer to the general topic of processing in Latin America. The information in this section is for the specific processing connection called CyberSource Latin American Processing. It is not for any other Latin American processors that CyberSource supports.  |AVS Code|Description| |--- |--- | |D|Partial match: postal code and address match.| |E|Not supported: AVS is not supported for this card type. _or_ Invalid: the acquirer returned an unrecognized value for the AVS response.| |F|Partial match: postal code matches, but CPF and address do not match.*| |G|Not supported: AVS not supported or not verified.| |I|No match: AVS information is not available.| |K|Partial match: CPF matches, but postal code and address do not match.*| |L|Partial match: postal code and CPF match, but address does not match.*| |N|No match: postal code, CPF, and address do not match.*| |O|Partial match: CPF and address match, but postal code does not match.*| |R|Not supported: your implementation does not support AVS _or_ System unavailable.| |T|Partial match: address matches, but postal code and CPF do not match.*| |V|Match: postal code, CPF, and address match.*| |* CPF (Cadastro de Pessoas Fisicas) is required only for Redecard in Brazil.||  ### AVS Codes for All Other Processors  **Note** The list of AVS codes for all other processors follows these descriptions of the processor-specific information for these codes.  #### American Express Cards For American Express cards only, you can receive Visa and CyberSource AVS codes in addition to the American Express AVS codes.  **Note** For CyberSource through VisaNet, the American Express AVS codes are converted to Visa AVS codes before they are returned to you. As a result, you will not receive American Express AVS codes for the American Express card type.<br/><br/>  _American Express Card codes_: `F`, `H`, `K`, `L`, `O`, `T`, `V`  #### Domestic and International Visa Cards The international and domestic alphabetic AVS codes are the Visa standard AVS codes. CyberSource maps the standard AVS return codes for other types of payment cards, including American Express cards, to the Visa standard AVS codes.  AVS is considered either domestic or international, depending on the location of the bank that issued the customer's payment card: - When the bank is in the U.S., the AVS is domestic. - When the bank is outside the U.S., the AVS is international.  You should be prepared to handle both domestic and international AVS result codes: - For international cards, you can receive domestic AVS codes in addition to the international AVS codes. - For domestic cards, you can receive international AVS codes in addition to the domestic AVS codes.  _International Visa Codes_: `B`, `C`, `D`, `G`, `I`, `M`, `P`  _Domestic Visa Codes_: `A`, `E`,`N`, `R`, `S`, `U`, `W`, `X`, `Y`, `Z`  #### CyberSource Codes The numeric AVS codes are created by CyberSource and are not standard Visa codes. These AVS codes can be returned for any card type.  _CyberSource Codes_: `1`, `2`, `3`, `4`  ### Table of AVS Codes for All Other Processors  |AVS Code|Description| |--- |--- | |A|Partial match: street address matches, but 5-digit and 9-digit postal codes do not match.| |B|Partial match: street address matches, but postal code is not verified. Returned only for Visa cards not issued in the U.S.| |C|No match: street address and postal code do not match. Returned only for Visa cards not issued in the U.S.| |D & M|Match: street address and postal code match. Returned only for Visa cards not issued in the U.S.| |E|Invalid: AVS data is invalid or AVS is not allowed for this card type.| |F|Partial match: card member’s name does not match, but billing postal code matches.| |G|Not supported: issuing bank outside the U.S. does not support AVS.| |H|Partial match: card member’s name does not match, but street address and postal code match. Returned only for the American Express card type.| |I|No match: address not verified. Returned only for Visa cards not issued in the U.S.| |K|Partial match: card member’s name matches, but billing address and billing postal code do not match. Returned only for the American Express card type.| |L|Partial match: card member’s name and billing postal code match, but billing address does not match. Returned only for the American Express card type.| |M|See the entry for D & M.| |N|No match: one of the following: street address and postal code do not match _or_ (American Express card type only) card member’s name, street address, and postal code do not match.| |O|Partial match: card member’s name and billing address match, but billing postal code does not match. Returned only for the American Express card type.| |P|Partial match: postal code matches, but street address not verified. Returned only for Visa cards not issued in the U.S.| |R|System unavailable.| |S|Not supported: issuing bank in the U.S. does not support AVS.| |T|Partial match: card member’s name does not match, but street address matches. Returned only for the American Express card type.| |U|System unavailable: address information unavailable for one of these reasons: The U.S. bank does not support AVS outside the U.S. _or_ The AVS in a U.S. bank is not functioning properly.| |V|Match: card member’s name, billing address, and billing postal code match. Returned only for the American Express card type.| |W|Partial match: street address does not match, but 9-digit postal code matches.| |X|Match: street address and 9-digit postal code match.| |Y|Match: street address and 5-digit postal code match.| |Z|Partial match: street address does not match, but 5-digit postal code matches.| |1|Not supported: one of the following: AVS is not supported for this processor or card type _or_ AVS is disabled for your CyberSource account. To enable AVS, contact CyberSource Customer Support.| |2|Unrecognized: the processor returned an unrecognized value for the AVS response.| |3|Match: address is confirmed. Returned only for PayPal Express Checkout.| |4|No match: address is not confirmed. Returned only for PayPal Express Checkout.| |5|No match: no AVS code was returned by the processor.|
     * @return $this
     */
    public function setDeclineAvsFlags($declineAvsFlags)
    {
        $allowed_values = $this->getDeclineAvsFlagsAllowableValues();
        if (!is_null($declineAvsFlags) && array_diff($declineAvsFlags, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'declineAvsFlags', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['declineAvsFlags'] = $declineAvsFlags;

        return $this;
    }

    /**
     * Gets ignoreCvResult
     * @return bool
     */
    public function getIgnoreCvResult()
    {
        return $this->container['ignoreCvResult'];
    }

    /**
     * Sets ignoreCvResult
     * @param bool $ignoreCvResult Flag that indicates whether to allow the capture service to run even when the payment receives a CVN decline.  Possible values: - **true**  Ignore the results of CVN checking and run the capture service. - **false**  (default) If the authorization receives a CVN decline, do not run the capture service.
     * @return $this
     */
    public function setIgnoreCvResult($ignoreCvResult)
    {
        $this->container['ignoreCvResult'] = $ignoreCvResult;

        return $this;
    }

    /**
     * Gets initiator
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiator
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiator $initiator
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets billPayment
     * @return bool
     */
    public function getBillPayment()
    {
        return $this->container['billPayment'];
    }

    /**
     * Sets billPayment
     * @param bool $billPayment Flag that indicates that this is a payment for a bill or for an existing contractual loan. For processor-specific details, see the `bill_payment` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  Possible values: - `true`: Bill payment or loan payment. - `false` (default): Not a bill payment or loan payment.
     * @return $this
     */
    public function setBillPayment($billPayment)
    {
        $this->container['billPayment'] = $billPayment;

        return $this;
    }

    /**
     * Gets billPaymentType
     * @return string
     */
    public function getBillPaymentType()
    {
        return $this->container['billPaymentType'];
    }

    /**
     * Sets billPaymentType
     * @param string $billPaymentType Reason for the payment.  Possible values: - 001: Utility payment - 002: Government services - 003: Mobile phone top-up - 004: Coupon payment  The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR0 - Position: 48-50 - Field: Bill Payment Transaction Type Identifier  This field is supported only for bill payments in Brazil with Mastercard on CyberSource through VisaNet.  **Note** For details about Mastercard bill payments or bill payments with Visa, see `bill_payment_type` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setBillPaymentType($billPaymentType)
    {
        $this->container['billPaymentType'] = $billPaymentType;

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


