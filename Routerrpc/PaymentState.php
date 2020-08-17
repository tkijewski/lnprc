<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>routerrpc.PaymentState</code>
 */
class PaymentState
{
    /**
     **
     *Payment is still in flight.
     *
     * Generated from protobuf enum <code>IN_FLIGHT = 0;</code>
     */
    const IN_FLIGHT = 0;
    /**
     **
     *Payment completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 1;</code>
     */
    const SUCCEEDED = 1;
    /**
     **
     *There are more routes to try, but the payment timeout was exceeded.
     *
     * Generated from protobuf enum <code>FAILED_TIMEOUT = 2;</code>
     */
    const FAILED_TIMEOUT = 2;
    /**
     **
     *All possible routes were tried and failed permanently. Or were no
     *routes to the destination at all.
     *
     * Generated from protobuf enum <code>FAILED_NO_ROUTE = 3;</code>
     */
    const FAILED_NO_ROUTE = 3;
    /**
     **
     *A non-recoverable error has occured.
     *
     * Generated from protobuf enum <code>FAILED_ERROR = 4;</code>
     */
    const FAILED_ERROR = 4;
    /**
     **
     *Payment details incorrect (unknown hash, invalid amt or
     *invalid final cltv delta)
     *
     * Generated from protobuf enum <code>FAILED_INCORRECT_PAYMENT_DETAILS = 5;</code>
     */
    const FAILED_INCORRECT_PAYMENT_DETAILS = 5;
    /**
     **
     *Insufficient local balance.
     *
     * Generated from protobuf enum <code>FAILED_INSUFFICIENT_BALANCE = 6;</code>
     */
    const FAILED_INSUFFICIENT_BALANCE = 6;

    private static $valueToName = [
        self::IN_FLIGHT => 'IN_FLIGHT',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED_TIMEOUT => 'FAILED_TIMEOUT',
        self::FAILED_NO_ROUTE => 'FAILED_NO_ROUTE',
        self::FAILED_ERROR => 'FAILED_ERROR',
        self::FAILED_INCORRECT_PAYMENT_DETAILS => 'FAILED_INCORRECT_PAYMENT_DETAILS',
        self::FAILED_INSUFFICIENT_BALANCE => 'FAILED_INSUFFICIENT_BALANCE',
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

