<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/cluster/v1/message.proto

namespace Temporal\Api\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * data column
 *
 * Generated from protobuf message <code>temporal.api.cluster.v1.ClusterMetadata</code>
 */
class ClusterMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string cluster = 1;</code>
     */
    protected $cluster = '';
    /**
     * Generated from protobuf field <code>int32 history_shard_count = 2;</code>
     */
    protected $history_shard_count = 0;
    /**
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     */
    protected $cluster_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.VersionInfo version_info = 4;</code>
     */
    protected $version_info = null;
    /**
     * Generated from protobuf field <code>map<string, .temporal.api.cluster.v1.IndexSearchAttributes> index_search_attributes = 5;</code>
     */
    private $index_search_attributes;
    /**
     * Generated from protobuf field <code>string cluster_address = 6;</code>
     */
    protected $cluster_address = '';
    /**
     * Generated from protobuf field <code>int64 failover_version_increment = 7;</code>
     */
    protected $failover_version_increment = 0;
    /**
     * Generated from protobuf field <code>int64 initial_failover_version = 8;</code>
     */
    protected $initial_failover_version = 0;
    /**
     * Generated from protobuf field <code>bool is_global_namespace_enabled = 9;</code>
     */
    protected $is_global_namespace_enabled = false;
    /**
     * Generated from protobuf field <code>bool is_connection_enabled = 10;</code>
     */
    protected $is_connection_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster
     *     @type int $history_shard_count
     *     @type string $cluster_id
     *     @type \Temporal\Api\Version\V1\VersionInfo $version_info
     *     @type array|\Google\Protobuf\Internal\MapField $index_search_attributes
     *     @type string $cluster_address
     *     @type int|string $failover_version_increment
     *     @type int|string $initial_failover_version
     *     @type bool $is_global_namespace_enabled
     *     @type bool $is_connection_enabled
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Cluster\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string cluster = 1;</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Generated from protobuf field <code>string cluster = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 history_shard_count = 2;</code>
     * @return int
     */
    public function getHistoryShardCount()
    {
        return $this->history_shard_count;
    }

    /**
     * Generated from protobuf field <code>int32 history_shard_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHistoryShardCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->history_shard_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.VersionInfo version_info = 4;</code>
     * @return \Temporal\Api\Version\V1\VersionInfo
     */
    public function getVersionInfo()
    {
        return $this->version_info;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.version.v1.VersionInfo version_info = 4;</code>
     * @param \Temporal\Api\Version\V1\VersionInfo $var
     * @return $this
     */
    public function setVersionInfo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Version\V1\VersionInfo::class);
        $this->version_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .temporal.api.cluster.v1.IndexSearchAttributes> index_search_attributes = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getIndexSearchAttributes()
    {
        return $this->index_search_attributes;
    }

    /**
     * Generated from protobuf field <code>map<string, .temporal.api.cluster.v1.IndexSearchAttributes> index_search_attributes = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setIndexSearchAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Cluster\V1\IndexSearchAttributes::class);
        $this->index_search_attributes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cluster_address = 6;</code>
     * @return string
     */
    public function getClusterAddress()
    {
        return $this->cluster_address;
    }

    /**
     * Generated from protobuf field <code>string cluster_address = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 failover_version_increment = 7;</code>
     * @return int|string
     */
    public function getFailoverVersionIncrement()
    {
        return $this->failover_version_increment;
    }

    /**
     * Generated from protobuf field <code>int64 failover_version_increment = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailoverVersionIncrement($var)
    {
        GPBUtil::checkInt64($var);
        $this->failover_version_increment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 initial_failover_version = 8;</code>
     * @return int|string
     */
    public function getInitialFailoverVersion()
    {
        return $this->initial_failover_version;
    }

    /**
     * Generated from protobuf field <code>int64 initial_failover_version = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInitialFailoverVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->initial_failover_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_global_namespace_enabled = 9;</code>
     * @return bool
     */
    public function getIsGlobalNamespaceEnabled()
    {
        return $this->is_global_namespace_enabled;
    }

    /**
     * Generated from protobuf field <code>bool is_global_namespace_enabled = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsGlobalNamespaceEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->is_global_namespace_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_connection_enabled = 10;</code>
     * @return bool
     */
    public function getIsConnectionEnabled()
    {
        return $this->is_connection_enabled;
    }

    /**
     * Generated from protobuf field <code>bool is_connection_enabled = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsConnectionEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->is_connection_enabled = $var;

        return $this;
    }

}

