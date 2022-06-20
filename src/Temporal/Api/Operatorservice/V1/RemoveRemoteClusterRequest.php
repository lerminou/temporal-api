<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/operatorservice/v1/request_response.proto

namespace Temporal\Api\Operatorservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.operatorservice.v1.RemoveRemoteClusterRequest</code>
 */
class RemoveRemoteClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string cluster_name = 1;</code>
     */
    protected $cluster_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string cluster_name = 1;</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * Generated from protobuf field <code>string cluster_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

}

