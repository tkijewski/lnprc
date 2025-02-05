<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.TimestampedError</code>
 */
class TimestampedError extends \Google\Protobuf\Internal\Message
{
    /**
     * The unix timestamp in seconds when the error occurred.
     *
     * Generated from protobuf field <code>uint64 timestamp = 1;</code>
     */
    protected $timestamp = 0;
    /**
     * The string representation of the error sent by our peer.
     *
     * Generated from protobuf field <code>string error = 2;</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $timestamp
     *           The unix timestamp in seconds when the error occurred.
     *     @type string $error
     *           The string representation of the error sent by our peer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The unix timestamp in seconds when the error occurred.
     *
     * Generated from protobuf field <code>uint64 timestamp = 1;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * The unix timestamp in seconds when the error occurred.
     *
     * Generated from protobuf field <code>uint64 timestamp = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * The string representation of the error sent by our peer.
     *
     * Generated from protobuf field <code>string error = 2;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * The string representation of the error sent by our peer.
     *
     * Generated from protobuf field <code>string error = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

