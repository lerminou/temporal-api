<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflow/v1/message.proto

namespace Temporal\Api\Workflow\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflow.v1.WorkflowExecutionInfo</code>
 */
class WorkflowExecutionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution execution = 1;</code>
     */
    protected $execution = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType type = 2;</code>
     */
    protected $type = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.gogoproto.stdtime) = true];</code>
     */
    protected $start_time = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_time = 4 [(.gogoproto.stdtime) = true];</code>
     */
    protected $close_time = null;
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowExecutionStatus status = 5;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>int64 history_length = 6;</code>
     */
    protected $history_length = 0;
    /**
     * Generated from protobuf field <code>string parent_namespace_id = 7;</code>
     */
    protected $parent_namespace_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution parent_execution = 8;</code>
     */
    protected $parent_execution = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp execution_time = 9 [(.gogoproto.stdtime) = true];</code>
     */
    protected $execution_time = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 10;</code>
     */
    protected $memo = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 11;</code>
     */
    protected $search_attributes = null;
    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.ResetPoints auto_reset_points = 12;</code>
     */
    protected $auto_reset_points = null;
    /**
     * Generated from protobuf field <code>string task_queue = 13;</code>
     */
    protected $task_queue = '';
    /**
     * Generated from protobuf field <code>int64 state_transition_count = 14;</code>
     */
    protected $state_transition_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $execution
     *     @type \Temporal\Api\Common\V1\WorkflowType $type
     *     @type \Google\Protobuf\Timestamp $start_time
     *     @type \Google\Protobuf\Timestamp $close_time
     *     @type int $status
     *     @type int|string $history_length
     *     @type string $parent_namespace_id
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $parent_execution
     *     @type \Google\Protobuf\Timestamp $execution_time
     *     @type \Temporal\Api\Common\V1\Memo $memo
     *     @type \Temporal\Api\Common\V1\SearchAttributes $search_attributes
     *     @type \Temporal\Api\Workflow\V1\ResetPoints $auto_reset_points
     *     @type string $task_queue
     *     @type int|string $state_transition_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflow\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution execution = 1;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution
     */
    public function getExecution()
    {
        return $this->execution;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution execution = 1;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType type = 2;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType type = 2;</code>
     * @param \Temporal\Api\Common\V1\WorkflowType $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_time = 4 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCloseTime()
    {
        return $this->close_time;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp close_time = 4 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCloseTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->close_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowExecutionStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowExecutionStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\WorkflowExecutionStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 history_length = 6;</code>
     * @return int|string
     */
    public function getHistoryLength()
    {
        return $this->history_length;
    }

    /**
     * Generated from protobuf field <code>int64 history_length = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHistoryLength($var)
    {
        GPBUtil::checkInt64($var);
        $this->history_length = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string parent_namespace_id = 7;</code>
     * @return string
     */
    public function getParentNamespaceId()
    {
        return $this->parent_namespace_id;
    }

    /**
     * Generated from protobuf field <code>string parent_namespace_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setParentNamespaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_namespace_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution parent_execution = 8;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution
     */
    public function getParentExecution()
    {
        return $this->parent_execution;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution parent_execution = 8;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setParentExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->parent_execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp execution_time = 9 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExecutionTime()
    {
        return $this->execution_time;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp execution_time = 9 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExecutionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->execution_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 10;</code>
     * @return \Temporal\Api\Common\V1\Memo
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 10;</code>
     * @param \Temporal\Api\Common\V1\Memo $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Memo::class);
        $this->memo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 11;</code>
     * @return \Temporal\Api\Common\V1\SearchAttributes
     */
    public function getSearchAttributes()
    {
        return $this->search_attributes;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 11;</code>
     * @param \Temporal\Api\Common\V1\SearchAttributes $var
     * @return $this
     */
    public function setSearchAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\SearchAttributes::class);
        $this->search_attributes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.ResetPoints auto_reset_points = 12;</code>
     * @return \Temporal\Api\Workflow\V1\ResetPoints
     */
    public function getAutoResetPoints()
    {
        return $this->auto_reset_points;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.ResetPoints auto_reset_points = 12;</code>
     * @param \Temporal\Api\Workflow\V1\ResetPoints $var
     * @return $this
     */
    public function setAutoResetPoints($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflow\V1\ResetPoints::class);
        $this->auto_reset_points = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string task_queue = 13;</code>
     * @return string
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    /**
     * Generated from protobuf field <code>string task_queue = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 state_transition_count = 14;</code>
     * @return int|string
     */
    public function getStateTransitionCount()
    {
        return $this->state_transition_count;
    }

    /**
     * Generated from protobuf field <code>int64 state_transition_count = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStateTransitionCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->state_transition_count = $var;

        return $this;
    }

}

