<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1\GetSystemInfoResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * System capability details.
 *
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.GetSystemInfoResponse.Capabilities</code>
 */
class Capabilities extends \Google\Protobuf\Internal\Message
{
    /**
     * True if signal and query headers are supported.
     *
     * Generated from protobuf field <code>bool signal_and_query_header = 1;</code>
     */
    protected $signal_and_query_header = false;
    /**
     * True if internal errors are differentiated from other types of errors for purposes of
     * retrying non-internal errors.
     * When unset/false, clients retry all failures. When true, clients should only retry
     * non-internal errors.
     *
     * Generated from protobuf field <code>bool internal_error_differentiation = 2;</code>
     */
    protected $internal_error_differentiation = false;
    /**
     * True if RespondActivityTaskFailed API supports including heartbeat details
     *
     * Generated from protobuf field <code>bool activity_failure_include_heartbeat = 3;</code>
     */
    protected $activity_failure_include_heartbeat = false;
    /**
     * Supports scheduled workflow features.
     *
     * Generated from protobuf field <code>bool supports_schedules = 4;</code>
     */
    protected $supports_schedules = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $signal_and_query_header
     *           True if signal and query headers are supported.
     *     @type bool $internal_error_differentiation
     *           True if internal errors are differentiated from other types of errors for purposes of
     *           retrying non-internal errors.
     *           When unset/false, clients retry all failures. When true, clients should only retry
     *           non-internal errors.
     *     @type bool $activity_failure_include_heartbeat
     *           True if RespondActivityTaskFailed API supports including heartbeat details
     *     @type bool $supports_schedules
     *           Supports scheduled workflow features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * True if signal and query headers are supported.
     *
     * Generated from protobuf field <code>bool signal_and_query_header = 1;</code>
     * @return bool
     */
    public function getSignalAndQueryHeader()
    {
        return $this->signal_and_query_header;
    }

    /**
     * True if signal and query headers are supported.
     *
     * Generated from protobuf field <code>bool signal_and_query_header = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSignalAndQueryHeader($var)
    {
        GPBUtil::checkBool($var);
        $this->signal_and_query_header = $var;

        return $this;
    }

    /**
     * True if internal errors are differentiated from other types of errors for purposes of
     * retrying non-internal errors.
     * When unset/false, clients retry all failures. When true, clients should only retry
     * non-internal errors.
     *
     * Generated from protobuf field <code>bool internal_error_differentiation = 2;</code>
     * @return bool
     */
    public function getInternalErrorDifferentiation()
    {
        return $this->internal_error_differentiation;
    }

    /**
     * True if internal errors are differentiated from other types of errors for purposes of
     * retrying non-internal errors.
     * When unset/false, clients retry all failures. When true, clients should only retry
     * non-internal errors.
     *
     * Generated from protobuf field <code>bool internal_error_differentiation = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setInternalErrorDifferentiation($var)
    {
        GPBUtil::checkBool($var);
        $this->internal_error_differentiation = $var;

        return $this;
    }

    /**
     * True if RespondActivityTaskFailed API supports including heartbeat details
     *
     * Generated from protobuf field <code>bool activity_failure_include_heartbeat = 3;</code>
     * @return bool
     */
    public function getActivityFailureIncludeHeartbeat()
    {
        return $this->activity_failure_include_heartbeat;
    }

    /**
     * True if RespondActivityTaskFailed API supports including heartbeat details
     *
     * Generated from protobuf field <code>bool activity_failure_include_heartbeat = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setActivityFailureIncludeHeartbeat($var)
    {
        GPBUtil::checkBool($var);
        $this->activity_failure_include_heartbeat = $var;

        return $this;
    }

    /**
     * Supports scheduled workflow features.
     *
     * Generated from protobuf field <code>bool supports_schedules = 4;</code>
     * @return bool
     */
    public function getSupportsSchedules()
    {
        return $this->supports_schedules;
    }

    /**
     * Supports scheduled workflow features.
     *
     * Generated from protobuf field <code>bool supports_schedules = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsSchedules($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_schedules = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Capabilities::class, \Temporal\Api\Workflowservice\V1\GetSystemInfoResponse_Capabilities::class);

