<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.RespondActivityTaskCanceledRequest</code>
 */
class RespondActivityTaskCanceledRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     */
    protected $task_token = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads details = 2;</code>
     */
    protected $details = null;
    /**
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
     *     @type \Temporal\Api\Common\V1\Payloads $details
     *     @type string $identity
     *     @type string $namespace
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @return string
     */
    public function getTaskToken()
    {
        return $this->task_token;
    }

    /**
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
     * Generated from protobuf field <code>string identity = 3;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
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

