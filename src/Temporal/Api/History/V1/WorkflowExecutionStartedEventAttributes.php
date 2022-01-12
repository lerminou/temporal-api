<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Always the first event in workflow history
 *
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowExecutionStartedEventAttributes</code>
 */
class WorkflowExecutionStartedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 1;</code>
     */
    protected $workflow_type = null;
    /**
     * If this workflow is a child, the namespace our parent lives in
     *
     * Generated from protobuf field <code>string parent_workflow_namespace = 2;</code>
     */
    protected $parent_workflow_namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution parent_workflow_execution = 3;</code>
     */
    protected $parent_workflow_execution = null;
    /**
     * TODO: What is this? ID of the event that requested this workflow execution if we are a child?
     *
     * Generated from protobuf field <code>int64 parent_initiated_event_id = 4;</code>
     */
    protected $parent_initiated_event_id = 0;
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 5;</code>
     */
    protected $task_queue = null;
    /**
     * SDK will deserialize this and provide it as arguments to the workflow function
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 6;</code>
     */
    protected $input = null;
    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_execution_timeout = null;
    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_run_timeout = null;
    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 9 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_task_timeout = null;
    /**
     * Run id of the previous workflow which continued-as-new or retired or cron executed into this
     * workflow.
     *
     * Generated from protobuf field <code>string continued_execution_run_id = 10;</code>
     */
    protected $continued_execution_run_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.ContinueAsNewInitiator initiator = 11;</code>
     */
    protected $initiator = 0;
    /**
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure continued_failure = 12;</code>
     */
    protected $continued_failure = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_completion_result = 13;</code>
     */
    protected $last_completion_result = null;
    /**
     * This is the run id when the WorkflowExecutionStarted event was written
     *
     * Generated from protobuf field <code>string original_execution_run_id = 14;</code>
     */
    protected $original_execution_run_id = '';
    /**
     * Identity of the client who requested this execution
     *
     * Generated from protobuf field <code>string identity = 15;</code>
     */
    protected $identity = '';
    /**
     * This is the very first runId along the chain of ContinueAsNew and Reset.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 16;</code>
     */
    protected $first_execution_run_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 17;</code>
     */
    protected $retry_policy = null;
    /**
     * Starting at 1, the number of times we have tried to execute this workflow
     *
     * Generated from protobuf field <code>int32 attempt = 18;</code>
     */
    protected $attempt = 0;
    /**
     * The absolute time at which the workflow will be timed out.
     * This is passed without change to the next run/retry of a workflow.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp workflow_execution_expiration_time = 19 [(.gogoproto.stdtime) = true];</code>
     */
    protected $workflow_execution_expiration_time = null;
    /**
     * If this workflow runs on a cron schedule, it will appear here
     *
     * Generated from protobuf field <code>string cron_schedule = 20;</code>
     */
    protected $cron_schedule = '';
    /**
     * TODO: What is this? Appears unused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration first_workflow_task_backoff = 21 [(.gogoproto.stdduration) = true];</code>
     */
    protected $first_workflow_task_backoff = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 22;</code>
     */
    protected $memo = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 23;</code>
     */
    protected $search_attributes = null;
    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.ResetPoints prev_auto_reset_points = 24;</code>
     */
    protected $prev_auto_reset_points = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 25;</code>
     */
    protected $header = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *     @type string $parent_workflow_namespace
     *           If this workflow is a child, the namespace our parent lives in
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $parent_workflow_execution
     *     @type int|string $parent_initiated_event_id
     *           TODO: What is this? ID of the event that requested this workflow execution if we are a child?
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *     @type \Temporal\Api\Common\V1\Payloads $input
     *           SDK will deserialize this and provide it as arguments to the workflow function
     *     @type \Google\Protobuf\Duration $workflow_execution_timeout
     *           Total workflow execution timeout including retries and continue as new.
     *     @type \Google\Protobuf\Duration $workflow_run_timeout
     *           Timeout of a single workflow run.
     *     @type \Google\Protobuf\Duration $workflow_task_timeout
     *           Timeout of a single workflow task.
     *     @type string $continued_execution_run_id
     *           Run id of the previous workflow which continued-as-new or retired or cron executed into this
     *           workflow.
     *     @type int $initiator
     *     @type \Temporal\Api\Failure\V1\Failure $continued_failure
     *     @type \Temporal\Api\Common\V1\Payloads $last_completion_result
     *     @type string $original_execution_run_id
     *           This is the run id when the WorkflowExecutionStarted event was written
     *     @type string $identity
     *           Identity of the client who requested this execution
     *     @type string $first_execution_run_id
     *           This is the very first runId along the chain of ContinueAsNew and Reset.
     *     @type \Temporal\Api\Common\V1\RetryPolicy $retry_policy
     *     @type int $attempt
     *           Starting at 1, the number of times we have tried to execute this workflow
     *     @type \Google\Protobuf\Timestamp $workflow_execution_expiration_time
     *           The absolute time at which the workflow will be timed out.
     *           This is passed without change to the next run/retry of a workflow.
     *     @type string $cron_schedule
     *           If this workflow runs on a cron schedule, it will appear here
     *     @type \Google\Protobuf\Duration $first_workflow_task_backoff
     *           TODO: What is this? Appears unused.
     *     @type \Temporal\Api\Common\V1\Memo $memo
     *     @type \Temporal\Api\Common\V1\SearchAttributes $search_attributes
     *     @type \Temporal\Api\Workflow\V1\ResetPoints $prev_auto_reset_points
     *     @type \Temporal\Api\Common\V1\Header $header
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 1;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType
     */
    public function getWorkflowType()
    {
        return $this->workflow_type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 1;</code>
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
     * If this workflow is a child, the namespace our parent lives in
     *
     * Generated from protobuf field <code>string parent_workflow_namespace = 2;</code>
     * @return string
     */
    public function getParentWorkflowNamespace()
    {
        return $this->parent_workflow_namespace;
    }

    /**
     * If this workflow is a child, the namespace our parent lives in
     *
     * Generated from protobuf field <code>string parent_workflow_namespace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParentWorkflowNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_workflow_namespace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution parent_workflow_execution = 3;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution
     */
    public function getParentWorkflowExecution()
    {
        return $this->parent_workflow_execution;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution parent_workflow_execution = 3;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setParentWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->parent_workflow_execution = $var;

        return $this;
    }

    /**
     * TODO: What is this? ID of the event that requested this workflow execution if we are a child?
     *
     * Generated from protobuf field <code>int64 parent_initiated_event_id = 4;</code>
     * @return int|string
     */
    public function getParentInitiatedEventId()
    {
        return $this->parent_initiated_event_id;
    }

    /**
     * TODO: What is this? ID of the event that requested this workflow execution if we are a child?
     *
     * Generated from protobuf field <code>int64 parent_initiated_event_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParentInitiatedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->parent_initiated_event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 5;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 5;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueue $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueue::class);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * SDK will deserialize this and provide it as arguments to the workflow function
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 6;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * SDK will deserialize this and provide it as arguments to the workflow function
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 6;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getWorkflowExecutionTimeout()
    {
        return $this->workflow_execution_timeout;
    }

    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_execution_timeout = $var;

        return $this;
    }

    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getWorkflowRunTimeout()
    {
        return $this->workflow_run_timeout;
    }

    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowRunTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_run_timeout = $var;

        return $this;
    }

    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 9 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getWorkflowTaskTimeout()
    {
        return $this->workflow_task_timeout;
    }

    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 9 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowTaskTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_task_timeout = $var;

        return $this;
    }

    /**
     * Run id of the previous workflow which continued-as-new or retired or cron executed into this
     * workflow.
     *
     * Generated from protobuf field <code>string continued_execution_run_id = 10;</code>
     * @return string
     */
    public function getContinuedExecutionRunId()
    {
        return $this->continued_execution_run_id;
    }

    /**
     * Run id of the previous workflow which continued-as-new or retired or cron executed into this
     * workflow.
     *
     * Generated from protobuf field <code>string continued_execution_run_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setContinuedExecutionRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->continued_execution_run_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.ContinueAsNewInitiator initiator = 11;</code>
     * @return int
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.ContinueAsNewInitiator initiator = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setInitiator($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\ContinueAsNewInitiator::class);
        $this->initiator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure continued_failure = 12;</code>
     * @return \Temporal\Api\Failure\V1\Failure
     */
    public function getContinuedFailure()
    {
        return $this->continued_failure;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.failure.v1.Failure continued_failure = 12;</code>
     * @param \Temporal\Api\Failure\V1\Failure $var
     * @return $this
     */
    public function setContinuedFailure($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Failure\V1\Failure::class);
        $this->continued_failure = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_completion_result = 13;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getLastCompletionResult()
    {
        return $this->last_completion_result;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads last_completion_result = 13;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setLastCompletionResult($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->last_completion_result = $var;

        return $this;
    }

    /**
     * This is the run id when the WorkflowExecutionStarted event was written
     *
     * Generated from protobuf field <code>string original_execution_run_id = 14;</code>
     * @return string
     */
    public function getOriginalExecutionRunId()
    {
        return $this->original_execution_run_id;
    }

    /**
     * This is the run id when the WorkflowExecutionStarted event was written
     *
     * Generated from protobuf field <code>string original_execution_run_id = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalExecutionRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_execution_run_id = $var;

        return $this;
    }

    /**
     * Identity of the client who requested this execution
     *
     * Generated from protobuf field <code>string identity = 15;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Identity of the client who requested this execution
     *
     * Generated from protobuf field <code>string identity = 15;</code>
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
     * This is the very first runId along the chain of ContinueAsNew and Reset.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 16;</code>
     * @return string
     */
    public function getFirstExecutionRunId()
    {
        return $this->first_execution_run_id;
    }

    /**
     * This is the very first runId along the chain of ContinueAsNew and Reset.
     *
     * Generated from protobuf field <code>string first_execution_run_id = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstExecutionRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_execution_run_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 17;</code>
     * @return \Temporal\Api\Common\V1\RetryPolicy
     */
    public function getRetryPolicy()
    {
        return $this->retry_policy;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 17;</code>
     * @param \Temporal\Api\Common\V1\RetryPolicy $var
     * @return $this
     */
    public function setRetryPolicy($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\RetryPolicy::class);
        $this->retry_policy = $var;

        return $this;
    }

    /**
     * Starting at 1, the number of times we have tried to execute this workflow
     *
     * Generated from protobuf field <code>int32 attempt = 18;</code>
     * @return int
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Starting at 1, the number of times we have tried to execute this workflow
     *
     * Generated from protobuf field <code>int32 attempt = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setAttempt($var)
    {
        GPBUtil::checkInt32($var);
        $this->attempt = $var;

        return $this;
    }

    /**
     * The absolute time at which the workflow will be timed out.
     * This is passed without change to the next run/retry of a workflow.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp workflow_execution_expiration_time = 19 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getWorkflowExecutionExpirationTime()
    {
        return $this->workflow_execution_expiration_time;
    }

    /**
     * The absolute time at which the workflow will be timed out.
     * This is passed without change to the next run/retry of a workflow.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp workflow_execution_expiration_time = 19 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setWorkflowExecutionExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->workflow_execution_expiration_time = $var;

        return $this;
    }

    /**
     * If this workflow runs on a cron schedule, it will appear here
     *
     * Generated from protobuf field <code>string cron_schedule = 20;</code>
     * @return string
     */
    public function getCronSchedule()
    {
        return $this->cron_schedule;
    }

    /**
     * If this workflow runs on a cron schedule, it will appear here
     *
     * Generated from protobuf field <code>string cron_schedule = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setCronSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->cron_schedule = $var;

        return $this;
    }

    /**
     * TODO: What is this? Appears unused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration first_workflow_task_backoff = 21 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getFirstWorkflowTaskBackoff()
    {
        return $this->first_workflow_task_backoff;
    }

    /**
     * TODO: What is this? Appears unused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration first_workflow_task_backoff = 21 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setFirstWorkflowTaskBackoff($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->first_workflow_task_backoff = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 22;</code>
     * @return \Temporal\Api\Common\V1\Memo
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 22;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 23;</code>
     * @return \Temporal\Api\Common\V1\SearchAttributes
     */
    public function getSearchAttributes()
    {
        return $this->search_attributes;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 23;</code>
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
     * Generated from protobuf field <code>.temporal.api.workflow.v1.ResetPoints prev_auto_reset_points = 24;</code>
     * @return \Temporal\Api\Workflow\V1\ResetPoints
     */
    public function getPrevAutoResetPoints()
    {
        return $this->prev_auto_reset_points;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.workflow.v1.ResetPoints prev_auto_reset_points = 24;</code>
     * @param \Temporal\Api\Workflow\V1\ResetPoints $var
     * @return $this
     */
    public function setPrevAutoResetPoints($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflow\V1\ResetPoints::class);
        $this->prev_auto_reset_points = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 25;</code>
     * @return \Temporal\Api\Common\V1\Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 25;</code>
     * @param \Temporal\Api\Common\V1\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Header::class);
        $this->header = $var;

        return $this;
    }

}

