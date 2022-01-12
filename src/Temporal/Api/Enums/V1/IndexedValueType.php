<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/enums/v1/common.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>temporal.api.enums.v1.IndexedValueType</code>
 */
class IndexedValueType
{
    /**
     * Generated from protobuf enum <code>INDEXED_VALUE_TYPE_UNSPECIFIED = 0;</code>
     */
    const INDEXED_VALUE_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>INDEXED_VALUE_TYPE_TEXT = 1;</code>
     */
    const INDEXED_VALUE_TYPE_TEXT = 1;
    /**
     * Generated from protobuf enum <code>INDEXED_VALUE_TYPE_KEYWORD = 2;</code>
     */
    const INDEXED_VALUE_TYPE_KEYWORD = 2;
    /**
     * Generated from protobuf enum <code>INDEXED_VALUE_TYPE_INT = 3;</code>
     */
    const INDEXED_VALUE_TYPE_INT = 3;
    /**
     * Generated from protobuf enum <code>INDEXED_VALUE_TYPE_DOUBLE = 4;</code>
     */
    const INDEXED_VALUE_TYPE_DOUBLE = 4;
    /**
     * Generated from protobuf enum <code>INDEXED_VALUE_TYPE_BOOL = 5;</code>
     */
    const INDEXED_VALUE_TYPE_BOOL = 5;
    /**
     * Generated from protobuf enum <code>INDEXED_VALUE_TYPE_DATETIME = 6;</code>
     */
    const INDEXED_VALUE_TYPE_DATETIME = 6;

    private static $valueToName = [
        self::INDEXED_VALUE_TYPE_UNSPECIFIED => 'INDEXED_VALUE_TYPE_UNSPECIFIED',
        self::INDEXED_VALUE_TYPE_TEXT => 'INDEXED_VALUE_TYPE_TEXT',
        self::INDEXED_VALUE_TYPE_KEYWORD => 'INDEXED_VALUE_TYPE_KEYWORD',
        self::INDEXED_VALUE_TYPE_INT => 'INDEXED_VALUE_TYPE_INT',
        self::INDEXED_VALUE_TYPE_DOUBLE => 'INDEXED_VALUE_TYPE_DOUBLE',
        self::INDEXED_VALUE_TYPE_BOOL => 'INDEXED_VALUE_TYPE_BOOL',
        self::INDEXED_VALUE_TYPE_DATETIME => 'INDEXED_VALUE_TYPE_DATETIME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

