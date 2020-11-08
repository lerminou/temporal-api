<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/query/v1/message.proto

namespace Temporal\Api\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.query.v1.WorkflowQueryResult</code>
 */
class WorkflowQueryResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.QueryResultType result_type = 1;</code>
     */
    protected $result_type = 0;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads answer = 2;</code>
     */
    protected $answer = null;
    /**
     * Generated from protobuf field <code>string error_message = 3;</code>
     */
    protected $error_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result_type
     *     @type \Temporal\Api\Common\V1\Payloads $answer
     *     @type string $error_message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Query\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.QueryResultType result_type = 1;</code>
     * @return int
     */
    public function getResultType()
    {
        return $this->result_type;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.QueryResultType result_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResultType($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\QueryResultType::class);
        $this->result_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads answer = 2;</code>
     * @return \Temporal\Api\Common\V1\Payloads
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads answer = 2;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setAnswer($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->answer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error_message = 3;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * Generated from protobuf field <code>string error_message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

}

