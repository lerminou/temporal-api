<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowExecutionTerminatedEventAttributes</code>
 */
class WorkflowExecutionTerminatedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * User/client provided reason for termination
     *
     * Generated from protobuf field <code>string reason = 1;</code>
     */
    protected $reason = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     */
    protected $details = null;
    /**
     * id of the client who requested termination
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     */
    protected $identity = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reason
     *           User/client provided reason for termination
     *     @type \Temporal\Api\Common\V1\Payloads $details
     *     @type string $identity
     *           id of the client who requested termination
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * User/client provided reason for termination
     *
     * Generated from protobuf field <code>string reason = 1;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * User/client provided reason for termination
     *
     * Generated from protobuf field <code>string reason = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->details = $var;

        return $this;
    }

    /**
     * id of the client who requested termination
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * id of the client who requested termination
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

}

