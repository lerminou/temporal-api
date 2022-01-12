<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.RespondActivityTaskFailedByIdRequest</code>
 */
class RespondActivityTaskFailedByIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Namespace of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Id of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * Run Id of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string run_id = 3;</code>
     */
    protected $run_id = '';
    /**
     * Id of the activity to fail
     *
     * Generated from protobuf field <code>string activity_id = 4;</code>
     */
    protected $activity_id = '';
    /**
     * Detailed failure information
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 5;</code>
     */
    protected $failure = null;
    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 6;</code>
     */
    protected $identity = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           Namespace of the workflow which scheduled this activity
     *     @type string $workflow_id
     *           Id of the workflow which scheduled this activity
     *     @type string $run_id
     *           Run Id of the workflow which scheduled this activity
     *     @type string $activity_id
     *           Id of the activity to fail
     *     @type \Temporal\Api\Failure\V1\Failure $failure
     *           Detailed failure information
     *     @type string $identity
     *           The identity of the worker/client
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Namespace of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Namespace of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Id of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Id of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

    /**
     * Run Id of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string run_id = 3;</code>
     * @return string
     */
    public function getRunId()
    {
        return $this->run_id;
    }

    /**
     * Run Id of the workflow which scheduled this activity
     *
     * Generated from protobuf field <code>string run_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->run_id = $var;

        return $this;
    }

    /**
     * Id of the activity to fail
     *
     * Generated from protobuf field <code>string activity_id = 4;</code>
     * @return string
     */
    public function getActivityId()
    {
        return $this->activity_id;
    }

    /**
     * Id of the activity to fail
     *
     * Generated from protobuf field <code>string activity_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setActivityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activity_id = $var;

        return $this;
    }

    /**
     * Detailed failure information
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 5;</code>
     * @return \Temporal\Api\Failure\V1\Failure
     */
    public function getFailure()
    {
        return $this->failure;
    }

    /**
     * Detailed failure information
     *
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure failure = 5;</code>
     * @param \Temporal\Api\Failure\V1\Failure $var
     * @return $this
     */
    public function setFailure($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Failure\V1\Failure::class);
        $this->failure = $var;

        return $this;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 6;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 6;</code>
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

