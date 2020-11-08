<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.DescribeWorkflowExecutionResponse</code>
 */
class DescribeWorkflowExecutionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionConfig execution_config = 1;</code>
     */
    protected $execution_config = null;
    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionInfo workflow_execution_info = 2;</code>
     */
    protected $workflow_execution_info = null;
    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflow.v1.PendingActivityInfo pending_activities = 3;</code>
     */
    private $pending_activities;
    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflow.v1.PendingChildExecutionInfo pending_children = 4;</code>
     */
    private $pending_children;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Workflow\V1\WorkflowExecutionConfig $execution_config
     *     @type \Temporal\Api\Workflow\V1\WorkflowExecutionInfo $workflow_execution_info
     *     @type \Temporal\Api\Workflow\V1\PendingActivityInfo[]|\Google\Protobuf\Internal\RepeatedField $pending_activities
     *     @type \Temporal\Api\Workflow\V1\PendingChildExecutionInfo[]|\Google\Protobuf\Internal\RepeatedField $pending_children
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionConfig execution_config = 1;</code>
     * @return \Temporal\Api\Workflow\V1\WorkflowExecutionConfig
     */
    public function getExecutionConfig()
    {
        return $this->execution_config;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionConfig execution_config = 1;</code>
     * @param \Temporal\Api\Workflow\V1\WorkflowExecutionConfig $var
     * @return $this
     */
    public function setExecutionConfig($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflow\V1\WorkflowExecutionConfig::class);
        $this->execution_config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionInfo workflow_execution_info = 2;</code>
     * @return \Temporal\Api\Workflow\V1\WorkflowExecutionInfo
     */
    public function getWorkflowExecutionInfo()
    {
        return $this->workflow_execution_info;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.WorkflowExecutionInfo workflow_execution_info = 2;</code>
     * @param \Temporal\Api\Workflow\V1\WorkflowExecutionInfo $var
     * @return $this
     */
    public function setWorkflowExecutionInfo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflow\V1\WorkflowExecutionInfo::class);
        $this->workflow_execution_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflow.v1.PendingActivityInfo pending_activities = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingActivities()
    {
        return $this->pending_activities;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflow.v1.PendingActivityInfo pending_activities = 3;</code>
     * @param \Temporal\Api\Workflow\V1\PendingActivityInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingActivities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Workflow\V1\PendingActivityInfo::class);
        $this->pending_activities = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflow.v1.PendingChildExecutionInfo pending_children = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingChildren()
    {
        return $this->pending_children;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.workflow.v1.PendingChildExecutionInfo pending_children = 4;</code>
     * @param \Temporal\Api\Workflow\V1\PendingChildExecutionInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingChildren($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Workflow\V1\PendingChildExecutionInfo::class);
        $this->pending_children = $arr;

        return $this;
    }

}

