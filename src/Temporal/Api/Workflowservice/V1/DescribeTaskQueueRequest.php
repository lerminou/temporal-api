<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.DescribeTaskQueueRequest</code>
 */
class DescribeTaskQueueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 2;</code>
     */
    protected $task_queue = null;
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskQueueType task_queue_type = 3;</code>
     */
    protected $task_queue_type = 0;
    /**
     * Generated from protobuf field <code>bool include_task_queue_status = 4;</code>
     */
    protected $include_task_queue_status = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *     @type int $task_queue_type
     *     @type bool $include_task_queue_status
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
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 2;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 2;</code>
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
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskQueueType task_queue_type = 3;</code>
     * @return int
     */
    public function getTaskQueueType()
    {
        return $this->task_queue_type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskQueueType task_queue_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTaskQueueType($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\TaskQueueType::class);
        $this->task_queue_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool include_task_queue_status = 4;</code>
     * @return bool
     */
    public function getIncludeTaskQueueStatus()
    {
        return $this->include_task_queue_status;
    }

    /**
     * Generated from protobuf field <code>bool include_task_queue_status = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeTaskQueueStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->include_task_queue_status = $var;

        return $this;
    }

}

