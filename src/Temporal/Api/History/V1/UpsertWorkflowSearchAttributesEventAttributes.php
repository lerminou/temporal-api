<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.UpsertWorkflowSearchAttributesEventAttributes</code>
 */
class UpsertWorkflowSearchAttributesEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 1;</code>
     */
    protected $workflow_task_completed_event_id = 0;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 2;</code>
     */
    protected $search_attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $workflow_task_completed_event_id
     *           The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *     @type \Temporal\Api\Common\V1\SearchAttributes $search_attributes
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
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 2;</code>
     * @return \Temporal\Api\Common\V1\SearchAttributes
     */
    public function getSearchAttributes()
    {
        return $this->search_attributes;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 2;</code>
     * @param \Temporal\Api\Common\V1\SearchAttributes $var
     * @return $this
     */
    public function setSearchAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\SearchAttributes::class);
        $this->search_attributes = $var;

        return $this;
    }

}

