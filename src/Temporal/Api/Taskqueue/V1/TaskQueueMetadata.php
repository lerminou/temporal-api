<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/taskqueue/v1/message.proto

namespace Temporal\Api\Taskqueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Only applies to activity task queues
 *
 * Generated from protobuf message <code>temporal.api.taskqueue.v1.TaskQueueMetadata</code>
 */
class TaskQueueMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Allows throttling dispatch of tasks from this queue
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_tasks_per_second = 1;</code>
     */
    protected $max_tasks_per_second = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $max_tasks_per_second
     *           Allows throttling dispatch of tasks from this queue
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Allows throttling dispatch of tasks from this queue
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_tasks_per_second = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getMaxTasksPerSecond()
    {
        return $this->max_tasks_per_second;
    }

    /**
     * Returns the unboxed value from <code>getMaxTasksPerSecond()</code>

     * Allows throttling dispatch of tasks from this queue
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_tasks_per_second = 1;</code>
     * @return float|null
     */
    public function getMaxTasksPerSecondUnwrapped()
    {
        return $this->readWrapperValue("max_tasks_per_second");
    }

    /**
     * Allows throttling dispatch of tasks from this queue
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_tasks_per_second = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setMaxTasksPerSecond($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->max_tasks_per_second = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Allows throttling dispatch of tasks from this queue
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_tasks_per_second = 1;</code>
     * @param float|null $var
     * @return $this
     */
    public function setMaxTasksPerSecondUnwrapped($var)
    {
        $this->writeWrapperValue("max_tasks_per_second", $var);
        return $this;}

}

