<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc\PendingChannelsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelsResponse.ClosedChannel</code>
 */
class ClosedChannel extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The pending channel to be closed
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.PendingChannel channel = 1;</code>
     */
    private $channel = null;
    /**
     *&#47; The transaction id of the closing transaction
     *
     * Generated from protobuf field <code>string closing_txid = 2;</code>
     */
    private $closing_txid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\PendingChannelsResponse\PendingChannel $channel
     *          &#47; The pending channel to be closed
     *     @type string $closing_txid
     *          &#47; The transaction id of the closing transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The pending channel to be closed
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.PendingChannel channel = 1;</code>
     * @return \Lnrpc\PendingChannelsResponse\PendingChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     *&#47; The pending channel to be closed
     *
     * Generated from protobuf field <code>.lnrpc.PendingChannelsResponse.PendingChannel channel = 1;</code>
     * @param \Lnrpc\PendingChannelsResponse\PendingChannel $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PendingChannelsResponse_PendingChannel::class);
        $this->channel = $var;

        return $this;
    }

    /**
     *&#47; The transaction id of the closing transaction
     *
     * Generated from protobuf field <code>string closing_txid = 2;</code>
     * @return string
     */
    public function getClosingTxid()
    {
        return $this->closing_txid;
    }

    /**
     *&#47; The transaction id of the closing transaction
     *
     * Generated from protobuf field <code>string closing_txid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClosingTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->closing_txid = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClosedChannel::class, \Lnrpc\PendingChannelsResponse_ClosedChannel::class);

