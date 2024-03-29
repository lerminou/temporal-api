<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/operatorservice/v1/request_response.proto

namespace Temporal\Api\Operatorservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.operatorservice.v1.ListClusterMembersResponse</code>
 */
class ListClusterMembersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .temporal.api.cluster.v1.ClusterMember active_members = 1;</code>
     */
    private $active_members;
    /**
     * Generated from protobuf field <code>bytes next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Cluster\V1\ClusterMember[]|\Google\Protobuf\Internal\RepeatedField $active_members
     *     @type string $next_page_token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.cluster.v1.ClusterMember active_members = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActiveMembers()
    {
        return $this->active_members;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.cluster.v1.ClusterMember active_members = 1;</code>
     * @param \Temporal\Api\Cluster\V1\ClusterMember[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActiveMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Cluster\V1\ClusterMember::class);
        $this->active_members = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Generated from protobuf field <code>bytes next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_page_token = $var;

        return $this;
    }

}

