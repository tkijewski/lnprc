<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.LookupHtlcResolutionRequest</code>
 */
class LookupHtlcResolutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     */
    protected $chan_id = 0;
    /**
     * Generated from protobuf field <code>uint64 htlc_index = 2;</code>
     */
    protected $htlc_index = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $chan_id
     *     @type int|string $htlc_index
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->chan_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 htlc_index = 2;</code>
     * @return int|string
     */
    public function getHtlcIndex()
    {
        return $this->htlc_index;
    }

    /**
     * Generated from protobuf field <code>uint64 htlc_index = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHtlcIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->htlc_index = $var;

        return $this;
    }

}

