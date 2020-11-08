<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.SignalExternalWorkflowExecutionFailedEventAttributes</code>
 */
class SignalExternalWorkflowExecutionFailedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.SignalExternalWorkflowExecutionFailedCause cause = 1;</code>
     */
    protected $cause = 0;
    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 2;</code>
     */
    protected $workflow_task_completed_event_id = 0;
    /**
     * Generated from protobuf field <code>string namespace = 3;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 4;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>int64 initiated_event_id = 5;</code>
     */
    protected $initiated_event_id = 0;
    /**
     * Generated from protobuf field <code>string control = 6;</code>
     */
    protected $control = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cause
     *     @type int|string $workflow_task_completed_event_id
     *     @type string $namespace
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type int|string $initiated_event_id
     *     @type string $control
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.SignalExternalWorkflowExecutionFailedCause cause = 1;</code>
     * @return int
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.SignalExternalWorkflowExecutionFailedCause cause = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCause($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\SignalExternalWorkflowExecutionFailedCause::class);
        $this->cause = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 2;</code>
     * @return int|string
     */
    public function getWorkflowTaskCompletedEventId()
    {
        return $this->workflow_task_completed_event_id;
    }

    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkflowTaskCompletedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->workflow_task_completed_event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namespace = 3;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 3;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 4;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 4;</code>
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
     * Generated from protobuf field <code>int64 initiated_event_id = 5;</code>
     * @return int|string
     */
    public function getInitiatedEventId()
    {
        return $this->initiated_event_id;
    }

    /**
     * Generated from protobuf field <code>int64 initiated_event_id = 5;</code>
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
     * Generated from protobuf field <code>string control = 6;</code>
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Generated from protobuf field <code>string control = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setControl($var)
    {
        GPBUtil::checkString($var, True);
        $this->control = $var;

        return $this;
    }

}

