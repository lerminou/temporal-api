<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.RespondWorkflowTaskCompletedResponse</code>
 */
class RespondWorkflowTaskCompletedResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * See `RespondWorkflowTaskCompletedResponse::return_new_workflow_task`
     *
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.PollWorkflowTaskQueueResponse workflow_task = 1;</code>
     */
    protected $workflow_task = null;
    /**
     * See `ScheduleActivityTaskCommandAttributes::request_start`
     *
     * Generated from protobuf field <code>repeated .temporal.api.workflowservice.v1.PollActivityTaskQueueResponse activity_tasks = 2;</code>
     */
    private $activity_tasks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Workflowservice\V1\PollWorkflowTaskQueueResponse $workflow_task
     *           See `RespondWorkflowTaskCompletedResponse::return_new_workflow_task`
     *     @type \Temporal\Api\Workflowservice\V1\PollActivityTaskQueueResponse[]|\Google\Protobuf\Internal\RepeatedField $activity_tasks
     *           See `ScheduleActivityTaskCommandAttributes::request_start`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * See `RespondWorkflowTaskCompletedResponse::return_new_workflow_task`
     *
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.PollWorkflowTaskQueueResponse workflow_task = 1;</code>
     * @return \Temporal\Api\Workflowservice\V1\PollWorkflowTaskQueueResponse
     */
    public function getWorkflowTask()
    {
        return $this->workflow_task;
    }

    /**
     * See `RespondWorkflowTaskCompletedResponse::return_new_workflow_task`
     *
     * Generated from protobuf field <code>.temporal.api.workflowservice.v1.PollWorkflowTaskQueueResponse workflow_task = 1;</code>
     * @param \Temporal\Api\Workflowservice\V1\PollWorkflowTaskQueueResponse $var
     * @return $this
     */
    public function setWorkflowTask($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Workflowservice\V1\PollWorkflowTaskQueueResponse::class);
        $this->workflow_task = $var;

        return $this;
    }

    /**
     * See `ScheduleActivityTaskCommandAttributes::request_start`
     *
     * Generated from protobuf field <code>repeated .temporal.api.workflowservice.v1.PollActivityTaskQueueResponse activity_tasks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivityTasks()
    {
        return $this->activity_tasks;
    }

    /**
     * See `ScheduleActivityTaskCommandAttributes::request_start`
     *
     * Generated from protobuf field <code>repeated .temporal.api.workflowservice.v1.PollActivityTaskQueueResponse activity_tasks = 2;</code>
     * @param \Temporal\Api\Workflowservice\V1\PollActivityTaskQueueResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivityTasks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Workflowservice\V1\PollActivityTaskQueueResponse::class);
        $this->activity_tasks = $arr;

        return $this;
    }

}

