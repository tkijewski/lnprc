<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc\Failure;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.Failure.FailureCode</code>
 */
class FailureCode
{
    /**
     **
     *The numbers assigned in this enumeration match the failure codes as
     *defined in BOLT #4. Because protobuf 3 requires enums to start with 0,
     *a RESERVED value is added.
     *
     * Generated from protobuf enum <code>RESERVED = 0;</code>
     */
    const RESERVED = 0;
    /**
     * Generated from protobuf enum <code>INCORRECT_OR_UNKNOWN_PAYMENT_DETAILS = 1;</code>
     */
    const INCORRECT_OR_UNKNOWN_PAYMENT_DETAILS = 1;
    /**
     * Generated from protobuf enum <code>INCORRECT_PAYMENT_AMOUNT = 2;</code>
     */
    const INCORRECT_PAYMENT_AMOUNT = 2;
    /**
     * Generated from protobuf enum <code>FINAL_INCORRECT_CLTV_EXPIRY = 3;</code>
     */
    const FINAL_INCORRECT_CLTV_EXPIRY = 3;
    /**
     * Generated from protobuf enum <code>FINAL_INCORRECT_HTLC_AMOUNT = 4;</code>
     */
    const FINAL_INCORRECT_HTLC_AMOUNT = 4;
    /**
     * Generated from protobuf enum <code>FINAL_EXPIRY_TOO_SOON = 5;</code>
     */
    const FINAL_EXPIRY_TOO_SOON = 5;
    /**
     * Generated from protobuf enum <code>INVALID_REALM = 6;</code>
     */
    const INVALID_REALM = 6;
    /**
     * Generated from protobuf enum <code>EXPIRY_TOO_SOON = 7;</code>
     */
    const EXPIRY_TOO_SOON = 7;
    /**
     * Generated from protobuf enum <code>INVALID_ONION_VERSION = 8;</code>
     */
    const INVALID_ONION_VERSION = 8;
    /**
     * Generated from protobuf enum <code>INVALID_ONION_HMAC = 9;</code>
     */
    const INVALID_ONION_HMAC = 9;
    /**
     * Generated from protobuf enum <code>INVALID_ONION_KEY = 10;</code>
     */
    const INVALID_ONION_KEY = 10;
    /**
     * Generated from protobuf enum <code>AMOUNT_BELOW_MINIMUM = 11;</code>
     */
    const AMOUNT_BELOW_MINIMUM = 11;
    /**
     * Generated from protobuf enum <code>FEE_INSUFFICIENT = 12;</code>
     */
    const FEE_INSUFFICIENT = 12;
    /**
     * Generated from protobuf enum <code>INCORRECT_CLTV_EXPIRY = 13;</code>
     */
    const INCORRECT_CLTV_EXPIRY = 13;
    /**
     * Generated from protobuf enum <code>CHANNEL_DISABLED = 14;</code>
     */
    const CHANNEL_DISABLED = 14;
    /**
     * Generated from protobuf enum <code>TEMPORARY_CHANNEL_FAILURE = 15;</code>
     */
    const TEMPORARY_CHANNEL_FAILURE = 15;
    /**
     * Generated from protobuf enum <code>REQUIRED_NODE_FEATURE_MISSING = 16;</code>
     */
    const REQUIRED_NODE_FEATURE_MISSING = 16;
    /**
     * Generated from protobuf enum <code>REQUIRED_CHANNEL_FEATURE_MISSING = 17;</code>
     */
    const REQUIRED_CHANNEL_FEATURE_MISSING = 17;
    /**
     * Generated from protobuf enum <code>UNKNOWN_NEXT_PEER = 18;</code>
     */
    const UNKNOWN_NEXT_PEER = 18;
    /**
     * Generated from protobuf enum <code>TEMPORARY_NODE_FAILURE = 19;</code>
     */
    const TEMPORARY_NODE_FAILURE = 19;
    /**
     * Generated from protobuf enum <code>PERMANENT_NODE_FAILURE = 20;</code>
     */
    const PERMANENT_NODE_FAILURE = 20;
    /**
     * Generated from protobuf enum <code>PERMANENT_CHANNEL_FAILURE = 21;</code>
     */
    const PERMANENT_CHANNEL_FAILURE = 21;
    /**
     * Generated from protobuf enum <code>EXPIRY_TOO_FAR = 22;</code>
     */
    const EXPIRY_TOO_FAR = 22;
    /**
     * Generated from protobuf enum <code>MPP_TIMEOUT = 23;</code>
     */
    const MPP_TIMEOUT = 23;
    /**
     **
     *An internal error occurred.
     *
     * Generated from protobuf enum <code>INTERNAL_FAILURE = 997;</code>
     */
    const INTERNAL_FAILURE = 997;
    /**
     **
     *The error source is known, but the failure itself couldn't be decoded.
     *
     * Generated from protobuf enum <code>UNKNOWN_FAILURE = 998;</code>
     */
    const UNKNOWN_FAILURE = 998;
    /**
     **
     *An unreadable failure result is returned if the received failure message
     *cannot be decrypted. In that case the error source is unknown.
     *
     * Generated from protobuf enum <code>UNREADABLE_FAILURE = 999;</code>
     */
    const UNREADABLE_FAILURE = 999;

