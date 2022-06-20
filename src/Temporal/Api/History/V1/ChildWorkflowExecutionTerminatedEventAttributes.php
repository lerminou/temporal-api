<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.ChildWorkflowExecutionTerminatedEventAttributes</code>
 */
class ChildWorkflowExecutionTerminatedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Namespace of the child workflow.
     * SDKs and UI tools should use `namespace` field but server must use `namespace_id` only.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>string namespace_id = 6;</code>
     */
    protected $namespace_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     */
    protected $workflow_type = null;
    /**
     * Id of the `START_CHILD_WORKFLOW_EXECUTION_INITIATED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 initiated_event_id = 4;</code>
     */
    protected $initiated_event_id = 0;
    /**
     * Id of the `CHILD_WORKFLOW_EXECUTION_STARTED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 started_event_id = 5;</code>
     */
    protected $started_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           Namespace of the child workflow.
     *           SDKs and UI tools should use `namespace` field but server must use `namespace_id` only.
     *     @type string $namespace_id
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *     @type int|string $initiated_event_id
     *           Id of the `START_CHILD_WORKFLOW_EXECUTION_INITIATED` event which this event corresponds to
     *     @type int|string $started_event_id
     *           Id of the `CHILD_WORKFLOW_EXECUTION_STARTED` event which this event corresponds to
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Namespace of the child workflow.
     * SDKs and UI tools should use `namespace` field but server must use `namespace_id` only.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Namespace of the child workflow.
     * SDKs and UI tools should use `namespace` field but server must use `namespace_id` only.
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
     * Generated from protobuf field <code>string namespace_id = 6;</code>
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->namespace_id;
    }

    /**
     * Generated from protobuf field <code>string namespace_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->workflow_execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType
     */
    public function getWorkflowType()
    {
        return $this->workflow_type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @param \Temporal\Api\Common\V1\WorkflowType $var
     * @return $this
     */
    public function setWorkflowType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowType::class);
        $this->workflow_type = $var;

        return $this;
    }

    /**
     * Id of the `START_CHILD_WORKFLOW_EXECUTION_INITIATED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 initiated_event_id = 4;</code>
     * @return int|string
     */
    public function getInitiatedEventId()
    {
        return $this->initiated_event_id;
    }

    /**
     * Id of the `START_CHILD_WORKFLOW_EXECUTION_INITIATED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 initiated_event_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInitiatedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->initiated_event_id = $var;

        return $this;
    }

    /**
     * Id of the `CHILD_WORKFLOW_EXECUTION_STARTED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 started_event_id = 5;</code>
     * @return int|string
     */
    public function getStartedEventId()
    {
        return $this->started_event_id;
    }

    /**
     * Id of the `CHILD_WORKFLOW_EXECUTION_STARTED` event which this event corresponds to
     *
     * Generated from protobuf field <code>int64 started_event_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->started_event_id = $var;

        return $this;
    }

}

