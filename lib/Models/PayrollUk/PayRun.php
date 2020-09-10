<?php
/**
 * PayRun
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
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

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * PayRun Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayRun implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayRun';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pay_run_id' => 'string',
        'payroll_calendar_id' => 'string',
        'period_start_date' => '\DateTime',
        'period_end_date' => '\DateTime',
        'payment_date' => '\DateTime',
        'total_cost' => 'double',
        'total_pay' => 'double',
        'pay_run_status' => 'string',
        'pay_run_type' => 'string',
        'calendar_type' => 'string',
        'posted_date_time' => '\DateTime',
        'pay_slips' => '\XeroAPI\XeroPHP\Models\PayrollUk\Payslip[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pay_run_id' => 'uuid',
        'payroll_calendar_id' => 'uuid',
        'period_start_date' => 'date',
        'period_end_date' => 'date',
        'payment_date' => 'date',
        'total_cost' => 'double',
        'total_pay' => 'double',
        'pay_run_status' => null,
        'pay_run_type' => null,
        'calendar_type' => null,
        'posted_date_time' => 'date',
        'pay_slips' => null
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
        'pay_run_id' => 'payRunID',
        'payroll_calendar_id' => 'payrollCalendarID',
        'period_start_date' => 'periodStartDate',
        'period_end_date' => 'periodEndDate',
        'payment_date' => 'paymentDate',
        'total_cost' => 'totalCost',
        'total_pay' => 'totalPay',
        'pay_run_status' => 'payRunStatus',
        'pay_run_type' => 'payRunType',
        'calendar_type' => 'calendarType',
        'posted_date_time' => 'postedDateTime',
        'pay_slips' => 'paySlips'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_run_id' => 'setPayRunId',
        'payroll_calendar_id' => 'setPayrollCalendarId',
        'period_start_date' => 'setPeriodStartDate',
        'period_end_date' => 'setPeriodEndDate',
        'payment_date' => 'setPaymentDate',
        'total_cost' => 'setTotalCost',
        'total_pay' => 'setTotalPay',
        'pay_run_status' => 'setPayRunStatus',
        'pay_run_type' => 'setPayRunType',
        'calendar_type' => 'setCalendarType',
        'posted_date_time' => 'setPostedDateTime',
        'pay_slips' => 'setPaySlips'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_run_id' => 'getPayRunId',
        'payroll_calendar_id' => 'getPayrollCalendarId',
        'period_start_date' => 'getPeriodStartDate',
        'period_end_date' => 'getPeriodEndDate',
        'payment_date' => 'getPaymentDate',
        'total_cost' => 'getTotalCost',
        'total_pay' => 'getTotalPay',
        'pay_run_status' => 'getPayRunStatus',
        'pay_run_type' => 'getPayRunType',
        'calendar_type' => 'getCalendarType',
        'posted_date_time' => 'getPostedDateTime',
        'pay_slips' => 'getPaySlips'
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

    const PAY_RUN_STATUS_DRAFT = 'Draft';
    const PAY_RUN_STATUS_POSTED = 'Posted';
    const PAY_RUN_TYPE_SCHEDULED = 'Scheduled';
    const PAY_RUN_TYPE_UNSCHEDULED = 'Unscheduled';
    const PAY_RUN_TYPE_EARLIER_YEAR_UPDATE = 'EarlierYearUpdate';
    const CALENDAR_TYPE_WEEKLY = 'Weekly';
    const CALENDAR_TYPE_FORTNIGHTLY = 'Fortnightly';
    const CALENDAR_TYPE_FOUR_WEEKLY = 'FourWeekly';
    const CALENDAR_TYPE_MONTHLY = 'Monthly';
    const CALENDAR_TYPE_ANNUAL = 'Annual';
    const CALENDAR_TYPE_QUARTERLY = 'Quarterly';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayRunStatusAllowableValues()
    {
        return [
            self::PAY_RUN_STATUS_DRAFT,
            self::PAY_RUN_STATUS_POSTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayRunTypeAllowableValues()
    {
        return [
            self::PAY_RUN_TYPE_SCHEDULED,
            self::PAY_RUN_TYPE_UNSCHEDULED,
            self::PAY_RUN_TYPE_EARLIER_YEAR_UPDATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalendarTypeAllowableValues()
    {
        return [
            self::CALENDAR_TYPE_WEEKLY,
            self::CALENDAR_TYPE_FORTNIGHTLY,
            self::CALENDAR_TYPE_FOUR_WEEKLY,
            self::CALENDAR_TYPE_MONTHLY,
            self::CALENDAR_TYPE_ANNUAL,
            self::CALENDAR_TYPE_QUARTERLY,
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
        $this->container['pay_run_id'] = isset($data['pay_run_id']) ? $data['pay_run_id'] : null;
        $this->container['payroll_calendar_id'] = isset($data['payroll_calendar_id']) ? $data['payroll_calendar_id'] : null;
        $this->container['period_start_date'] = isset($data['period_start_date']) ? $data['period_start_date'] : null;
        $this->container['period_end_date'] = isset($data['period_end_date']) ? $data['period_end_date'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['total_cost'] = isset($data['total_cost']) ? $data['total_cost'] : null;
        $this->container['total_pay'] = isset($data['total_pay']) ? $data['total_pay'] : null;
        $this->container['pay_run_status'] = isset($data['pay_run_status']) ? $data['pay_run_status'] : null;
        $this->container['pay_run_type'] = isset($data['pay_run_type']) ? $data['pay_run_type'] : null;
        $this->container['calendar_type'] = isset($data['calendar_type']) ? $data['calendar_type'] : null;
        $this->container['posted_date_time'] = isset($data['posted_date_time']) ? $data['posted_date_time'] : null;
        $this->container['pay_slips'] = isset($data['pay_slips']) ? $data['pay_slips'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPayRunStatusAllowableValues();
        if (!is_null($this->container['pay_run_status']) && !in_array($this->container['pay_run_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_run_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPayRunTypeAllowableValues();
        if (!is_null($this->container['pay_run_type']) && !in_array($this->container['pay_run_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_run_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCalendarTypeAllowableValues();
        if (!is_null($this->container['calendar_type']) && !in_array($this->container['calendar_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'calendar_type', must be one of '%s'",
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
     * Gets pay_run_id
     *
     * @return string|null
     */
    public function getPayRunId()
    {
        return $this->container['pay_run_id'];
    }

    /**
     * Sets pay_run_id
     *
     * @param string|null $pay_run_id Xero unique identifier for the pay run
     *
     * @return $this
     */
    public function setPayRunId($pay_run_id)
    {

        $this->container['pay_run_id'] = $pay_run_id;

        return $this;
    }



    /**
     * Gets payroll_calendar_id
     *
     * @return string|null
     */
    public function getPayrollCalendarId()
    {
        return $this->container['payroll_calendar_id'];
    }

    /**
     * Sets payroll_calendar_id
     *
     * @param string|null $payroll_calendar_id Xero unique identifier for the payroll calendar
     *
     * @return $this
     */
    public function setPayrollCalendarId($payroll_calendar_id)
    {

        $this->container['payroll_calendar_id'] = $payroll_calendar_id;

        return $this;
    }



    /**
     * Gets period_start_date
     *
     * @return \DateTime|null
     */
    public function getPeriodStartDate()
    {
        return $this->container['period_start_date'];
    }

    /**
     * Sets period_start_date
     *
     * @param \DateTime|null $period_start_date Period start date of the payroll calendar
     *
     * @return $this
     */
    public function setPeriodStartDate($period_start_date)
    {

        $this->container['period_start_date'] = $period_start_date;

        return $this;
    }



    /**
     * Gets period_end_date
     *
     * @return \DateTime|null
     */
    public function getPeriodEndDate()
    {
        return $this->container['period_end_date'];
    }

    /**
     * Sets period_end_date
     *
     * @param \DateTime|null $period_end_date Period end date of the payroll calendar
     *
     * @return $this
     */
    public function setPeriodEndDate($period_end_date)
    {

        $this->container['period_end_date'] = $period_end_date;

        return $this;
    }



    /**
     * Gets payment_date
     *
     * @return \DateTime|null
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime|null $payment_date Payment date of the pay run
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {

        $this->container['payment_date'] = $payment_date;

        return $this;
    }



    /**
     * Gets total_cost
     *
     * @return double|null
     */
    public function getTotalCost()
    {
        return $this->container['total_cost'];
    }

    /**
     * Sets total_cost
     *
     * @param double|null $total_cost Total cost of the pay run
     *
     * @return $this
     */
    public function setTotalCost($total_cost)
    {

        $this->container['total_cost'] = $total_cost;

        return $this;
    }



    /**
     * Gets total_pay
     *
     * @return double|null
     */
    public function getTotalPay()
    {
        return $this->container['total_pay'];
    }

    /**
     * Sets total_pay
     *
     * @param double|null $total_pay Total pay of the pay run
     *
     * @return $this
     */
    public function setTotalPay($total_pay)
    {

        $this->container['total_pay'] = $total_pay;

        return $this;
    }



    /**
     * Gets pay_run_status
     *
     * @return string|null
     */
    public function getPayRunStatus()
    {
        return $this->container['pay_run_status'];
    }

    /**
     * Sets pay_run_status
     *
     * @param string|null $pay_run_status Pay run status
     *
     * @return $this
     */
    public function setPayRunStatus($pay_run_status)
    {
        $allowedValues = $this->getPayRunStatusAllowableValues();
        if (!is_null($pay_run_status) && !in_array($pay_run_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_run_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['pay_run_status'] = $pay_run_status;

        return $this;
    }



    /**
     * Gets pay_run_type
     *
     * @return string|null
     */
    public function getPayRunType()
    {
        return $this->container['pay_run_type'];
    }

    /**
     * Sets pay_run_type
     *
     * @param string|null $pay_run_type Pay run type
     *
     * @return $this
     */
    public function setPayRunType($pay_run_type)
    {
        $allowedValues = $this->getPayRunTypeAllowableValues();
        if (!is_null($pay_run_type) && !in_array($pay_run_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_run_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['pay_run_type'] = $pay_run_type;

        return $this;
    }



    /**
     * Gets calendar_type
     *
     * @return string|null
     */
    public function getCalendarType()
    {
        return $this->container['calendar_type'];
    }

    /**
     * Sets calendar_type
     *
     * @param string|null $calendar_type Calendar type of the pay run
     *
     * @return $this
     */
    public function setCalendarType($calendar_type)
    {
        $allowedValues = $this->getCalendarTypeAllowableValues();
        if (!is_null($calendar_type) && !in_array($calendar_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'calendar_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['calendar_type'] = $calendar_type;

        return $this;
    }



    /**
     * Gets posted_date_time
     *
     * @return \DateTime|null
     */
    public function getPostedDateTime()
    {
        return $this->container['posted_date_time'];
    }

    /**
     * Sets posted_date_time
     *
     * @param \DateTime|null $posted_date_time Posted date time of the pay run
     *
     * @return $this
     */
    public function setPostedDateTime($posted_date_time)
    {

        $this->container['posted_date_time'] = $posted_date_time;

        return $this;
    }



    /**
     * Gets pay_slips
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollUk\Payslip[]|null
     */
    public function getPaySlips()
    {
        return $this->container['pay_slips'];
    }

    /**
     * Sets pay_slips
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollUk\Payslip[]|null $pay_slips pay_slips
     *
     * @return $this
     */
    public function setPaySlips($pay_slips)
    {

        $this->container['pay_slips'] = $pay_slips;

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
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


