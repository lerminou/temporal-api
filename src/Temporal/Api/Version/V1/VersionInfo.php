<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/version/v1/message.proto

namespace Temporal\Api\Version\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VersionInfo contains details about current and recommended release versions as well as alerts and upgrade instructions.
 *
 * Generated from protobuf message <code>temporal.api.version.v1.VersionInfo</code>
 */
class VersionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.ReleaseInfo current = 1;</code>
     */
    protected $current = null;
    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.ReleaseInfo recommended = 2;</code>
     */
    protected $recommended = null;
    /**
     * Generated from protobuf field <code>string instructions = 3;</code>
     */
    protected $instructions = '';
    /**
     * Generated from protobuf field <code>repeated .temporal.api.version.v1.Alert alerts = 4;</code>
     */
    private $alerts;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 5 [(.gogoproto.stdtime) = true];</code>
     */
    protected $last_update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Version\V1\ReleaseInfo $current
     *     @type \Temporal\Api\Version\V1\ReleaseInfo $recommended
     *     @type string $instructions
     *     @type \Temporal\Api\Version\V1\Alert[]|\Google\Protobuf\Internal\RepeatedField $alerts
     *     @type \Google\Protobuf\Timestamp $last_update_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Version\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.ReleaseInfo current = 1;</code>
     * @return \Temporal\Api\Version\V1\ReleaseInfo
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.ReleaseInfo current = 1;</code>
     * @param \Temporal\Api\Version\V1\ReleaseInfo $var
     * @return $this
     */
    public function setCurrent($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Version\V1\ReleaseInfo::class);
        $this->current = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.ReleaseInfo recommended = 2;</code>
     * @return \Temporal\Api\Version\V1\ReleaseInfo
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.ReleaseInfo recommended = 2;</code>
     * @param \Temporal\Api\Version\V1\ReleaseInfo $var
     * @return $this
     */
    public function setRecommended($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Version\V1\ReleaseInfo::class);
        $this->recommended = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string instructions = 3;</code>
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Generated from protobuf field <code>string instructions = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInstructions($var)
    {
        GPBUtil::checkString($var, True);
        $this->instructions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.version.v1.Alert alerts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.version.v1.Alert alerts = 4;</code>
     * @param \Temporal\Api\Version\V1\Alert[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlerts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Version\V1\Alert::class);
        $this->alerts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 5 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastUpdateTime()
    {
        return $this->last_update_time;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 5 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_update_time = $var;

        return $this;
    }

}
