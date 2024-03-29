<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CalendarSpec describes an event specification relative to the calendar,
 * similar to a traditional cron specification. Each field can be one of:
 *   *: matches always
 *   x: matches when the field equals x
 *   x/y : matches when the field equals x+n*y where n is an integer
 *   x-z: matches when the field is between x and z inclusive
 *   w,x,y,...: matches when the field is one of the listed values
 * Each x, y, z, ... is either a decimal integer, or a month or day of week name
 * or abbreviation (in the appropriate fields).
 * A second in time matches if all fields match.
 * Note that the special case that some cron implementations have for treating
 * day_of_month and day_of_week as "or" instead of "and" when both are set is
 * not implemented.
 * day_of_week can accept 0 or 7 as Sunday
 * TODO: add relative-to-end-of-month
 * TODO: add nth day-of-week in month
 *
 * Generated from protobuf message <code>temporal.api.schedule.v1.CalendarSpec</code>
 */
class CalendarSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Expression to match seconds. Default: 0
     *
     * Generated from protobuf field <code>string second = 1;</code>
     */
    protected $second = '';
    /**
     * Expression to match minutes. Default: 0
     *
     * Generated from protobuf field <code>string minute = 2;</code>
     */
    protected $minute = '';
    /**
     * Expression to match hours. Default: 0
     *
     * Generated from protobuf field <code>string hour = 3;</code>
     */
    protected $hour = '';
    /**
     * Expression to match days of the month. Default: *
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: standard name of field --)
     *
     * Generated from protobuf field <code>string day_of_month = 4;</code>
     */
    protected $day_of_month = '';
    /**
     * Expression to match months. Default: *
     *
     * Generated from protobuf field <code>string month = 5;</code>
     */
    protected $month = '';
    /**
     * Expression to match years. Default: *
     *
     * Generated from protobuf field <code>string year = 6;</code>
     */
    protected $year = '';
    /**
     * Expression to match days of the week. Default: *
     *
     * Generated from protobuf field <code>string day_of_week = 7;</code>
     */
    protected $day_of_week = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $second
     *           Expression to match seconds. Default: 0
     *     @type string $minute
     *           Expression to match minutes. Default: 0
     *     @type string $hour
     *           Expression to match hours. Default: 0
     *     @type string $day_of_month
     *           Expression to match days of the month. Default: *
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: standard name of field --)
     *     @type string $month
     *           Expression to match months. Default: *
     *     @type string $year
     *           Expression to match years. Default: *
     *     @type string $day_of_week
     *           Expression to match days of the week. Default: *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Expression to match seconds. Default: 0
     *
     * Generated from protobuf field <code>string second = 1;</code>
     * @return string
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * Expression to match seconds. Default: 0
     *
     * Generated from protobuf field <code>string second = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSecond($var)
    {
        GPBUtil::checkString($var, True);
        $this->second = $var;

        return $this;
    }

    /**
     * Expression to match minutes. Default: 0
     *
     * Generated from protobuf field <code>string minute = 2;</code>
     * @return string
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Expression to match minutes. Default: 0
     *
     * Generated from protobuf field <code>string minute = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMinute($var)
    {
        GPBUtil::checkString($var, True);
        $this->minute = $var;

        return $this;
    }

    /**
     * Expression to match hours. Default: 0
     *
     * Generated from protobuf field <code>string hour = 3;</code>
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Expression to match hours. Default: 0
     *
     * Generated from protobuf field <code>string hour = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHour($var)
    {
        GPBUtil::checkString($var, True);
        $this->hour = $var;

        return $this;
    }

    /**
     * Expression to match days of the month. Default: *
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: standard name of field --)
     *
     * Generated from protobuf field <code>string day_of_month = 4;</code>
     * @return string
     */
    public function getDayOfMonth()
    {
        return $this->day_of_month;
    }

    /**
     * Expression to match days of the month. Default: *
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: standard name of field --)
     *
     * Generated from protobuf field <code>string day_of_month = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDayOfMonth($var)
    {
        GPBUtil::checkString($var, True);
        $this->day_of_month = $var;

        return $this;
    }

    /**
     * Expression to match months. Default: *
     *
     * Generated from protobuf field <code>string month = 5;</code>
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Expression to match months. Default: *
     *
     * Generated from protobuf field <code>string month = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMonth($var)
    {
        GPBUtil::checkString($var, True);
        $this->month = $var;

        return $this;
    }

    /**
     * Expression to match years. Default: *
     *
     * Generated from protobuf field <code>string year = 6;</code>
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Expression to match years. Default: *
     *
     * Generated from protobuf field <code>string year = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setYear($var)
    {
        GPBUtil::checkString($var, True);
        $this->year = $var;

        return $this;
    }

    /**
     * Expression to match days of the week. Default: *
     *
     * Generated from protobuf field <code>string day_of_week = 7;</code>
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->day_of_week;
    }

    /**
     * Expression to match days of the week. Default: *
     *
     * Generated from protobuf field <code>string day_of_week = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDayOfWeek($var)
    {
        GPBUtil::checkString($var, True);
        $this->day_of_week = $var;

        return $this;
    }

}

