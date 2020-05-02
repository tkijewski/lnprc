<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendRequest</code>
 */
class SendRequest extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The identity pubkey of the payment recipient. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes dest = 1;</code>
     */
    protected $dest = '';
    /**
     **
     *The hex-encoded identity pubkey of the payment recipient. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string dest_string = 2 [deprecated = true];</code>
     */
    protected $dest_string = '';
    /**
     **
     *The amount to send expressed in satoshis.
     *The fields amt and amt_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 amt = 3;</code>
     */
    protected $amt = 0;
    /**
     **
     *The amount to send expressed in millisatoshis.
     *The fields amt and amt_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 amt_msat = 12;</code>
     */
    protected $amt_msat = 0;
    /**
     **
     *The hash to use within the payment's HTLC. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes payment_hash = 4;</code>
     */
    protected $payment_hash = '';
    /**
     **
     *The hex-encoded hash to use within the payment's HTLC. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string payment_hash_string = 5 [deprecated = true];</code>
     */
    protected $payment_hash_string = '';
    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network. With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 6;</code>
     */
    protected $payment_request = '';
    /**
     **
     *The CLTV delta from the current height that should be used to set the
     *timelock for the final hop.
     *
     * Generated from protobuf field <code>int32 final_cltv_delta = 7;</code>
     */
    protected $final_cltv_delta = 0;
    /**
     **
     *The maximum number of satoshis that will be paid as a fee of the payment.
     *This value can be represented either as a percentage of the amount being
     *sent, or as a fixed amount of the maximum fee the user is willing the pay to
     *send the payment.
     *
     * Generated from protobuf field <code>.lnrpc.FeeLimit fee_limit = 8;</code>
     */
    protected $fee_limit = null;
    /**
     **
     *The channel id of the channel that must be taken to the first hop. If zero,
     *any channel may be used.
     *
     * Generated from protobuf field <code>uint64 outgoing_chan_id = 9 [jstype = JS_STRING];</code>
     */
    protected $outgoing_chan_id = 0;
    /**
     **
     *The pubkey of the last hop of the route. If empty, any hop may be used.
     *
     * Generated from protobuf field <code>bytes last_hop_pubkey = 13;</code>
     */
    protected $last_hop_pubkey = '';
    /**
     **
     *An optional maximum total time lock for the route. This should not exceed
     *lnd's `--max-cltv-expiry` setting. If zero, then the value of
     *`--max-cltv-expiry` is enforced.
     *
     * Generated from protobuf field <code>uint32 cltv_limit = 10;</code>
     */
    protected $cltv_limit = 0;
    /**
     **
     *An optional field that can be used to pass an arbitrary set of TLV records
     *to a peer which understands the new records. This can be used to pass
     *application specific data during the payment attempt. Record types are
     *required to be in the custom range >= 65536. When using REST, the values
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>map<uint64, bytes> dest_custom_records = 11;</code>
     */
    private $dest_custom_records;
    /**
     *&#47; If set, circular payments to self are permitted.
     *
     * Generated from protobuf field <code>bool allow_self_payment = 14;</code>
     */
    protected $allow_self_payment = false;
    /**
     **
     *Features assumed to be supported by the final node. All transitive feature
     *dependencies must also be set properly. For a given feature bit pair, either
     *optional or remote may be set, but not both. If this field is nil or empty,
     *the router will try to load destination features from the graph as a
     *fallback.
     *
     * Generated from protobuf field <code>repeated .lnrpc.FeatureBit dest_features = 15;</code>
     */
    private $dest_features;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dest
     *          *
     *          The identity pubkey of the payment recipient. When using REST, this field
     *          must be encoded as base64.
     *     @type string $dest_string
     *          *
     *          The hex-encoded identity pubkey of the payment recipient. Deprecated now
     *          that the REST gateway supports base64 encoding of bytes fields.
     *     @type int|string $amt
     *          *
     *          The amount to send expressed in satoshis.
     *          The fields amt and amt_msat are mutually exclusive.
     *     @type int|string $amt_msat
     *          *
     *          The amount to send expressed in millisatoshis.
     *          The fields amt and amt_msat are mutually exclusive.
     *     @type string $payment_hash
     *          *
     *          The hash to use within the payment's HTLC. When using REST, this field
     *          must be encoded as base64.
     *     @type string $payment_hash_string
     *          *
     *          The hex-encoded hash to use within the payment's HTLC. Deprecated now
     *          that the REST gateway supports base64 encoding of bytes fields.
     *     @type string $payment_request
     *          *
     *          A bare-bones invoice for a payment within the Lightning Network. With the
     *          details of the invoice, the sender has all the data necessary to send a
     *          payment to the recipient.
     *     @type int $final_cltv_delta
     *          *
     *          The CLTV delta from the current height that should be used to set the
     *          timelock for the final hop.
     *     @type \Lnrpc\FeeLimit $fee_limit
     *          *
     *          The maximum number of satoshis that will be paid as a fee of the payment.
     *          This value can be represented either as a percentage of the amount being
     *          sent, or as a fixed amount of the maximum fee the user is willing the pay to
     *          send the payment.
     *     @type int|string $outgoing_chan_id
     *          *
     *          The channel id of the channel that must be taken to the first hop. If zero,
     *          any channel may be used.
     *     @type string $last_hop_pubkey
     *          *
     *          The pubkey of the last hop of the route. If empty, any hop may be used.
     *     @type int $cltv_limit
     *          *
     *          An optional maximum total time lock for the route. This should not exceed
     *          lnd's `--max-cltv-expiry` setting. If zero, then the value of
     *          `--max-cltv-expiry` is enforced.
     *     @type array|\Google\Protobuf\Internal\MapField $dest_custom_records
     *          *
     *          An optional field that can be used to pass an arbitrary set of TLV records
     *          to a peer which understands the new records. This can be used to pass
     *          application specific data during the payment attempt. Record types are
     *          required to be in the custom range >= 65536. When using REST, the values
     *          must be encoded as base64.
     *     @type bool $allow_self_payment
     *          &#47; If set, circular payments to self are permitted.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $dest_features
     *          *
     *          Features assumed to be supported by the final node. All transitive feature
     *          dependencies must also be set properly. For a given feature bit pair, either
     *          optional or remote may be set, but not both. If this field is nil or empty,
     *          the router will try to load destination features from the graph as a
     *          fallback.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The identity pubkey of the payment recipient. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes dest = 1;</code>
     * @return string
     */
    public function getDest()
    {
        return $this->dest;
    }

    /**
     **
     *The identity pubkey of the payment recipient. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes dest = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDest($var)
    {
        GPBUtil::checkString($var, False);
        $this->dest = $var;

        return $this;
    }

    /**
     **
     *The hex-encoded identity pubkey of the payment recipient. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string dest_string = 2 [deprecated = true];</code>
     * @return string
     */
    public function getDestString()
    {
        return $this->dest_string;
    }

    /**
     **
     *The hex-encoded identity pubkey of the payment recipient. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string dest_string = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setDestString($var)
    {
        GPBUtil::checkString($var, True);
        $this->dest_string = $var;

        return $this;
    }

    /**
     **
     *The amount to send expressed in satoshis.
     *The fields amt and amt_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 amt = 3;</code>
     * @return int|string
     */
    public function getAmt()
    {
        return $this->amt;
    }

    /**
     **
     *The amount to send expressed in satoshis.
     *The fields amt and amt_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 amt = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmt($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt = $var;

        return $this;
    }

    /**
     **
     *The amount to send expressed in millisatoshis.
     *The fields amt and amt_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 amt_msat = 12;</code>
     * @return int|string
     */
    public function getAmtMsat()
    {
        return $this->amt_msat;
    }

    /**
     **
     *The amount to send expressed in millisatoshis.
     *The fields amt and amt_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 amt_msat = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmtMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt_msat = $var;

        return $this;
    }

    /**
     **
     *The hash to use within the payment's HTLC. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes payment_hash = 4;</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->payment_hash;
    }

    /**
     **
     *The hash to use within the payment's HTLC. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes payment_hash = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->payment_hash = $var;

        return $this;
    }

    /**
     **
     *The hex-encoded hash to use within the payment's HTLC. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string payment_hash_string = 5 [deprecated = true];</code>
     * @return string
     */
    public function getPaymentHashString()
    {
        return $this->payment_hash_string;
    }

    /**
     **
     *The hex-encoded hash to use within the payment's HTLC. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string payment_hash_string = 5 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHashString($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_hash_string = $var;

        return $this;
    }

    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network. With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 6;</code>
     * @return string
     */
    public function getPaymentRequest()
    {
        return $this->payment_request;
    }

    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network. With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentRequest($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_request = $var;

        return $this;
    }

    /**
     **
     *The CLTV delta from the current height that should be used to set the
     *timelock for the final hop.
     *
     * Generated from protobuf field <code>int32 final_cltv_delta = 7;</code>
     * @return int
     */
    public function getFinalCltvDelta()
    {
        return $this->final_cltv_delta;
    }

    /**
     **
     *The CLTV delta from the current height that should be used to set the
     *timelock for the final hop.
     *
     * Generated from protobuf field <code>int32 final_cltv_delta = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFinalCltvDelta($var)
    {
        GPBUtil::checkInt32($var);
        $this->final_cltv_delta = $var;

        return $this;
    }

    /**
     **
     *The maximum number of satoshis that will be paid as a fee of the payment.
     *This value can be represented either as a percentage of the amount being
     *sent, or as a fixed amount of the maximum fee the user is willing the pay to
     *send the payment.
     *
     * Generated from protobuf field <code>.lnrpc.FeeLimit fee_limit = 8;</code>
     * @return \Lnrpc\FeeLimit
     */
    public function getFeeLimit()
    {
        return $this->fee_limit;
    }

    /**
     **
     *The maximum number of satoshis that will be paid as a fee of the payment.
     *This value can be represented either as a percentage of the amount being
     *sent, or as a fixed amount of the maximum fee the user is willing the pay to
     *send the payment.
     *
     * Generated from protobuf field <code>.lnrpc.FeeLimit fee_limit = 8;</code>
     * @param \Lnrpc\FeeLimit $var
     * @return $this
     */
    public function setFeeLimit($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\FeeLimit::class);
        $this->fee_limit = $var;

        return $this;
    }

    /**
     **
     *The channel id of the channel that must be taken to the first hop. If zero,
     *any channel may be used.
     *
     * Generated from protobuf field <code>uint64 outgoing_chan_id = 9 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getOutgoingChanId()
    {
        return $this->outgoing_chan_id;
    }

    /**
     **
     *The channel id of the channel that must be taken to the first hop. If zero,
     *any channel may be used.
     *
     * Generated from protobuf field <code>uint64 outgoing_chan_id = 9 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOutgoingChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->outgoing_chan_id = $var;

        return $this;
    }

    /**
     **
     *The pubkey of the last hop of the route. If empty, any hop may be used.
     *
     * Generated from protobuf field <code>bytes last_hop_pubkey = 13;</code>
     * @return string
     */
    public function getLastHopPubkey()
    {
        return $this->last_hop_pubkey;
    }

    /**
     **
     *The pubkey of the last hop of the route. If empty, any hop may be used.
     *
     * Generated from protobuf field <code>bytes last_hop_pubkey = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setLastHopPubkey($var)
    {
        GPBUtil::checkString($var, False);
        $this->last_hop_pubkey = $var;

        return $this;
    }

    /**
     **
     *An optional maximum total time lock for the route. This should not exceed
     *lnd's `--max-cltv-expiry` setting. If zero, then the value of
     *`--max-cltv-expiry` is enforced.
     *
     * Generated from protobuf field <code>uint32 cltv_limit = 10;</code>
     * @return int
     */
    public function getCltvLimit()
    {
        return $this->cltv_limit;
    }

    /**
     **
     *An optional maximum total time lock for the route. This should not exceed
     *lnd's `--max-cltv-expiry` setting. If zero, then the value of
     *`--max-cltv-expiry` is enforced.
     *
     * Generated from protobuf field <code>uint32 cltv_limit = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCltvLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->cltv_limit = $var;

        return $this;
    }

    /**
     **
     *An optional field that can be used to pass an arbitrary set of TLV records
     *to a peer which understands the new records. This can be used to pass
     *application specific data during the payment attempt. Record types are
     *required to be in the custom range >= 65536. When using REST, the values
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>map<uint64, bytes> dest_custom_records = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDestCustomRecords()
    {
        return $this->dest_custom_records;
    }

    /**
     **
     *An optional field that can be used to pass an arbitrary set of TLV records
     *to a peer which understands the new records. This can be used to pass
     *application specific data during the payment attempt. Record types are
     *required to be in the custom range >= 65536. When using REST, the values
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>map<uint64, bytes> dest_custom_records = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDestCustomRecords($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT64, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->dest_custom_records = $arr;

        return $this;
    }

    /**
     *&#47; If set, circular payments to self are permitted.
     *
     * Generated from protobuf field <code>bool allow_self_payment = 14;</code>
     * @return bool
     */
    public function getAllowSelfPayment()
    {
        return $this->allow_self_payment;
    }

    /**
     *&#47; If set, circular payments to self are permitted.
     *
     * Generated from protobuf field <code>bool allow_self_payment = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowSelfPayment($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_self_payment = $var;

        return $this;
    }

    /**
     **
     *Features assumed to be supported by the final node. All transitive feature
     *dependencies must also be set properly. For a given feature bit pair, either
     *optional or remote may be set, but not both. If this field is nil or empty,
     *the router will try to load destination features from the graph as a
     *fallback.
     *
     * Generated from protobuf field <code>repeated .lnrpc.FeatureBit dest_features = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDestFeatures()
    {
        return $this->dest_features;
    }

    /**
     **
     *Features assumed to be supported by the final node. All transitive feature
     *dependencies must also be set properly. For a given feature bit pair, either
     *optional or remote may be set, but not both. If this field is nil or empty,
     *the router will try to load destination features from the graph as a
     *fallback.
     *
     * Generated from protobuf field <code>repeated .lnrpc.FeatureBit dest_features = 15;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDestFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Lnrpc\FeatureBit::class);
        $this->dest_features = $arr;

        return $this;
    }

}

