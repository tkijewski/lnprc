<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.HopHint</code>
 */
class HopHint extends \Google\Protobuf\Internal\Message
{
    /**
     * The public key of the node at the start of the channel.
     *
     * Generated from protobuf field <code>string node_id = 1;</code>
     */
    protected $node_id = '';
    /**
     * The unique identifier of the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 2 [jstype = JS_STRING];</code>
     */
    protected $chan_id = 0;
    /**
     * The base fee of the channel denominated in millisatoshis.
     *
     * Generated from protobuf field <code>uint32 fee_base_msat = 3;</code>
     */
    protected $fee_base_msat = 0;
    /**
     *The fee rate of the channel for sending one satoshi across it denominated in
     *millionths of a satoshi.
     *
     * Generated from protobuf field <code>uint32 fee_proportional_millionths = 4;</code>
     */
    protected $fee_proportional_millionths = 0;
    /**
     * The time-lock delta of the channel.
     *
     * Generated from protobuf field <code>uint32 cltv_expiry_delta = 5;</code>
     */
    protected $cltv_expiry_delta = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_id
     *           The public key of the node at the start of the channel.
     *     @type int|string $chan_id
     *           The unique identifier of the channel.
     *     @type int $fee_base_msat
     *           The base fee of the channel denominated in millisatoshis.
     *     @type int $fee_proportional_millionths
     *          The fee rate of the channel for sending one satoshi across it denominated in
     *          millionths of a satoshi.
     *     @type int $cltv_expiry_delta
     *           The time-lock delta of the channel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The public key of the node at the start of the channel.
     *
     * Generated from protobuf field <code>string node_id = 1;</code>
     * @return string
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * The public key of the node at the start of the channel.
     *
     * Generated from protobuf field <code>string node_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_id = $var;

        return $this;
    }

    /**
     * The unique identifier of the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 2 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     * The unique identifier of the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 2 [jstype = JS_STRING];</code>
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
     * The base fee of the channel denominated in millisatoshis.
     *
     * Generated from protobuf field <code>uint32 fee_base_msat = 3;</code>
     * @return int
     */
    public function getFeeBaseMsat()
    {
        return $this->fee_base_msat;
    }

    /**
     * The base fee of the channel denominated in millisatoshis.
     *
     * Generated from protobuf field <code>uint32 fee_base_msat = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFeeBaseMsat($var)
    {
        GPBUtil::checkUint32($var);
        $this->fee_base_msat = $var;

        return $this;
    }

    /**
     *The fee rate of the channel for sending one satoshi across it denominated in
     *millionths of a satoshi.
     *
     * Generated from protobuf field <code>uint32 fee_proportional_millionths = 4;</code>
     * @return int
     */
    public function getFeeProportionalMillionths()
    {
        return $this->fee_proportional_millionths;
    }

    /**
     *The fee rate of the channel for sending one satoshi across it denominated in
     *millionths of a satoshi.
     *
     * Generated from protobuf field <code>uint32 fee_proportional_millionths = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFeeProportionalMillionths($var)
    {
        GPBUtil::checkUint32($var);
        $this->fee_proportional_millionths = $var;

        return $this;
    }

    /**
     * The time-lock delta of the channel.
     *
     * Generated from protobuf field <code>uint32 cltv_expiry_delta = 5;</code>
     * @return int
     */
    public function getCltvExpiryDelta()
    {
        return $this->cltv_expiry_delta;
    }

    /**
     * The time-lock delta of the channel.
     *
     * Generated from protobuf field <code>uint32 cltv_expiry_delta = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCltvExpiryDelta($var)
    {
        GPBUtil::checkUint32($var);
        $this->cltv_expiry_delta = $var;

        return $this;
    }

}

