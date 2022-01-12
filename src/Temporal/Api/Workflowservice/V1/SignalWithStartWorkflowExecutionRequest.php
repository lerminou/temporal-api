<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.SignalWithStartWorkflowExecutionRequest</code>
 */
class SignalWithStartWorkflowExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     */
    protected $workflow_type = null;
    /**
     * The task queue to start this workflow on, if it will be started
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     */
    protected $task_queue = null;
    /**
     * Serialized arguments to the workflow. These are passed as arguments to the workflow function.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
     */
    protected $input = null;
    /**
     * Total workflow execution timeout including retries and continue as new
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_execution_timeout = null;
    /**
     * Timeout of a single workflow run
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_run_timeout = null;
    /**
     * Timeout of a single workflow task
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_task_timeout = null;
    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 9;</code>
     */
    protected $identity = '';
    /**
     * Used to de-dupe signal w/ start requests
     *
     * Generated from protobuf field <code>string request_id = 10;</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 11;</code>
     */
    protected $workflow_id_reuse_policy = 0;
    /**
     * The workflow author-defined name of the signal to send to the workflow
     *
     * Generated from protobuf field <code>string signal_name = 12;</code>
     */
    protected $signal_name = '';
    /**
     * Serialized value(s) to provide with the signal
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads signal_input = 13;</code>
     */
    protected $signal_input = null;
    /**
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 14;</code>
     */
    protected $control = '';
    /**
     * Retry policy for the workflow Default: WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 15;</code>
     */
    protected $retry_policy = null;
    /**
     * See https://docs.temporal.io/docs/content/what-is-a-temporal-cron-job/
     *
     * Generated from protobuf field <code>string cron_schedule = 16;</code>
     */
    protected $cron_schedule = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 17;</code>
     */
    protected $memo = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 18;</code>
     */
    protected $search_attributes = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 19;</code>
     */
    protected $header = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type string $workflow_id
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *           The task queue to start this workflow on, if it will be started
     *     @type \Temporal\Api\Common\V1\Payloads $input
     *           Serialized arguments to the workflow. These are passed as arguments to the workflow function.
     *     @type \Google\Protobuf\Duration $workflow_execution_timeout
     *           Total workflow execution timeout including retries and continue as new
     *     @type \Google\Protobuf\Duration $workflow_run_timeout
     *           Timeout of a single workflow run
     *     @type \Google\Protobuf\Duration $workflow_task_timeout
     *           Timeout of a single workflow task
     *     @type string $identity
     *           The identity of the worker/client
     *     @type string $request_id
     *           Used to de-dupe signal w/ start requests
     *     @type int $workflow_id_reuse_policy
     *     @type string $signal_name
     *           The workflow author-defined name of the signal to send to the workflow
     *     @type \Temporal\Api\Common\V1\Payloads $signal_input
     *           Serialized value(s) to provide with the signal
     *     @type string $control
     *           Deprecated
     *     @type \Temporal\Api\Common\V1\RetryPolicy $retry_policy
     *           Retry policy for the workflow Default: WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *     @type string $cron_schedule
     *           See https://docs.temporal.io/docs/content/what-is-a-temporal-cron-job/
     *     @type \Temporal\Api\Common\V1\Memo $memo
     *     @type \Temporal\Api\Common\V1\SearchAttributes $search_attributes
     *     @type \Temporal\Api\Common\V1\Header $header
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
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
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
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
     * The task queue to start this workflow on, if it will be started
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    /**
     * The task queue to start this workflow on, if it will be started
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
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
     * Serialized arguments to the workflow. These are passed as arguments to the workflow function.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Serialized arguments to the workflow. These are passed as arguments to the workflow function.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
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
     * Total workflow execution timeout including retries and continue as new
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getWorkflowExecutionTimeout()
    {
        return $this->workflow_execution_timeout;
    }

    /**
     * Total workflow execution timeout including retries and continue as new
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6 [(.gogoproto.stdduration) = true];</code>
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
     * Timeout of a single workflow run
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getWorkflowRunTimeout()
    {
        return $this->workflow_run_timeout;
    }

    /**
     * Timeout of a single workflow run
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7 [(.gogoproto.stdduration) = true];</code>
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
     * Timeout of a single workflow task
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getWorkflowTaskTimeout()
    {
        return $this->workflow_task_timeout;
    }

    /**
     * Timeout of a single workflow task
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8 [(.gogoproto.stdduration) = true];</code>
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
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 9;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the worker/client
     *
     * Generated from protobuf field <code>string identity = 9;</code>
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
     * Used to de-dupe signal w/ start requests
     *
     * Generated from protobuf field <code>string request_id = 10;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Used to de-dupe signal w/ start requests
     *
     * Generated from protobuf field <code>string request_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 11;</code>
     * @return int
     */
    public function getWorkflowIdReusePolicy()
    {
        return $this->workflow_id_reuse_policy;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkflowIdReusePolicy($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\WorkflowIdReusePolicy::class);
        $this->workflow_id_reuse_policy = $var;

        return $this;
    }

    /**
     * The workflow author-defined name of the signal to send to the workflow
     *
     * Generated from protobuf field <code>string signal_name = 12;</code>
     * @return string
     */
    public function getSignalName()
    {
        return $this->signal_name;
    }

    /**
     * The workflow author-defined name of the signal to send to the workflow
     *
     * Generated from protobuf field <code>string signal_name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSignalName($var)
    {
        GPBUtil::checkString($var, True);
        $this->signal_name = $var;

        return $this;
    }

    /**
     * Serialized value(s) to provide with the signal
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads signal_input = 13;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getSignalInput()
    {
        return $this->signal_input;
    }

    /**
     * Serialized value(s) to provide with the signal
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads signal_input = 13;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setSignalInput($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->signal_input = $var;

        return $this;
    }

    /**
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 14;</code>
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 14;</code>
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
     * Retry policy for the workflow Default: WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 15;</code>
     * @return \Temporal\Api\Common\V1\RetryPolicy
     */
    public function getRetryPolicy()
    {
        return $this->retry_policy;
    }

    /**
     * Retry policy for the workflow Default: WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 15;</code>
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
     * See https://docs.temporal.io/docs/content/what-is-a-temporal-cron-job/
     *
     * Generated from protobuf field <code>string cron_schedule = 16;</code>
     * @return string
     */
    public function getCronSchedule()
    {
        return $this->cron_schedule;
    }

    /**
     * See https://docs.temporal.io/docs/content/what-is-a-temporal-cron-job/
     *
     * Generated from protobuf field <code>string cron_schedule = 16;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 17;</code>
     * @return \Temporal\Api\Common\V1\Memo
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 17;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 18;</code>
     * @return \Temporal\Api\Common\V1\SearchAttributes
     */
    public function getSearchAttributes()
    {
        return $this->search_attributes;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 18;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 19;</code>
     * @return \Temporal\Api\Common\V1\Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 19;</code>
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

