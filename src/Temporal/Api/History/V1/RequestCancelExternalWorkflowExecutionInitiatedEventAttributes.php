<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.RequestCancelExternalWorkflowExecutionInitiatedEventAttributes</code>
 */
class RequestCancelExternalWorkflowExecutionInitiatedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 1;</code>
     */
    protected $workflow_task_completed_event_id = 0;
    /**
     * The namespace the workflow to be cancelled lives in
     *
     * Generated from protobuf field <code>string namespace = 2;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 3;</code>
     */
    protected $workflow_execution = null;
    /**
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 4;</code>
     */
    protected $control = '';
    /**
     * Workers are expected to set this to true if the workflow they are requesting to cancel is
     * a child of the workflow which issued the request
     *
     * Generated from protobuf field <code>bool child_workflow_only = 5;</code>
     */
    protected $child_workflow_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $workflow_task_completed_event_id
     *           The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *     @type string $namespace
     *           The namespace the workflow to be cancelled lives in
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type string $control
     *           Deprecated
     *     @type bool $child_workflow_only
     *           Workers are expected to set this to true if the workflow they are requesting to cancel is
     *           a child of the workflow which issued the request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 1;</code>
     * @return int|string
     */
    public function getWorkflowTaskCompletedEventId()
    {
        return $this->workflow_task_completed_event_id;
    }

    /**
     * The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 1;</code>
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
     * The namespace the workflow to be cancelled lives in
     *
     * Generated from protobuf field <code>string namespace = 2;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * The namespace the workflow to be cancelled lives in
     *
     * Generated from protobuf field <code>string namespace = 2;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 3;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 3;</code>
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
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 4;</code>
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setControl($var)
    {
        GPBUtil::checkString($var, True);
        $this->control = $var;

        return $this;
    }

    /**
     * Workers are expected to set this to true if the workflow they are requesting to cancel is
     * a child of the workflow which issued the request
     *
     * Generated from protobuf field <code>bool child_workflow_only = 5;</code>
     * @return bool
     */
    public function getChildWorkflowOnly()
    {
        return $this->child_workflow_only;
    }

    /**
     * Workers are expected to set this to true if the workflow they are requesting to cancel is
     * a child of the workflow which issued the request
     *
     * Generated from protobuf field <code>bool child_workflow_only = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setChildWorkflowOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->child_workflow_only = $var;

        return $this;
    }

}

