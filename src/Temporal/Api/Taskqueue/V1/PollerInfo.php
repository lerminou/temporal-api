<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/taskqueue/v1/message.proto

namespace Temporal\Api\Taskqueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.taskqueue.v1.PollerInfo</code>
 */
class PollerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Unix Nano
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_access_time = 1 [(.gogoproto.stdtime) = true];</code>
     */
    protected $last_access_time = null;
    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     */
    protected $identity = '';
    /**
     * Generated from protobuf field <code>double rate_per_second = 3;</code>
     */
    protected $rate_per_second = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $last_access_time
     *           Unix Nano
     *     @type string $identity
     *     @type float $rate_per_second
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Unix Nano
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_access_time = 1 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastAccessTime()
    {
        return $this->last_access_time;
    }

    /**
     * Unix Nano
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_access_time = 1 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastAccessTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_access_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Generated from protobuf field <code>string identity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double rate_per_second = 3;</code>
     * @return float
     */
    public function getRatePerSecond()
    {
        return $this->rate_per_second;
    }

    /**
     * Generated from protobuf field <code>double rate_per_second = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setRatePerSecond($var)
    {
        GPBUtil::checkDouble($var);
        $this->rate_per_second = $var;

        return $this;
    }

}

