<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc\HTLCAttempt;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.HTLCAttempt.HTLCStatus</code>
 */
class HTLCStatus
{
    /**
     * Generated from protobuf enum <code>IN_FLIGHT = 0;</code>
     */
    const IN_FLIGHT = 0;
    /**
     * Generated from protobuf enum <code>SUCCEEDED = 1;</code>
     */
    const SUCCEEDED = 1;
    /**
     * Generated from protobuf enum <code>FAILED = 2;</code>
     */
    const FAILED = 2;

    private static $valueToName = [
        self::IN_FLIGHT => 'IN_FLIGHT',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HTLCStatus::class, \Lnrpc\HTLCAttempt_HTLCStatus::class);

