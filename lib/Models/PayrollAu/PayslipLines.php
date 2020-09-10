<?php
/**
 * PayslipLines
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
 * PayslipLines Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayslipLines implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayslipLines';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]',
        'leave_earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveEarningsLine[]',
        'timesheet_earnings_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]',
        'deduction_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]',
        'leave_accrual_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveAccrualLine[]',
        'reimbursement_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]',
        'superannuation_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationLine[]',
        'tax_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\TaxLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'earnings_lines' => null,
        'leave_earnings_lines' => null,
        'timesheet_earnings_lines' => null,
        'deduction_lines' => null,
        'leave_accrual_lines' => null,
        'reimbursement_lines' => null,
        'superannuation_lines' => null,
        'tax_lines' => null
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
        'earnings_lines' => 'EarningsLines',
        'leave_earnings_lines' => 'LeaveEarningsLines',
        'timesheet_earnings_lines' => 'TimesheetEarningsLines',
        'deduction_lines' => 'DeductionLines',
        'leave_accrual_lines' => 'LeaveAccrualLines',
        'reimbursement_lines' => 'ReimbursementLines',
        'superannuation_lines' => 'SuperannuationLines',
        'tax_lines' => 'TaxLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earnings_lines' => 'setEarningsLines',
        'leave_earnings_lines' => 'setLeaveEarningsLines',
        'timesheet_earnings_lines' => 'setTimesheetEarningsLines',
        'deduction_lines' => 'setDeductionLines',
        'leave_accrual_lines' => 'setLeaveAccrualLines',
        'reimbursement_lines' => 'setReimbursementLines',
        'superannuation_lines' => 'setSuperannuationLines',
        'tax_lines' => 'setTaxLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earnings_lines' => 'getEarningsLines',
        'leave_earnings_lines' => 'getLeaveEarningsLines',
        'timesheet_earnings_lines' => 'getTimesheetEarningsLines',
        'deduction_lines' => 'getDeductionLines',
        'leave_accrual_lines' => 'getLeaveAccrualLines',
        'reimbursement_lines' => 'getReimbursementLines',
        'superannuation_lines' => 'getSuperannuationLines',
        'tax_lines' => 'getTaxLines'
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
        $this->container['earnings_lines'] = isset($data['earnings_lines']) ? $data['earnings_lines'] : null;
        $this->container['leave_earnings_lines'] = isset($data['leave_earnings_lines']) ? $data['leave_earnings_lines'] : null;
        $this->container['timesheet_earnings_lines'] = isset($data['timesheet_earnings_lines']) ? $data['timesheet_earnings_lines'] : null;
        $this->container['deduction_lines'] = isset($data['deduction_lines']) ? $data['deduction_lines'] : null;
        $this->container['leave_accrual_lines'] = isset($data['leave_accrual_lines']) ? $data['leave_accrual_lines'] : null;
        $this->container['reimbursement_lines'] = isset($data['reimbursement_lines']) ? $data['reimbursement_lines'] : null;
        $this->container['superannuation_lines'] = isset($data['superannuation_lines']) ? $data['superannuation_lines'] : null;
        $this->container['tax_lines'] = isset($data['tax_lines']) ? $data['tax_lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null
     */
    public function getEarningsLines()
    {
        return $this->container['earnings_lines'];
    }

    /**
     * Sets earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null $earnings_lines earnings_lines
     *
     * @return $this
     */
    public function setEarningsLines($earnings_lines)
    {

        $this->container['earnings_lines'] = $earnings_lines;

        return $this;
    }



    /**
     * Gets leave_earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveEarningsLine[]|null
     */
    public function getLeaveEarningsLines()
    {
        return $this->container['leave_earnings_lines'];
    }

    /**
     * Sets leave_earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveEarningsLine[]|null $leave_earnings_lines leave_earnings_lines
     *
     * @return $this
     */
    public function setLeaveEarningsLines($leave_earnings_lines)
    {

        $this->container['leave_earnings_lines'] = $leave_earnings_lines;

        return $this;
    }



    /**
     * Gets timesheet_earnings_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null
     */
    public function getTimesheetEarningsLines()
    {
        return $this->container['timesheet_earnings_lines'];
    }

    /**
     * Sets timesheet_earnings_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EarningsLine[]|null $timesheet_earnings_lines timesheet_earnings_lines
     *
     * @return $this
     */
    public function setTimesheetEarningsLines($timesheet_earnings_lines)
    {

        $this->container['timesheet_earnings_lines'] = $timesheet_earnings_lines;

        return $this;
    }



    /**
     * Gets deduction_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]|null
     */
    public function getDeductionLines()
    {
        return $this->container['deduction_lines'];
    }

    /**
     * Sets deduction_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\DeductionLine[]|null $deduction_lines deduction_lines
     *
     * @return $this
     */
    public function setDeductionLines($deduction_lines)
    {

        $this->container['deduction_lines'] = $deduction_lines;

        return $this;
    }



    /**
     * Gets leave_accrual_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveAccrualLine[]|null
     */
    public function getLeaveAccrualLines()
    {
        return $this->container['leave_accrual_lines'];
    }

    /**
     * Sets leave_accrual_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveAccrualLine[]|null $leave_accrual_lines leave_accrual_lines
     *
     * @return $this
     */
    public function setLeaveAccrualLines($leave_accrual_lines)
    {

        $this->container['leave_accrual_lines'] = $leave_accrual_lines;

        return $this;
    }



    /**
     * Gets reimbursement_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]|null
     */
    public function getReimbursementLines()
    {
        return $this->container['reimbursement_lines'];
    }

    /**
     * Sets reimbursement_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ReimbursementLine[]|null $reimbursement_lines reimbursement_lines
     *
     * @return $this
     */
    public function setReimbursementLines($reimbursement_lines)
    {

        $this->container['reimbursement_lines'] = $reimbursement_lines;

        return $this;
    }



    /**
     * Gets superannuation_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationLine[]|null
     */
    public function getSuperannuationLines()
    {
        return $this->container['superannuation_lines'];
    }

    /**
     * Sets superannuation_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SuperannuationLine[]|null $superannuation_lines superannuation_lines
     *
     * @return $this
     */
    public function setSuperannuationLines($superannuation_lines)
    {

        $this->container['superannuation_lines'] = $superannuation_lines;

        return $this;
    }



    /**
     * Gets tax_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\TaxLine[]|null
     */
    public function getTaxLines()
    {
        return $this->container['tax_lines'];
    }

    /**
     * Sets tax_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\TaxLine[]|null $tax_lines tax_lines
     *
     * @return $this
     */
    public function setTaxLines($tax_lines)
    {

        $this->container['tax_lines'] = $tax_lines;

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


