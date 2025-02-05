<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelUpdate</code>
 */
class ChannelUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     *The signature that validates the announced data and proves the ownership
     *of node id.
     *
     * Generated from protobuf field <code>bytes signature = 1;</code>
     */
    protected $signature = '';
    /**
     *The target chain that this channel was opened within. This value
     *should be the genesis hash of the target chain. Along with the short
     *channel ID, this uniquely identifies the channel globally in a
     *blockchain.
     *
     * Generated from protobuf field <code>bytes chain_hash = 2;</code>
     */
    protected $chain_hash = '';
    /**
     *The unique description of the funding transaction.
     *
     * Generated from protobuf field <code>uint64 chan_id = 3 [jstype = JS_STRING];</code>
     */
    protected $chan_id = 0;
    /**
     *A timestamp that allows ordering in the case of multiple announcements.
     *We should ignore the message if timestamp is not greater than the
     *last-received.
     *
     * Generated from protobuf field <code>uint32 timestamp = 4;</code>
     */
    protected $timestamp = 0;
    /**
     *The bitfield that describes whether optional fields are present in this
     *update. Currently, the least-significant bit must be set to 1 if the
     *optional field MaxHtlc is present.
     *
     * Generated from protobuf field <code>uint32 message_flags = 10;</code>
     */
    protected $message_flags = 0;
    /**
     *The bitfield that describes additional meta-data concerning how the
     *update is to be interpreted. Currently, the least-significant bit must be
     *set to 0 if the creating node corresponds to the first node in the
     *previously sent channel announcement and 1 otherwise. If the second bit
     *is set, then the channel is set to be disabled.
     *
     * Generated from protobuf field <code>uint32 channel_flags = 5;</code>
     */
    protected $channel_flags = 0;
    /**
     *The minimum number of blocks this node requires to be added to the expiry
     *of HTLCs. This is a security parameter determined by the node operator.
     *This value represents the required gap between the time locks of the
     *incoming and outgoing HTLC's set to this node.
     *
     * Generated from protobuf field <code>uint32 time_lock_delta = 6;</code>
     */
    protected $time_lock_delta = 0;
    /**
     *The minimum HTLC value which will be accepted.
     *
     * Generated from protobuf field <code>uint64 htlc_minimum_msat = 7;</code>
     */
    protected $htlc_minimum_msat = 0;
    /**
     *The base fee that must be used for incoming HTLC's to this particular
     *channel. This value will be tacked onto the required for a payment
     *independent of the size of the payment.
     *
     * Generated from protobuf field <code>uint32 base_fee = 8;</code>
     */
    protected $base_fee = 0;
    /**
     *The fee rate that will be charged per millionth of a satoshi.
     *
     * Generated from protobuf field <code>uint32 fee_rate = 9;</code>
     */
    protected $fee_rate = 0;
    /**
     *The maximum HTLC value which will be accepted.
     *
     * Generated from protobuf field <code>uint64 htlc_maximum_msat = 11;</code>
     */
    protected $htlc_maximum_msat = 0;
    /**
     *The set of data that was appended to this message, some of which we may
     *not actually know how to iterate or parse. By holding onto this data, we
     *ensure that we're able to properly validate the set of signatures that
     *cover these new fields, and ensure we're able to make upgrades to the
     *network in a forwards compatible manner.
     *
     * Generated from protobuf field <code>bytes extra_opaque_data = 12;</code>
     */
    protected $extra_opaque_data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signature
     *          The signature that validates the announced data and proves the ownership
     *          of node id.
     *     @type string $chain_hash
     *          The target chain that this channel was opened within. This value
     *          should be the genesis hash of the target chain. Along with the short
     *          channel ID, this uniquely identifies the channel globally in a
     *          blockchain.
     *     @type int|string $chan_id
     *          The unique description of the funding transaction.
     *     @type int $timestamp
     *          A timestamp that allows ordering in the case of multiple announcements.
     *          We should ignore the message if timestamp is not greater than the
     *          last-received.
     *     @type int $message_flags
     *          The bitfield that describes whether optional fields are present in this
     *          update. Currently, the least-significant bit must be set to 1 if the
     *          optional field MaxHtlc is present.
     *     @type int $channel_flags
     *          The bitfield that describes additional meta-data concerning how the
     *          update is to be interpreted. Currently, the least-significant bit must be
     *          set to 0 if the creating node corresponds to the first node in the
     *          previously sent channel announcement and 1 otherwise. If the second bit
     *          is set, then the channel is set to be disabled.
     *     @type int $time_lock_delta
     *          The minimum number of blocks this node requires to be added to the expiry
     *          of HTLCs. This is a security parameter determined by the node operator.
     *          This value represents the required gap between the time locks of the
     *          incoming and outgoing HTLC's set to this node.
     *     @type int|string $htlc_minimum_msat
     *          The minimum HTLC value which will be accepted.
     *     @type int $base_fee
     *          The base fee that must be used for incoming HTLC's to this particular
     *          channel. This value will be tacked onto the required for a payment
     *          independent of the size of the payment.
     *     @type int $fee_rate
     *          The fee rate that will be charged per millionth of a satoshi.
     *     @type int|string $htlc_maximum_msat
     *          The maximum HTLC value which will be accepted.
     *     @type string $extra_opaque_data
     *          The set of data that was appended to this message, some of which we may
     *          not actually know how to iterate or parse. By holding onto this data, we
     *          ensure that we're able to properly validate the set of signatures that
     *          cover these new fields, and ensure we're able to make upgrades to the
     *          network in a forwards compatible manner.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *The signature that validates the announced data and proves the ownership
     *of node id.
     *
     * Generated from protobuf field <code>bytes signature = 1;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     *The signature that validates the announced data and proves the ownership
     *of node id.
     *
     * Generated from protobuf field <code>bytes signature = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature = $var;

        return $this;
    }

    /**
     *The target chain that this channel was opened within. This value
     *should be the genesis hash of the target chain. Along with the short
     *channel ID, this uniquely identifies the channel globally in a
     *blockchain.
     *
     * Generated from protobuf field <code>bytes chain_hash = 2;</code>
     * @return string
     */
    public function getChainHash()
    {
        return $this->chain_hash;
    }

    /**
     *The target chain that this channel was opened within. This value
     *should be the genesis hash of the target chain. Along with the short
     *channel ID, this uniquely identifies the channel globally in a
     *blockchain.
     *
     * Generated from protobuf field <code>bytes chain_hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChainHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->chain_hash = $var;

        return $this;
    }

    /**
     *The unique description of the funding transaction.
     *
     * Generated from protobuf field <code>uint64 chan_id = 3 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     *The unique description of the funding transaction.
     *
     * Generated from protobuf field <code>uint64 chan_id = 3 [jstype = JS_STRING];</code>
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
     *A timestamp that allows ordering in the case of multiple announcements.
     *We should ignore the message if timestamp is not greater than the
     *last-received.
     *
     * Generated from protobuf field <code>uint32 timestamp = 4;</code>
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     *A timestamp that allows ordering in the case of multiple announcements.
     *We should ignore the message if timestamp is not greater than the
     *last-received.
     *
     * Generated from protobuf field <code>uint32 timestamp = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint32($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     *The bitfield that describes whether optional fields are present in this
     *update. Currently, the least-significant bit must be set to 1 if the
     *optional field MaxHtlc is present.
     *
     * Generated from protobuf field <code>uint32 message_flags = 10;</code>
     * @return int
     */
    public function getMessageFlags()
    {
        return $this->message_flags;
    }

    /**
     *The bitfield that describes whether optional fields are present in this
     *update. Currently, the least-significant bit must be set to 1 if the
     *optional field MaxHtlc is present.
     *
     * Generated from protobuf field <code>uint32 message_flags = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->message_flags = $var;

        return $this;
    }

    /**
     *The bitfield that describes additional meta-data concerning how the
     *update is to be interpreted. Currently, the least-significant bit must be
     *set to 0 if the creating node corresponds to the first node in the
     *previously sent channel announcement and 1 otherwise. If the second bit
     *is set, then the channel is set to be disabled.
     *
     * Generated from protobuf field <code>uint32 channel_flags = 5;</code>
     * @return int
     */
    public function getChannelFlags()
    {
        return $this->channel_flags;
    }

    /**
     *The bitfield that describes additional meta-data concerning how the
     *update is to be interpreted. Currently, the least-significant bit must be
     *set to 0 if the creating node corresponds to the first node in the
     *previously sent channel announcement and 1 otherwise. If the second bit
     *is set, then the channel is set to be disabled.
     *
     * Generated from protobuf field <code>uint32 channel_flags = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->channel_flags = $var;

        return $this;
    }

    /**
     *The minimum number of blocks this node requires to be added to the expiry
     *of HTLCs. This is a security parameter determined by the node operator.
     *This value represents the required gap between the time locks of the
     *incoming and outgoing HTLC's set to this node.
     *
     * Generated from protobuf field <code>uint32 time_lock_delta = 6;</code>
     * @return int
     */
    public function getTimeLockDelta()
    {
        return $this->time_lock_delta;
    }

    /**
     *The minimum number of blocks this node requires to be added to the expiry
     *of HTLCs. This is a security parameter determined by the node operator.
     *This value represents the required gap between the time locks of the
     *incoming and outgoing HTLC's set to this node.
     *
     * Generated from protobuf field <code>uint32 time_lock_delta = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeLockDelta($var)
    {
        GPBUtil::checkUint32($var);
        $this->time_lock_delta = $var;

        return $this;
    }

    /**
     *The minimum HTLC value which will be accepted.
     *
     * Generated from protobuf field <code>uint64 htlc_minimum_msat = 7;</code>
     * @return int|string
     */
    public function getHtlcMinimumMsat()
    {
        return $this->htlc_minimum_msat;
    }

    /**
     *The minimum HTLC value which will be accepted.
     *
     * Generated from protobuf field <code>uint64 htlc_minimum_msat = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHtlcMinimumMsat($var)
    {
        GPBUtil::checkUint64($var);
        $this->htlc_minimum_msat = $var;

        return $this;
    }

    /**
     *The base fee that must be used for incoming HTLC's to this particular
     *channel. This value will be tacked onto the required for a payment
     *independent of the size of the payment.
     *
     * Generated from protobuf field <code>uint32 base_fee = 8;</code>
     * @return int
     */
    public function getBaseFee()
    {
        return $this->base_fee;
    }

    /**
     *The base fee that must be used for incoming HTLC's to this particular
     *channel. This value will be tacked onto the required for a payment
     *independent of the size of the payment.
     *
     * Generated from protobuf field <code>uint32 base_fee = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseFee($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_fee = $var;

        return $this;
    }

    /**
     *The fee rate that will be charged per millionth of a satoshi.
     *
     * Generated from protobuf field <code>uint32 fee_rate = 9;</code>
     * @return int
     */
    public function getFeeRate()
    {
        return $this->fee_rate;
    }

    /**
     *The fee rate that will be charged per millionth of a satoshi.
     *
     * Generated from protobuf field <code>uint32 fee_rate = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFeeRate($var)
    {
        GPBUtil::checkUint32($var);
        $this->fee_rate = $var;

        return $this;
    }

    /**
     *The maximum HTLC value which will be accepted.
     *
     * Generated from protobuf field <code>uint64 htlc_maximum_msat = 11;</code>
     * @return int|string
     */
    public function getHtlcMaximumMsat()
    {
        return $this->htlc_maximum_msat;
    }

    /**
     *The maximum HTLC value which will be accepted.
     *
     * Generated from protobuf field <code>uint64 htlc_maximum_msat = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHtlcMaximumMsat($var)
    {
        GPBUtil::checkUint64($var);
        $this->htlc_maximum_msat = $var;

        return $this;
    }

    /**
     *The set of data that was appended to this message, some of which we may
     *not actually know how to iterate or parse. By holding onto this data, we
     *ensure that we're able to properly validate the set of signatures that
     *cover these new fields, and ensure we're able to make upgrades to the
     *network in a forwards compatible manner.
     *
     * Generated from protobuf field <code>bytes extra_opaque_data = 12;</code>
     * @return string
     */
    public function getExtraOpaqueData()
    {
        return $this->extra_opaque_data;
    }

    /**
     *The set of data that was appended to this message, some of which we may
     *not actually know how to iterate or parse. By holding onto this data, we
     *ensure that we're able to properly validate the set of signatures that
     *cover these new fields, and ensure we're able to make upgrades to the
     *network in a forwards compatible manner.
     *
     * Generated from protobuf field <code>bytes extra_opaque_data = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setExtraOpaqueData($var)
    {
        GPBUtil::checkString($var, False);
        $this->extra_opaque_data = $var;

        return $this;
    }

}

