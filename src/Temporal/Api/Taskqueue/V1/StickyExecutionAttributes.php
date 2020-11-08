<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/taskqueue/v1/message.proto

namespace Temporal\Api\Taskqueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.taskqueue.v1.StickyExecutionAttributes</code>
 */
class StickyExecutionAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue worker_task_queue = 1;</code>
     */
    protected $worker_task_queue = null;
    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     */
    protected $schedule_to_start_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $worker_task_queue
     *     @type \Google\Protobuf\Duration $schedule_to_start_timeout
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue worker_task_queue = 1;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue
     */
    public function getWorkerTaskQueue()
    {
        return $this->worker_task_queue;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue worker_task_queue = 1;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueue $var
     * @return $this
     */
    public function setWorkerTaskQueue($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueue::class);
        $this->worker_task_queue = $var;

        return $this;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getScheduleToStartTimeout()
    {
        return $this->schedule_to_start_timeout;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setScheduleToStartTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->schedule_to_start_timeout = $var;

        return $this;
    }

}

