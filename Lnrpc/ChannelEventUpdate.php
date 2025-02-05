<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelEventUpdate</code>
 */
class ChannelEventUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.lnrpc.ChannelEventUpdate.UpdateType type = 5;</code>
     */
    protected $type = 0;
    protected $channel;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\Channel $open_channel
     *     @type \Lnrpc\ChannelCloseSummary $closed_channel
     *     @type \Lnrpc\ChannelPoint $active_channel
     *     @type \Lnrpc\ChannelPoint $inactive_channel
     *     @type \Lnrpc\PendingUpdate $pending_open_channel
     *     @type \Lnrpc\ChannelPoint $fully_resolved_channel
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.Channel open_channel = 1;</code>
     * @return \Lnrpc\Channel|null
     */
    public function getOpenChannel()
    {
        return $this->readOneof(1);
    }

    public function hasOpenChannel()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.Channel open_channel = 1;</code>
     * @param \Lnrpc\Channel $var
     * @return $this
     */
    public function setOpenChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\Channel::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelCloseSummary closed_channel = 2;</code>
     * @return \Lnrpc\ChannelCloseSummary|null
     */
    public function getClosedChannel()
    {
        return $this->readOneof(2);
    }

    public function hasClosedChannel()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelCloseSummary closed_channel = 2;</code>
     * @param \Lnrpc\ChannelCloseSummary $var
     * @return $this
     */
    public function setClosedChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelCloseSummary::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint active_channel = 3;</code>
     * @return \Lnrpc\ChannelPoint|null
     */
    public function getActiveChannel()
    {
        return $this->readOneof(3);
    }

    public function hasActiveChannel()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint active_channel = 3;</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setActiveChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint inactive_channel = 4;</code>
     * @return \Lnrpc\ChannelPoint|null
     */
    public function getInactiveChannel()
    {
        return $this->readOneof(4);
    }

    public function hasInactiveChannel()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint inactive_channel = 4;</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setInactiveChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.PendingUpdate pending_open_channel = 6;</code>
     * @return \Lnrpc\PendingUpdate|null
     */
    public function getPendingOpenChannel()
    {
        return $this->readOneof(6);
    }

    public function hasPendingOpenChannel()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.PendingUpdate pending_open_channel = 6;</code>
     * @param \Lnrpc\PendingUpdate $var
     * @return $this
     */
    public function setPendingOpenChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PendingUpdate::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint fully_resolved_channel = 7;</code>
     * @return \Lnrpc\ChannelPoint|null
     */
    public function getFullyResolvedChannel()
    {
        return $this->readOneof(7);
    }

    public function hasFullyResolvedChannel()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint fully_resolved_channel = 7;</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setFullyResolvedChannel($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelEventUpdate.UpdateType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelEventUpdate.UpdateType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\ChannelEventUpdate\UpdateType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->whichOneof("channel");
    }

}

