<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.ActivityTaskScheduledEventAttributes</code>
 */
class ActivityTaskScheduledEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string activity_id = 1;</code>
     */
    protected $activity_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 2;</code>
     */
    protected $activity_type = null;
    /**
     * Generated from protobuf field <code>string namespace = 3;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     */
    protected $task_queue = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     */
    protected $header = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 6;</code>
     */
    protected $input = null;
    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Indicates how long the caller is willing to wait for an activity completion.
     * Limits for how long retries are happening. Either this or start_to_close_timeout_seconds must be specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     */
    protected $schedule_to_close_timeout = null;
    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Limits time an activity task can stay in a task queue before a worker picks it up.
     * This timeout is always non retryable as all a retry would achieve is to put it back into the same queue.
     * Defaults to schedule_to_close_timeout_seconds or workflow execution timeout if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     */
    protected $schedule_to_start_timeout = null;
    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Maximum time an activity is allowed to execute after a pick up by a worker.
     * This timeout is always retryable. Either this or schedule_to_close_timeout_seconds must be specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 9 [(.gogoproto.stdduration) = true];</code>
     */
    protected $start_to_close_timeout = null;
    /**
     * Maximum time between successful worker heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 10 [(.gogoproto.stdduration) = true];</code>
     */
    protected $heartbeat_timeout = null;
    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 11;</code>
     */
    protected $workflow_task_completed_event_id = 0;
    /**
     * Activities are provided by a default retry policy controlled through the service dynamic configuration.
     * Retries are happening up to schedule_to_close_timeout.
     * To disable retries set retry_policy.maximum_attempts to 1.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 12;</code>
     */
    protected $retry_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $activity_id
     *     @type \Temporal\Api\Common\V1\ActivityType $activity_type
     *     @type string $namespace
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *     @type \Temporal\Api\Common\V1\Header $header
     *     @type \Temporal\Api\Common\V1\Payloads $input
     *     @type \Google\Protobuf\Duration $schedule_to_close_timeout
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *           Indicates how long the caller is willing to wait for an activity completion.
     *           Limits for how long retries are happening. Either this or start_to_close_timeout_seconds must be specified.
     *     @type \Google\Protobuf\Duration $schedule_to_start_timeout
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *           Limits time an activity task can stay in a task queue before a worker picks it up.
     *           This timeout is always non retryable as all a retry would achieve is to put it back into the same queue.
     *           Defaults to schedule_to_close_timeout_seconds or workflow execution timeout if not specified.
     *     @type \Google\Protobuf\Duration $start_to_close_timeout
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *           Maximum time an activity is allowed to execute after a pick up by a worker.
     *           This timeout is always retryable. Either this or schedule_to_close_timeout_seconds must be specified.
     *     @type \Google\Protobuf\Duration $heartbeat_timeout
     *           Maximum time between successful worker heartbeats.
     *     @type int|string $workflow_task_completed_event_id
     *     @type \Temporal\Api\Common\V1\RetryPolicy $retry_policy
     *           Activities are provided by a default retry policy controlled through the service dynamic configuration.
     *           Retries are happening up to schedule_to_close_timeout.
     *           To disable retries set retry_policy.maximum_attempts to 1.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string activity_id = 1;</code>
     * @return string
     */
    public function getActivityId()
    {
        return $this->activity_id;
    }

    /**
     * Generated from protobuf field <code>string activity_id = 1;</code>
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
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 2;</code>
     * @return \Temporal\Api\Common\V1\ActivityType
     */
    public function getActivityType()
    {
        return $this->activity_type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 2;</code>
     * @param \Temporal\Api\Common\V1\ActivityType $var
     * @return $this
     */
    public function setActivityType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\ActivityType::class);
        $this->activity_type = $var;

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
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    /**
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
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     * @return \Temporal\Api\Common\V1\Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     * @param \Temporal\Api\Common\V1\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 6;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
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
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Indicates how long the caller is willing to wait for an activity completion.
     * Limits for how long retries are happening. Either this or start_to_close_timeout_seconds must be specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getScheduleToCloseTimeout()
    {
        return $this->schedule_to_close_timeout;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Indicates how long the caller is willing to wait for an activity completion.
     * Limits for how long retries are happening. Either this or start_to_close_timeout_seconds must be specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setScheduleToCloseTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->schedule_to_close_timeout = $var;

        return $this;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Limits time an activity task can stay in a task queue before a worker picks it up.
     * This timeout is always non retryable as all a retry would achieve is to put it back into the same queue.
     * Defaults to schedule_to_close_timeout_seconds or workflow execution timeout if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getScheduleToStartTimeout()
    {
        return $this->schedule_to_start_timeout;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Limits time an activity task can stay in a task queue before a worker picks it up.
     * This timeout is always non retryable as all a retry would achieve is to put it back into the same queue.
     * Defaults to schedule_to_close_timeout_seconds or workflow execution timeout if not specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setScheduleToStartTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->schedule_to_start_timeout = $var;

        return $this;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Maximum time an activity is allowed to execute after a pick up by a worker.
     * This timeout is always retryable. Either this or schedule_to_close_timeout_seconds must be specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 9 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getStartToCloseTimeout()
    {
        return $this->start_to_close_timeout;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     * Maximum time an activity is allowed to execute after a pick up by a worker.
     * This timeout is always retryable. Either this or schedule_to_close_timeout_seconds must be specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 9 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartToCloseTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_to_close_timeout = $var;

        return $this;
    }

    /**
     * Maximum time between successful worker heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 10 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getHeartbeatTimeout()
    {
        return $this->heartbeat_timeout;
    }

    /**
     * Maximum time between successful worker heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 10 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setHeartbeatTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->heartbeat_timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 11;</code>
     * @return int|string
     */
    public function getWorkflowTaskCompletedEventId()
    {
        return $this->workflow_task_completed_event_id;
    }

    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 11;</code>
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
     * Activities are provided by a default retry policy controlled through the service dynamic configuration.
     * Retries are happening up to schedule_to_close_timeout.
     * To disable retries set retry_policy.maximum_attempts to 1.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 12;</code>
     * @return \Temporal\Api\Common\V1\RetryPolicy
     */
    public function getRetryPolicy()
    {
        return $this->retry_policy;
    }

    /**
     * Activities are provided by a default retry policy controlled through the service dynamic configuration.
     * Retries are happening up to schedule_to_close_timeout.
     * To disable retries set retry_policy.maximum_attempts to 1.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 12;</code>
     * @param \Temporal\Api\Common\V1\RetryPolicy $var
     * @return $this
     */
    public function setRetryPolicy($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\RetryPolicy::class);
        $this->retry_policy = $var;

        return $this;
    }

}