    private static $valueToName = [
        self::RESERVED => 'RESERVED',
        self::INCORRECT_OR_UNKNOWN_PAYMENT_DETAILS => 'INCORRECT_OR_UNKNOWN_PAYMENT_DETAILS',
        self::INCORRECT_PAYMENT_AMOUNT => 'INCORRECT_PAYMENT_AMOUNT',
        self::FINAL_INCORRECT_CLTV_EXPIRY => 'FINAL_INCORRECT_CLTV_EXPIRY',
        self::FINAL_INCORRECT_HTLC_AMOUNT => 'FINAL_INCORRECT_HTLC_AMOUNT',
        self::FINAL_EXPIRY_TOO_SOON => 'FINAL_EXPIRY_TOO_SOON',
        self::INVALID_REALM => 'INVALID_REALM',
        self::EXPIRY_TOO_SOON => 'EXPIRY_TOO_SOON',
        self::INVALID_ONION_VERSION => 'INVALID_ONION_VERSION',
        self::INVALID_ONION_HMAC => 'INVALID_ONION_HMAC',
        self::INVALID_ONION_KEY => 'INVALID_ONION_KEY',
        self::AMOUNT_BELOW_MINIMUM => 'AMOUNT_BELOW_MINIMUM',
        self::FEE_INSUFFICIENT => 'FEE_INSUFFICIENT',
        self::INCORRECT_CLTV_EXPIRY => 'INCORRECT_CLTV_EXPIRY',
        self::CHANNEL_DISABLED => 'CHANNEL_DISABLED',
        self::TEMPORARY_CHANNEL_FAILURE => 'TEMPORARY_CHANNEL_FAILURE',
        self::REQUIRED_NODE_FEATURE_MISSING => 'REQUIRED_NODE_FEATURE_MISSING',
        self::REQUIRED_CHANNEL_FEATURE_MISSING => 'REQUIRED_CHANNEL_FEATURE_MISSING',
        self::UNKNOWN_NEXT_PEER => 'UNKNOWN_NEXT_PEER',
        self::TEMPORARY_NODE_FAILURE => 'TEMPORARY_NODE_FAILURE',
        self::PERMANENT_NODE_FAILURE => 'PERMANENT_NODE_FAILURE',
        self::PERMANENT_CHANNEL_FAILURE => 'PERMANENT_CHANNEL_FAILURE',
        self::EXPIRY_TOO_FAR => 'EXPIRY_TOO_FAR',
        self::MPP_TIMEOUT => 'MPP_TIMEOUT',
        self::INTERNAL_FAILURE => 'INTERNAL_FAILURE',
        self::UNKNOWN_FAILURE => 'UNKNOWN_FAILURE',
        self::UNREADABLE_FAILURE => 'UNREADABLE_FAILURE',
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
class_alias(FailureCode::class, \Lnrpc\Failure_FailureCode::class);

