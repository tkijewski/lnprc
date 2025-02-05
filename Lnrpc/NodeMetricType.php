<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.NodeMetricType</code>
 */
class NodeMetricType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>BETWEENNESS_CENTRALITY = 1;</code>
     */
    const BETWEENNESS_CENTRALITY = 1;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::BETWEENNESS_CENTRALITY => 'BETWEENNESS_CENTRALITY',
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

