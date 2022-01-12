<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.RecordActivityTaskHeartbeatRequest</code>
 */
class RecordActivityTaskHeartbeatRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     */
    protected $task_token = '';
    /**
     * Arbitrary data, of which the most recent call is kept, to store for this activity
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     */
    protected $details = null;
    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     */
    protected $identity = '';
    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
     */
    protected $namespace = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_token
     *           The task token as received in `PollActivityTaskQueueResponse`
     *     @type \Temporal\Api\Common\V1\Payloads $details
     *           Arbitrary data, of which the most recent call is kept, to store for this activity
     *     @type string $identity
     *           The identity of the worker/client
     *     @type string $namespace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @return string
     */
    public function getTaskToken()
    {
        return $this->task_token;
    }

    /**
     * The task token as received in `PollActivityTaskQueueResponse`
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->task_token = $var;

        return $this;
    }

    /**
     * Arbitrary data, of which the most recent call is kept, to store for this activity
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Arbitrary data, of which the most recent call is kept, to store for this activity
     *
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
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the worker/client
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

    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

}

