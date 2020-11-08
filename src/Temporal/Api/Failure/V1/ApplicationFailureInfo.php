<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/failure/v1/message.proto

namespace Temporal\Api\Failure\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.failure.v1.ApplicationFailureInfo</code>
 */
class ApplicationFailureInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>bool non_retryable = 2;</code>
     */
    protected $non_retryable = false;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 3;</code>
     */
    protected $details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type bool $non_retryable
     *     @type \Temporal\Api\Common\V1\Payloads $details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Failure\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool non_retryable = 2;</code>
     * @return bool
     */
    public function getNonRetryable()
    {
        return $this->non_retryable;
    }

    /**
     * Generated from protobuf field <code>bool non_retryable = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setNonRetryable($var)
    {
        GPBUtil::checkBool($var);
        $this->non_retryable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 3;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 3;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->details = $var;

        return $this;
    }

}

