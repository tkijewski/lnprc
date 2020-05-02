<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc\PendingChannelsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelsResponse.PendingChannel</code>
 */
class PendingChannel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string remote_node_pub = 1;</code>
     */
    protected $remote_node_pub = '';
    /**
     * Generated from protobuf field <code>string channel_point = 2;</code>
     */
    protected $channel_point = '';
    /**
     * Generated from protobuf field <code>int64 capacity = 3;</code>
     */
    protected $capacity = 0;
    /**
     * Generated from protobuf field <code>int64 local_balance = 4;</code>
     */
    protected $local_balance = 0;
    /**
     * Generated from protobuf field <code>int64 remote_balance = 5;</code>
     */
    protected $remote_balance = 0;
    /**
     *&#47; The minimum satoshis this node is required to reserve in its
     * / balance.
     *
     * Generated from protobuf field <code>int64 local_chan_reserve_sat = 6;</code>
     */
    protected $local_chan_reserve_sat = 0;
    /**
     **
     *The minimum satoshis the other node is required to reserve in its
     *balance.
     *
     * Generated from protobuf field <code>int64 remote_chan_reserve_sat = 7;</code>
     */
    protected $remote_chan_reserve_sat = 0;
    /**
     * The party that initiated opening the channel.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator initiator = 8;</code>
     */
    protected $initiator = 0;
    /**
     *&#47; The commitment type used by this channel.
     *
     * Generated from protobuf field <code>.lnrpc.CommitmentType commitment_type = 9;</code>
     */
    protected $commitment_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $remote_node_pub
     *     @type string $channel_point
     *     @type int|string $capacity
     *     @type int|string $local_balance
     *     @type int|string $remote_balance
     *     @type int|string $local_chan_reserve_sat
     *          &#47; The minimum satoshis this node is required to reserve in its
     *          / balance.
     *     @type int|string $remote_chan_reserve_sat
     *          *
     *          The minimum satoshis the other node is required to reserve in its
     *          balance.
     *     @type int $initiator
     *           The party that initiated opening the channel.
     *     @type int $commitment_type
     *          &#47; The commitment type used by this channel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string remote_node_pub = 1;</code>
     * @return string
     */
    public function getRemoteNodePub()
    {
        return $this->remote_node_pub;
    }

    /**
     * Generated from protobuf field <code>string remote_node_pub = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteNodePub($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_node_pub = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string channel_point = 2;</code>
     * @return string
     */
    public function getChannelPoint()
    {
        return $this->channel_point;
    }

    /**
     * Generated from protobuf field <code>string channel_point = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 capacity = 3;</code>
     * @return int|string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Generated from protobuf field <code>int64 capacity = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 local_balance = 4;</code>
     * @return int|string
     */
    public function getLocalBalance()
    {
        return $this->local_balance;
    }

    /**
     * Generated from protobuf field <code>int64 local_balance = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLocalBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->local_balance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 remote_balance = 5;</code>
     * @return int|string
     */
    public function getRemoteBalance()
    {
        return $this->remote_balance;
    }

    /**
     * Generated from protobuf field <code>int64 remote_balance = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemoteBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->remote_balance = $var;

        return $this;
    }

    /**
     *&#47; The minimum satoshis this node is required to reserve in its
     * / balance.
     *
     * Generated from protobuf field <code>int64 local_chan_reserve_sat = 6;</code>
     * @return int|string
     */
    public function getLocalChanReserveSat()
    {
        return $this->local_chan_reserve_sat;
    }

    /**
     *&#47; The minimum satoshis this node is required to reserve in its
     * / balance.
     *
     * Generated from protobuf field <code>int64 local_chan_reserve_sat = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLocalChanReserveSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->local_chan_reserve_sat = $var;

        return $this;
    }

    /**
     **
     *The minimum satoshis the other node is required to reserve in its
     *balance.
     *
     * Generated from protobuf field <code>int64 remote_chan_reserve_sat = 7;</code>
     * @return int|string
     */
    public function getRemoteChanReserveSat()
    {
        return $this->remote_chan_reserve_sat;
    }

    /**
     **
     *The minimum satoshis the other node is required to reserve in its
     *balance.
     *
     * Generated from protobuf field <code>int64 remote_chan_reserve_sat = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemoteChanReserveSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->remote_chan_reserve_sat = $var;

        return $this;
    }

    /**
     * The party that initiated opening the channel.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator initiator = 8;</code>
     * @return int
     */
    public function getInitiator()
    {
        return $this->initiator;
    }

    /**
     * The party that initiated opening the channel.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator initiator = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setInitiator($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\Initiator::class);
        $this->initiator = $var;

        return $this;
    }

    /**
     *&#47; The commitment type used by this channel.
     *
     * Generated from protobuf field <code>.lnrpc.CommitmentType commitment_type = 9;</code>
     * @return int
     */
    public function getCommitmentType()
    {
        return $this->commitment_type;
    }

    /**
     *&#47; The commitment type used by this channel.
     *
     * Generated from protobuf field <code>.lnrpc.CommitmentType commitment_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCommitmentType($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\CommitmentType::class);
        $this->commitment_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PendingChannel::class, \Lnrpc\PendingChannelsResponse_PendingChannel::class);

