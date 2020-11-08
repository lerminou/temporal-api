<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/command/v1/message.proto

namespace Temporal\Api\Command\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.command.v1.StartTimerCommandAttributes</code>
 */
class StartTimerCommandAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string timer_id = 1;</code>
     */
    protected $timer_id = '';
    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_fire_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     */
    protected $start_to_fire_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $timer_id
     *     @type \Google\Protobuf\Duration $start_to_fire_timeout
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Command\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string timer_id = 1;</code>
     * @return string
     */
    public function getTimerId()
    {
        return $this->timer_id;
    }

    /**
     * Generated from protobuf field <code>string timer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTimerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->timer_id = $var;

        return $this;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_fire_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getStartToFireTimeout()
    {
        return $this->start_to_fire_timeout;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_fire_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartToFireTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_to_fire_timeout = $var;

        return $this;
    }

}

