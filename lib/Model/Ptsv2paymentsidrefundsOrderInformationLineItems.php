<?php
/**
 * Ptsv2paymentsidrefundsOrderInformationLineItems
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
 * Ptsv2paymentsidrefundsOrderInformationLineItems Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsidrefundsOrderInformationLineItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentsidrefunds_orderInformation_lineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productCode' => 'string',
        'productName' => 'string',
        'productSku' => 'string',
        'quantity' => 'float',
        'unitPrice' => 'string',
        'unitOfMeasure' => 'string',
        'totalAmount' => 'string',
        'taxAmount' => 'string',
        'taxRate' => 'string',
        'taxAppliedAfterDiscount' => 'string',
        'taxStatusIndicator' => 'string',
        'taxTypeCode' => 'string',
        'amountIncludesTax' => 'bool',
        'typeOfSupply' => 'string',
        'commodityCode' => 'string',
        'discountAmount' => 'string',
        'discountApplied' => 'bool',
        'discountRate' => 'string',
        'invoiceNumber' => 'string',
        'taxDetails' => '\CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsTaxDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productCode' => null,
        'productName' => null,
        'productSku' => null,
        'quantity' => null,
        'unitPrice' => null,
        'unitOfMeasure' => null,
        'totalAmount' => null,
        'taxAmount' => null,
        'taxRate' => null,
        'taxAppliedAfterDiscount' => null,
        'taxStatusIndicator' => null,
        'taxTypeCode' => null,
        'amountIncludesTax' => null,
        'typeOfSupply' => null,
        'commodityCode' => null,
        'discountAmount' => null,
        'discountApplied' => null,
        'discountRate' => null,
        'invoiceNumber' => null,
        'taxDetails' => null
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
        'productCode' => 'productCode',
        'productName' => 'productName',
        'productSku' => 'productSku',
        'quantity' => 'quantity',
        'unitPrice' => 'unitPrice',
        'unitOfMeasure' => 'unitOfMeasure',
        'totalAmount' => 'totalAmount',
        'taxAmount' => 'taxAmount',
        'taxRate' => 'taxRate',
        'taxAppliedAfterDiscount' => 'taxAppliedAfterDiscount',
        'taxStatusIndicator' => 'taxStatusIndicator',
        'taxTypeCode' => 'taxTypeCode',
        'amountIncludesTax' => 'amountIncludesTax',
        'typeOfSupply' => 'typeOfSupply',
        'commodityCode' => 'commodityCode',
        'discountAmount' => 'discountAmount',
        'discountApplied' => 'discountApplied',
        'discountRate' => 'discountRate',
        'invoiceNumber' => 'invoiceNumber',
        'taxDetails' => 'taxDetails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'productCode' => 'setProductCode',
        'productName' => 'setProductName',
        'productSku' => 'setProductSku',
        'quantity' => 'setQuantity',
        'unitPrice' => 'setUnitPrice',
        'unitOfMeasure' => 'setUnitOfMeasure',
        'totalAmount' => 'setTotalAmount',
        'taxAmount' => 'setTaxAmount',
        'taxRate' => 'setTaxRate',
        'taxAppliedAfterDiscount' => 'setTaxAppliedAfterDiscount',
        'taxStatusIndicator' => 'setTaxStatusIndicator',
        'taxTypeCode' => 'setTaxTypeCode',
        'amountIncludesTax' => 'setAmountIncludesTax',
        'typeOfSupply' => 'setTypeOfSupply',
        'commodityCode' => 'setCommodityCode',
        'discountAmount' => 'setDiscountAmount',
        'discountApplied' => 'setDiscountApplied',
        'discountRate' => 'setDiscountRate',
        'invoiceNumber' => 'setInvoiceNumber',
        'taxDetails' => 'setTaxDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'productCode' => 'getProductCode',
        'productName' => 'getProductName',
        'productSku' => 'getProductSku',
        'quantity' => 'getQuantity',
        'unitPrice' => 'getUnitPrice',
        'unitOfMeasure' => 'getUnitOfMeasure',
        'totalAmount' => 'getTotalAmount',
        'taxAmount' => 'getTaxAmount',
        'taxRate' => 'getTaxRate',
        'taxAppliedAfterDiscount' => 'getTaxAppliedAfterDiscount',
        'taxStatusIndicator' => 'getTaxStatusIndicator',
        'taxTypeCode' => 'getTaxTypeCode',
        'amountIncludesTax' => 'getAmountIncludesTax',
        'typeOfSupply' => 'getTypeOfSupply',
        'commodityCode' => 'getCommodityCode',
        'discountAmount' => 'getDiscountAmount',
        'discountApplied' => 'getDiscountApplied',
        'discountRate' => 'getDiscountRate',
        'invoiceNumber' => 'getInvoiceNumber',
        'taxDetails' => 'getTaxDetails'
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
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productSku'] = isset($data['productSku']) ? $data['productSku'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['unitOfMeasure'] = isset($data['unitOfMeasure']) ? $data['unitOfMeasure'] : null;
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['taxRate'] = isset($data['taxRate']) ? $data['taxRate'] : null;
        $this->container['taxAppliedAfterDiscount'] = isset($data['taxAppliedAfterDiscount']) ? $data['taxAppliedAfterDiscount'] : null;
        $this->container['taxStatusIndicator'] = isset($data['taxStatusIndicator']) ? $data['taxStatusIndicator'] : null;
        $this->container['taxTypeCode'] = isset($data['taxTypeCode']) ? $data['taxTypeCode'] : null;
        $this->container['amountIncludesTax'] = isset($data['amountIncludesTax']) ? $data['amountIncludesTax'] : null;
        $this->container['typeOfSupply'] = isset($data['typeOfSupply']) ? $data['typeOfSupply'] : null;
        $this->container['commodityCode'] = isset($data['commodityCode']) ? $data['commodityCode'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['discountApplied'] = isset($data['discountApplied']) ? $data['discountApplied'] : null;
        $this->container['discountRate'] = isset($data['discountRate']) ? $data['discountRate'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['productCode']) && (strlen($this->container['productCode']) > 255)) {
            $invalid_properties[] = "invalid value for 'productCode', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['productName']) && (strlen($this->container['productName']) > 255)) {
            $invalid_properties[] = "invalid value for 'productName', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['productSku']) && (strlen($this->container['productSku']) > 255)) {
            $invalid_properties[] = "invalid value for 'productSku', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] > 9999999999)) {
            $invalid_properties[] = "invalid value for 'quantity', must be smaller than or equal to 9999999999.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['unitPrice']) && (strlen($this->container['unitPrice']) > 15)) {
            $invalid_properties[] = "invalid value for 'unitPrice', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['unitOfMeasure']) && (strlen($this->container['unitOfMeasure']) > 12)) {
            $invalid_properties[] = "invalid value for 'unitOfMeasure', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['totalAmount']) && (strlen($this->container['totalAmount']) > 13)) {
            $invalid_properties[] = "invalid value for 'totalAmount', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['taxAmount']) && (strlen($this->container['taxAmount']) > 15)) {
            $invalid_properties[] = "invalid value for 'taxAmount', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['taxRate']) && (strlen($this->container['taxRate']) > 7)) {
            $invalid_properties[] = "invalid value for 'taxRate', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['taxAppliedAfterDiscount']) && (strlen($this->container['taxAppliedAfterDiscount']) > 1)) {
            $invalid_properties[] = "invalid value for 'taxAppliedAfterDiscount', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['taxStatusIndicator']) && (strlen($this->container['taxStatusIndicator']) > 1)) {
            $invalid_properties[] = "invalid value for 'taxStatusIndicator', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['taxTypeCode']) && (strlen($this->container['taxTypeCode']) > 4)) {
            $invalid_properties[] = "invalid value for 'taxTypeCode', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['typeOfSupply']) && (strlen($this->container['typeOfSupply']) > 2)) {
            $invalid_properties[] = "invalid value for 'typeOfSupply', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['commodityCode']) && (strlen($this->container['commodityCode']) > 15)) {
            $invalid_properties[] = "invalid value for 'commodityCode', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['discountAmount']) && (strlen($this->container['discountAmount']) > 13)) {
            $invalid_properties[] = "invalid value for 'discountAmount', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['discountRate']) && (strlen($this->container['discountRate']) > 6)) {
            $invalid_properties[] = "invalid value for 'discountRate', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['invoiceNumber']) && (strlen($this->container['invoiceNumber']) > 23)) {
            $invalid_properties[] = "invalid value for 'invoiceNumber', the character length must be smaller than or equal to 23.";
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

        if (strlen($this->container['productCode']) > 255) {
            return false;
        }
        if (strlen($this->container['productName']) > 255) {
            return false;
        }
        if (strlen($this->container['productSku']) > 255) {
            return false;
        }
        if ($this->container['quantity'] > 9999999999) {
            return false;
        }
        if ($this->container['quantity'] < 1) {
            return false;
        }
        if (strlen($this->container['unitPrice']) > 15) {
            return false;
        }
        if (strlen($this->container['unitOfMeasure']) > 12) {
            return false;
        }
        if (strlen($this->container['totalAmount']) > 13) {
            return false;
        }
        if (strlen($this->container['taxAmount']) > 15) {
            return false;
        }
        if (strlen($this->container['taxRate']) > 7) {
            return false;
        }
        if (strlen($this->container['taxAppliedAfterDiscount']) > 1) {
            return false;
        }
        if (strlen($this->container['taxStatusIndicator']) > 1) {
            return false;
        }
        if (strlen($this->container['taxTypeCode']) > 4) {
            return false;
        }
        if (strlen($this->container['typeOfSupply']) > 2) {
            return false;
        }
        if (strlen($this->container['commodityCode']) > 15) {
            return false;
        }
        if (strlen($this->container['discountAmount']) > 13) {
            return false;
        }
        if (strlen($this->container['discountRate']) > 6) {
            return false;
        }
        if (strlen($this->container['invoiceNumber']) > 23) {
            return false;
        }
        return true;
    }


    /**
     * Gets productCode
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     * @param string $productCode Type of product. This value is used to determine the category that the product is in: electronic, handling, physical, service, or shipping. The default value is **default**. If you are performing an authorization transaction (`processingOptions.capture` is set to `false`), and you set this field to a value other than default or any of the values related to shipping and handling, then the fields `quantity`, `productName`, and `productSku` are required. It can also have a value of \"gift_card\".  For details, see the `product_code` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setProductCode($productCode)
    {
        if (!is_null($productCode) && (strlen($productCode) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productCode when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets productName
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     * @param string $productName For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not set to `default` or one of the other values that are related to shipping and/or handling.
     * @return $this
     */
    public function setProductName($productName)
    {
        if (!is_null($productName) && (strlen($productName) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productName when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets productSku
     * @return string
     */
    public function getProductSku()
    {
        return $this->container['productSku'];
    }

    /**
     * Sets productSku
     * @param string $productSku Stock Keeping Unit (SKU) code for the product.  For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when _orderInformation.lineItems[].productCode_ is not set to **default** or one of the other values that are related to shipping and/or handling.
     * @return $this
     */
    public function setProductSku($productSku)
    {
        if (!is_null($productSku) && (strlen($productSku) > 255)) {
            throw new \InvalidArgumentException('invalid length for $productSku when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 255.');
        }

        $this->container['productSku'] = $productSku;

        return $this;
    }

    /**
     * Gets quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param float $quantity Number of units for this order.  The default is `1`. For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when _orderInformation.lineItems[].productCode_ is not set to **default** or one of the other values that are related to shipping and/or handling.  When orderInformation.lineItems[].productCode is \"gift_card\", this is the total count of individual prepaid gift cards purchased.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity > 9999999999)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 9999999999.');
        }
        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitPrice
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     * @param string $unitPrice Per-item price of the product. This value cannot be negative. You can include a decimal point (.), but you cannot include any other special characters. CyberSource truncates the amount to the correct number of decimal places.  For processor-specific information, see the `amount` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)  **Important** Some processors have specific requirements and limitations, such as maximum amounts and maximum field lengths. See these guides for details: - [Merchant Descriptors Using the SCMP API Guide] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm) - \"Capture Information for Specific Processors\" section in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  #### DCC with a Third-Party Provider Set this field to the converted amount that was returned by the DCC provider. You must include either the 1st line item in the order and this field, or the request-level field `orderInformation.amountDetails.totalAmount` in your request. For details, see \"Dynamic Currency Conversion with a Third Party Provider\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  #### FDMS South If you accept IDR or CLP currencies, see the entry for FDMS South in the [Merchant Descriptors Using the SCMP API Guide.] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  #### Zero Amount Authorizations If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen. See \"Zero Amount Authorizations\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        if (!is_null($unitPrice) && (strlen($unitPrice) > 15)) {
            throw new \InvalidArgumentException('invalid length for $unitPrice when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 15.');
        }

        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets unitOfMeasure
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unitOfMeasure'];
    }

    /**
     * Sets unitOfMeasure
     * @param string $unitOfMeasure Unit of measure, or unit of measure code, for the item.
     * @return $this
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        if (!is_null($unitOfMeasure) && (strlen($unitOfMeasure) > 12)) {
            throw new \InvalidArgumentException('invalid length for $unitOfMeasure when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 12.');
        }

        $this->container['unitOfMeasure'] = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets totalAmount
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     * @param string $totalAmount Total amount for the item. Normally calculated as the unit price times quantity.  When `orderInformation.lineItems[].productCode` is \"gift_card\", this is the purchase amount total for prepaid gift cards in major units.  Example: 123.45 USD = 123
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        if (!is_null($totalAmount) && (strlen($totalAmount) > 13)) {
            throw new \InvalidArgumentException('invalid length for $totalAmount when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 13.');
        }

        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     * @param string $taxAmount Total tax to apply to the product. This value cannot be negative. The tax amount and the offer amount must be in the same currency. The tax amount field is additive.  The following example uses a two-exponent currency such as USD:   1. You include each line item in your request.  ..- 1st line item has amount=10.00, quantity=1, and taxAmount=0.80  ..- 2nd line item has amount=20.00, quantity=1, and taxAmount=1.60  2. The total amount authorized will be 32.40, not 30.00 with 2.40 of tax included.  If you want to include the tax amount and also request the ics_tax service, see Tax Calculation Service Using the SCMP API.  This field is frequently used for Level II and Level III transactions. See Level II and Level III Processing Using the SCMP API.
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        if (!is_null($taxAmount) && (strlen($taxAmount) > 15)) {
            throw new \InvalidArgumentException('invalid length for $taxAmount when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 15.');
        }

        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets taxRate
     * @return string
     */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     * @param string $taxRate Tax rate applied to the item.  For details, see `tax_rate` field description in the [Level II and Level III Processing Using the SCMP API Guide.] (https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)  **Visa**: Valid range is 0.01 to 0.99 (1% to 99%, with only whole percentage values accepted; values with additional decimal places will be truncated).  **Mastercard**: Valid range is 0.00001 to 0.99999 (0.001% to 99.999%).
     * @return $this
     */
    public function setTaxRate($taxRate)
    {
        if (!is_null($taxRate) && (strlen($taxRate) > 7)) {
            throw new \InvalidArgumentException('invalid length for $taxRate when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 7.');
        }

        $this->container['taxRate'] = $taxRate;

        return $this;
    }

    /**
     * Gets taxAppliedAfterDiscount
     * @return string
     */
    public function getTaxAppliedAfterDiscount()
    {
        return $this->container['taxAppliedAfterDiscount'];
    }

    /**
     * Sets taxAppliedAfterDiscount
     * @param string $taxAppliedAfterDiscount Flag to indicate how you handle discount at the line item level.   - 0: no line level discount provided  - 1: tax was calculated on the post-discount line item total  - 2: tax was calculated on the pre-discount line item total  `Note` Visa will inset 0 (zero) if an invalid value is included in this field.  This field relates to the value in the _lineItems[].discountAmount_ field.
     * @return $this
     */
    public function setTaxAppliedAfterDiscount($taxAppliedAfterDiscount)
    {
        if (!is_null($taxAppliedAfterDiscount) && (strlen($taxAppliedAfterDiscount) > 1)) {
            throw new \InvalidArgumentException('invalid length for $taxAppliedAfterDiscount when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 1.');
        }

        $this->container['taxAppliedAfterDiscount'] = $taxAppliedAfterDiscount;

        return $this;
    }

    /**
     * Gets taxStatusIndicator
     * @return string
     */
    public function getTaxStatusIndicator()
    {
        return $this->container['taxStatusIndicator'];
    }

    /**
     * Sets taxStatusIndicator
     * @param string $taxStatusIndicator Flag to indicate whether tax is exempted or not included.   - 0: tax not included  - 1: tax included  - 2: transaction is not subject to tax
     * @return $this
     */
    public function setTaxStatusIndicator($taxStatusIndicator)
    {
        if (!is_null($taxStatusIndicator) && (strlen($taxStatusIndicator) > 1)) {
            throw new \InvalidArgumentException('invalid length for $taxStatusIndicator when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 1.');
        }

        $this->container['taxStatusIndicator'] = $taxStatusIndicator;

        return $this;
    }

    /**
     * Gets taxTypeCode
     * @return string
     */
    public function getTaxTypeCode()
    {
        return $this->container['taxTypeCode'];
    }

    /**
     * Sets taxTypeCode
     * @param string $taxTypeCode Type of tax being applied to the item.  For possible values, see the processor-specific field descriptions in [Level II and Level III Processing Using the SCMP API.] (https://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm):  #### FDC Nashville Global - `alternate_tax_type_applied` - `alternate_tax_type_identifier`  #### Worldpay VAP - `alternate_tax_type_identifier`  #### RBS WorldPay Atlanta - `tax_type_applied`  #### TSYS Acquiring Solutions - `tax_type_applied` - `local_tax_indicator`  #### Chase Paymentech Solutions - `tax_type_applied`  #### Elavon Americas - `local_tax_indicator`  #### FDC Compass - `tax_type_applied`  #### OmniPay Direct - `local_tax_indicator`
     * @return $this
     */
    public function setTaxTypeCode($taxTypeCode)
    {
        if (!is_null($taxTypeCode) && (strlen($taxTypeCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $taxTypeCode when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 4.');
        }

        $this->container['taxTypeCode'] = $taxTypeCode;

        return $this;
    }

    /**
     * Gets amountIncludesTax
     * @return bool
     */
    public function getAmountIncludesTax()
    {
        return $this->container['amountIncludesTax'];
    }

    /**
     * Sets amountIncludesTax
     * @param bool $amountIncludesTax Flag that indicates whether the tax amount is included in the Line Item Total.  Possible values:  - **true**  - **false**
     * @return $this
     */
    public function setAmountIncludesTax($amountIncludesTax)
    {
        $this->container['amountIncludesTax'] = $amountIncludesTax;

        return $this;
    }

    /**
     * Gets typeOfSupply
     * @return string
     */
    public function getTypeOfSupply()
    {
        return $this->container['typeOfSupply'];
    }

    /**
     * Sets typeOfSupply
     * @param string $typeOfSupply Flag to indicate whether the purchase is categorized as goods or services. Possible values:   - 00: goods  - 01: services
     * @return $this
     */
    public function setTypeOfSupply($typeOfSupply)
    {
        if (!is_null($typeOfSupply) && (strlen($typeOfSupply) > 2)) {
            throw new \InvalidArgumentException('invalid length for $typeOfSupply when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 2.');
        }

        $this->container['typeOfSupply'] = $typeOfSupply;

        return $this;
    }

    /**
     * Gets commodityCode
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->container['commodityCode'];
    }

    /**
     * Sets commodityCode
     * @param string $commodityCode Commodity code or International description code used to classify the item. Contact your acquirer for a list of codes.
     * @return $this
     */
    public function setCommodityCode($commodityCode)
    {
        if (!is_null($commodityCode) && (strlen($commodityCode) > 15)) {
            throw new \InvalidArgumentException('invalid length for $commodityCode when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 15.');
        }

        $this->container['commodityCode'] = $commodityCode;

        return $this;
    }

    /**
     * Gets discountAmount
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     * @param string $discountAmount Discount applied to the item.
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        if (!is_null($discountAmount) && (strlen($discountAmount) > 13)) {
            throw new \InvalidArgumentException('invalid length for $discountAmount when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 13.');
        }

        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets discountApplied
     * @return bool
     */
    public function getDiscountApplied()
    {
        return $this->container['discountApplied'];
    }

    /**
     * Sets discountApplied
     * @param bool $discountApplied Flag that indicates whether the amount is discounted.  If you do not provide a value but you set Discount Amount to a value greater than zero, then CyberSource sets this field to **true**.  Possible values:  - **true**  - **false**
     * @return $this
     */
    public function setDiscountApplied($discountApplied)
    {
        $this->container['discountApplied'] = $discountApplied;

        return $this;
    }

    /**
     * Gets discountRate
     * @return string
     */
    public function getDiscountRate()
    {
        return $this->container['discountRate'];
    }

    /**
     * Sets discountRate
     * @param string $discountRate Rate the item is discounted. Maximum of 2 decimal places.  Example 5.25 (=5.25%)
     * @return $this
     */
    public function setDiscountRate($discountRate)
    {
        if (!is_null($discountRate) && (strlen($discountRate) > 6)) {
            throw new \InvalidArgumentException('invalid length for $discountRate when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 6.');
        }

        $this->container['discountRate'] = $discountRate;

        return $this;
    }

    /**
     * Gets invoiceNumber
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     * @param string $invoiceNumber Field to support an invoice number for a transaction. You must specify the number of line items that will include an invoice number. By default, the first line item will include an invoice number field. The invoice number field can be included for up to 10 line items.
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        if (!is_null($invoiceNumber) && (strlen($invoiceNumber) > 23)) {
            throw new \InvalidArgumentException('invalid length for $invoiceNumber when calling Ptsv2paymentsidrefundsOrderInformationLineItems., must be smaller than or equal to 23.');
        }

        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets taxDetails
     * @return \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsTaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     * @param \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsTaxDetails[] $taxDetails
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

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


