<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.ListNamespacesRequest</code>
 */
class ListNamespacesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     */
    protected $page_size = 0;
    /**
     * Generated from protobuf field <code>bytes next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceFilter namespace_filter = 3;</code>
     */
    protected $namespace_filter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_size
     *     @type string $next_page_token
     *     @type \Temporal\Api\PBNamespace\V1\NamespaceFilter $namespace_filter
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

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

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceFilter namespace_filter = 3;</code>
     * @return \Temporal\Api\PBNamespace\V1\NamespaceFilter
     */
    public function getNamespaceFilter()
    {
        return $this->namespace_filter;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.namespace.v1.NamespaceFilter namespace_filter = 3;</code>
     * @param \Temporal\Api\PBNamespace\V1\NamespaceFilter $var
     * @return $this
     */
    public function setNamespaceFilter($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\PBNamespace\V1\NamespaceFilter::class);
        $this->namespace_filter = $var;

        return $this;
    }

}

