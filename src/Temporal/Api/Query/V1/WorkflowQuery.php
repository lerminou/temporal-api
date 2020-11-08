<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/query/v1/message.proto

namespace Temporal\Api\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.query.v1.WorkflowQuery</code>
 */
class WorkflowQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query_type = 1;</code>
     */
    protected $query_type = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads query_args = 2;</code>
     */
    protected $query_args = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query_type
     *     @type \Temporal\Api\Common\V1\Payloads $query_args
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Query\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query_type = 1;</code>
     * @return string
     */
    public function getQueryType()
    {
        return $this->query_type;
    }

    /**
     * Generated from protobuf field <code>string query_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryType($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads query_args = 2;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getQueryArgs()
    {
        return $this->query_args;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads query_args = 2;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setQueryArgs($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->query_args = $var;

        return $this;
    }

}

