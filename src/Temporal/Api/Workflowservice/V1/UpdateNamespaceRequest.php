<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * (-- api-linter: core::0134::request-mask-required=disabled
 *     aip.dev/not-precedent: UpdateNamespace RPC doesn't follow Google API format. --)
 * (-- api-linter: core::0134::request-resource-required=disabled
 *     aip.dev/not-precedent: UpdateNamespace RPC doesn't follow Google API format. --)
 *
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateNamespaceRequest</code>
 */
class UpdateNamespaceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.UpdateNamespaceInfo update_info = 2;</code>
     */
    protected $update_info = null;
    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceConfig config = 3;</code>
     */
    protected $config = null;
    /**
     * Generated from protobuf field <code>.temporal.api.replication.v1.NamespaceReplicationConfig replication_config = 4;</code>
     */
    protected $replication_config = null;
    /**
     * Generated from protobuf field <code>string security_token = 5;</code>
     */
    protected $security_token = '';
    /**
     * Generated from protobuf field <code>string delete_bad_binary = 6;</code>
     */
    protected $delete_bad_binary = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type \Temporal\Api\PBNamespace\V1\UpdateNamespaceInfo $update_info
     *     @type \Temporal\Api\PBNamespace\V1\NamespaceConfig $config
     *     @type \Temporal\Api\Replication\V1\NamespaceReplicationConfig $replication_config
     *     @type string $security_token
     *     @type string $delete_bad_binary
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.UpdateNamespaceInfo update_info = 2;</code>
     * @return \Temporal\Api\PBNamespace\V1\UpdateNamespaceInfo
     */
    public function getUpdateInfo()
    {
        return $this->update_info;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.UpdateNamespaceInfo update_info = 2;</code>
     * @param \Temporal\Api\PBNamespace\V1\UpdateNamespaceInfo $var
     * @return $this
     */
    public function setUpdateInfo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\PBNamespace\V1\UpdateNamespaceInfo::class);
        $this->update_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceConfig config = 3;</code>
     * @return \Temporal\Api\PBNamespace\V1\NamespaceConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceConfig config = 3;</code>
     * @param \Temporal\Api\PBNamespace\V1\NamespaceConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\PBNamespace\V1\NamespaceConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.replication.v1.NamespaceReplicationConfig replication_config = 4;</code>
     * @return \Temporal\Api\Replication\V1\NamespaceReplicationConfig
     */
    public function getReplicationConfig()
    {
        return $this->replication_config;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.replication.v1.NamespaceReplicationConfig replication_config = 4;</code>
     * @param \Temporal\Api\Replication\V1\NamespaceReplicationConfig $var
     * @return $this
     */
    public function setReplicationConfig($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Replication\V1\NamespaceReplicationConfig::class);
        $this->replication_config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string security_token = 5;</code>
     * @return string
     */
    public function getSecurityToken()
    {
        return $this->security_token;
    }

    /**
     * Generated from protobuf field <code>string security_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSecurityToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->security_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string delete_bad_binary = 6;</code>
     * @return string
     */
    public function getDeleteBadBinary()
    {
        return $this->delete_bad_binary;
    }

    /**
     * Generated from protobuf field <code>string delete_bad_binary = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDeleteBadBinary($var)
    {
        GPBUtil::checkString($var, True);
        $this->delete_bad_binary = $var;

        return $this;
    }

}
