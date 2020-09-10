<?php
/**
 * DeductionType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.2.15
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * DeductionType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeductionType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeductionType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'account_code' => 'string',
        'reduces_tax' => 'bool',
        'reduces_super' => 'bool',
        'is_exempt_from_w1' => 'bool',
        'deduction_type_id' => 'string',
        'updated_date_utc' => 'string',
        'deduction_category' => 'string',
        'current_record' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'account_code' => null,
        'reduces_tax' => null,
        'reduces_super' => null,
        'is_exempt_from_w1' => null,
        'deduction_type_id' => 'uuid',
        'updated_date_utc' => null,
        'deduction_category' => null,
        'current_record' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'Name',
        'account_code' => 'AccountCode',
        'reduces_tax' => 'ReducesTax',
        'reduces_super' => 'ReducesSuper',
        'is_exempt_from_w1' => 'IsExemptFromW1',
        'deduction_type_id' => 'DeductionTypeID',
        'updated_date_utc' => 'UpdatedDateUTC',
        'deduction_category' => 'DeductionCategory',
        'current_record' => 'CurrentRecord'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'account_code' => 'setAccountCode',
        'reduces_tax' => 'setReducesTax',
        'reduces_super' => 'setReducesSuper',
        'is_exempt_from_w1' => 'setIsExemptFromW1',
        'deduction_type_id' => 'setDeductionTypeId',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'deduction_category' => 'setDeductionCategory',
        'current_record' => 'setCurrentRecord'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'account_code' => 'getAccountCode',
        'reduces_tax' => 'getReducesTax',
        'reduces_super' => 'getReducesSuper',
        'is_exempt_from_w1' => 'getIsExemptFromW1',
        'deduction_type_id' => 'getDeductionTypeId',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'deduction_category' => 'getDeductionCategory',
        'current_record' => 'getCurrentRecord'
    ];

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
        return self::$openAPIModelName;
    }

    const DEDUCTION_CATEGORY_NONE = 'NONE';
    const DEDUCTION_CATEGORY_UNIONFEES = 'UNIONFEES';
    const DEDUCTION_CATEGORY_WORKPLACEGIVING = 'WORKPLACEGIVING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeductionCategoryAllowableValues()
    {
        return [
            self::DEDUCTION_CATEGORY_NONE,
            self::DEDUCTION_CATEGORY_UNIONFEES,
            self::DEDUCTION_CATEGORY_WORKPLACEGIVING,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['reduces_tax'] = isset($data['reduces_tax']) ? $data['reduces_tax'] : null;
        $this->container['reduces_super'] = isset($data['reduces_super']) ? $data['reduces_super'] : null;
        $this->container['is_exempt_from_w1'] = isset($data['is_exempt_from_w1']) ? $data['is_exempt_from_w1'] : null;
        $this->container['deduction_type_id'] = isset($data['deduction_type_id']) ? $data['deduction_type_id'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['deduction_category'] = isset($data['deduction_category']) ? $data['deduction_category'] : null;
        $this->container['current_record'] = isset($data['current_record']) ? $data['current_record'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        $allowedValues = $this->getDeductionCategoryAllowableValues();
        if (!is_null($this->container['deduction_category']) && !in_array($this->container['deduction_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deduction_category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the earnings rate (max length = 100)
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling DeductionType., must be smaller than or equal to 100.');
        }


        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets account_code
     *
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string|null $account_code See Accounts
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {

        $this->container['account_code'] = $account_code;

        return $this;
    }



    /**
     * Gets reduces_tax
     *
     * @return bool|null
     */
    public function getReducesTax()
    {
        return $this->container['reduces_tax'];
    }

    /**
     * Sets reduces_tax
     *
     * @param bool|null $reduces_tax Indicates that this is a pre-tax deduction that will reduce the amount of tax you withhold from an employee.
     *
     * @return $this
     */
    public function setReducesTax($reduces_tax)
    {

        $this->container['reduces_tax'] = $reduces_tax;

        return $this;
    }



    /**
     * Gets reduces_super
     *
     * @return bool|null
     */
    public function getReducesSuper()
    {
        return $this->container['reduces_super'];
    }

    /**
     * Sets reduces_super
     *
     * @param bool|null $reduces_super Most deductions don’t reduce your superannuation guarantee contribution liability, so typically you will not set any value for this.
     *
     * @return $this
     */
    public function setReducesSuper($reduces_super)
    {

        $this->container['reduces_super'] = $reduces_super;

        return $this;
    }



    /**
     * Gets is_exempt_from_w1
     *
     * @return bool|null
     */
    public function getIsExemptFromW1()
    {
        return $this->container['is_exempt_from_w1'];
    }

    /**
     * Sets is_exempt_from_w1
     *
     * @param bool|null $is_exempt_from_w1 Boolean to determine if the deduction type is reportable or exempt from W1
     *
     * @return $this
     */
    public function setIsExemptFromW1($is_exempt_from_w1)
    {

        $this->container['is_exempt_from_w1'] = $is_exempt_from_w1;

        return $this;
    }



    /**
     * Gets deduction_type_id
     *
     * @return string|null
     */
    public function getDeductionTypeId()
    {
        return $this->container['deduction_type_id'];
    }

    /**
     * Sets deduction_type_id
     *
     * @param string|null $deduction_type_id Xero identifier
     *
     * @return $this
     */
    public function setDeductionTypeId($deduction_type_id)
    {

        $this->container['deduction_type_id'] = $deduction_type_id;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets deduction_category
     *
     * @return string|null
     */
    public function getDeductionCategory()
    {
        return $this->container['deduction_category'];
    }

    /**
     * Sets deduction_category
     *
     * @param string|null $deduction_category deduction_category
     *
     * @return $this
     */
    public function setDeductionCategory($deduction_category)
    {
        $allowedValues = $this->getDeductionCategoryAllowableValues();
        if (!is_null($deduction_category) && !in_array($deduction_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deduction_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['deduction_category'] = $deduction_category;

        return $this;
    }



    /**
     * Gets current_record
     *
     * @return bool|null
     */
    public function getCurrentRecord()
    {
        return $this->container['current_record'];
    }

    /**
     * Sets current_record
     *
     * @param bool|null $current_record Is the current record
     *
     * @return $this
     */
    public function setCurrentRecord($current_record)
    {

        $this->container['current_record'] = $current_record;

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
        return json_encode(
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


