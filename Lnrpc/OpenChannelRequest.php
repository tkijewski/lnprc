<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.OpenChannelRequest</code>
 */
class OpenChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The pubkey of the node to open a channel with. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes node_pubkey = 2;</code>
     */
    private $node_pubkey = '';
    /**
     **
     *The hex encoded pubkey of the node to open a channel with. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string node_pubkey_string = 3 [deprecated = true];</code>
     */
    private $node_pubkey_string = '';
    /**
     *&#47; The number of satoshis the wallet should commit to the channel
     *
     * Generated from protobuf field <code>int64 local_funding_amount = 4;</code>
     */
    private $local_funding_amount = 0;
    /**
     *&#47; The number of satoshis to push to the remote side as part of the initial
     * / commitment state
     *
     * Generated from protobuf field <code>int64 push_sat = 5;</code>
     */
    private $push_sat = 0;
    /**
     *&#47; The target number of blocks that the funding transaction should be
     * / confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 6;</code>
     */
    private $target_conf = 0;
    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the
     * / funding transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 7;</code>
     */
    private $sat_per_byte = 0;
    /**
     *&#47; Whether this channel should be private, not announced to the greater
     * / network.
     *
     * Generated from protobuf field <code>bool private = 8;</code>
     */
    private $private = false;
    /**
     *&#47; The minimum value in millisatoshi we will require for incoming HTLCs on
     * / the channel.
     *
     * Generated from protobuf field <code>int64 min_htlc_msat = 9;</code>
     */
    private $min_htlc_msat = 0;
    /**
     *&#47; The delay we require on the remote's commitment transaction. If this is
     * / not set, it will be scaled automatically with the channel size.
     *
     * Generated from protobuf field <code>uint32 remote_csv_delay = 10;</code>
     */
    private $remote_csv_delay = 0;
    /**
     *&#47; The minimum number of confirmations each one of your outputs used for
     * / the funding transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 11;</code>
     */
    private $min_confs = 0;
    /**
     *&#47; Whether unconfirmed outputs should be used as inputs for the funding
     * / transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 12;</code>
     */
    private $spend_unconfirmed = false;
    /**
     *Close address is an optional address which specifies the address to which
     *funds should be paid out to upon cooperative close. This field may only be
     *set if the peer supports the option upfront feature bit (call listpeers
     *to check). The remote peer will only accept cooperative closes to this
     *address if it is set.
     *Note: If this value is set on channel creation, you will *not* be able to
     *cooperatively close out to a different address.
     *
     * Generated from protobuf field <code>string close_address = 13;</code>
     */
    private $close_address = '';
    /**
     **
     *Funding shims are an optional argument that allow the caller to intercept
     *certain funding functionality. For example, a shim can be provided to use a
     *particular key for the commitment key (ideally cold) rather than use one
     *that is generated by the wallet as normal, or signal that signing will be
     *carried out in an interactive manner (PSBT based).
     *
     * Generated from protobuf field <code>.lnrpc.FundingShim funding_shim = 14;</code>
     */
    private $funding_shim = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_pubkey
     *          *
     *          The pubkey of the node to open a channel with. When using REST, this field
     *          must be encoded as base64.
     *     @type string $node_pubkey_string
     *          *
     *          The hex encoded pubkey of the node to open a channel with. Deprecated now
     *          that the REST gateway supports base64 encoding of bytes fields.
     *     @type int|string $local_funding_amount
     *          &#47; The number of satoshis the wallet should commit to the channel
     *     @type int|string $push_sat
     *          &#47; The number of satoshis to push to the remote side as part of the initial
     *          / commitment state
     *     @type int $target_conf
     *          &#47; The target number of blocks that the funding transaction should be
     *          / confirmed by.
     *     @type int|string $sat_per_byte
     *          &#47; A manual fee rate set in sat/byte that should be used when crafting the
     *          / funding transaction.
     *     @type bool $private
     *          &#47; Whether this channel should be private, not announced to the greater
     *          / network.
     *     @type int|string $min_htlc_msat
     *          &#47; The minimum value in millisatoshi we will require for incoming HTLCs on
     *          / the channel.
     *     @type int $remote_csv_delay
     *          &#47; The delay we require on the remote's commitment transaction. If this is
     *          / not set, it will be scaled automatically with the channel size.
     *     @type int $min_confs
     *          &#47; The minimum number of confirmations each one of your outputs used for
     *          / the funding transaction must satisfy.
     *     @type bool $spend_unconfirmed
     *          &#47; Whether unconfirmed outputs should be used as inputs for the funding
     *          / transaction.
     *     @type string $close_address
     *          Close address is an optional address which specifies the address to which
     *          funds should be paid out to upon cooperative close. This field may only be
     *          set if the peer supports the option upfront feature bit (call listpeers
     *          to check). The remote peer will only accept cooperative closes to this
     *          address if it is set.
     *          Note: If this value is set on channel creation, you will *not* be able to
     *          cooperatively close out to a different address.
     *     @type \Lnrpc\FundingShim $funding_shim
     *          *
     *          Funding shims are an optional argument that allow the caller to intercept
     *          certain funding functionality. For example, a shim can be provided to use a
     *          particular key for the commitment key (ideally cold) rather than use one
     *          that is generated by the wallet as normal, or signal that signing will be
     *          carried out in an interactive manner (PSBT based).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The pubkey of the node to open a channel with. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes node_pubkey = 2;</code>
     * @return string
     */
    public function getNodePubkey()
    {
        return $this->node_pubkey;
    }

    /**
     **
     *The pubkey of the node to open a channel with. When using REST, this field
     *must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes node_pubkey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNodePubkey($var)
    {
        GPBUtil::checkString($var, False);
        $this->node_pubkey = $var;

        return $this;
    }

    /**
     **
     *The hex encoded pubkey of the node to open a channel with. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string node_pubkey_string = 3 [deprecated = true];</code>
     * @return string
     */
    public function getNodePubkeyString()
    {
        return $this->node_pubkey_string;
    }

    /**
     **
     *The hex encoded pubkey of the node to open a channel with. Deprecated now
     *that the REST gateway supports base64 encoding of bytes fields.
     *
     * Generated from protobuf field <code>string node_pubkey_string = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setNodePubkeyString($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_pubkey_string = $var;

        return $this;
    }

    /**
     *&#47; The number of satoshis the wallet should commit to the channel
     *
     * Generated from protobuf field <code>int64 local_funding_amount = 4;</code>
     * @return int|string
     */
    public function getLocalFundingAmount()
    {
        return $this->local_funding_amount;
    }

    /**
     *&#47; The number of satoshis the wallet should commit to the channel
     *
     * Generated from protobuf field <code>int64 local_funding_amount = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLocalFundingAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->local_funding_amount = $var;

        return $this;
    }

    /**
     *&#47; The number of satoshis to push to the remote side as part of the initial
     * / commitment state
     *
     * Generated from protobuf field <code>int64 push_sat = 5;</code>
     * @return int|string
     */
    public function getPushSat()
    {
        return $this->push_sat;
    }

    /**
     *&#47; The number of satoshis to push to the remote side as part of the initial
     * / commitment state
     *
     * Generated from protobuf field <code>int64 push_sat = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPushSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->push_sat = $var;

        return $this;
    }

    /**
     *&#47; The target number of blocks that the funding transaction should be
     * / confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 6;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     *&#47; The target number of blocks that the funding transaction should be
     * / confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetConf($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_conf = $var;

        return $this;
    }

    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the
     * / funding transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 7;</code>
     * @return int|string
     */
    public function getSatPerByte()
    {
        return $this->sat_per_byte;
    }

    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the
     * / funding transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatPerByte($var)
    {
        GPBUtil::checkInt64($var);
        $this->sat_per_byte = $var;

        return $this;
    }

    /**
     *&#47; Whether this channel should be private, not announced to the greater
     * / network.
     *
     * Generated from protobuf field <code>bool private = 8;</code>
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     *&#47; Whether this channel should be private, not announced to the greater
     * / network.
     *
     * Generated from protobuf field <code>bool private = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrivate($var)
    {
        GPBUtil::checkBool($var);
        $this->private = $var;

        return $this;
    }

    /**
     *&#47; The minimum value in millisatoshi we will require for incoming HTLCs on
     * / the channel.
     *
     * Generated from protobuf field <code>int64 min_htlc_msat = 9;</code>
     * @return int|string
     */
    public function getMinHtlcMsat()
    {
        return $this->min_htlc_msat;
    }

    /**
     *&#47; The minimum value in millisatoshi we will require for incoming HTLCs on
     * / the channel.
     *
     * Generated from protobuf field <code>int64 min_htlc_msat = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinHtlcMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_htlc_msat = $var;

        return $this;
    }

    /**
     *&#47; The delay we require on the remote's commitment transaction. If this is
     * / not set, it will be scaled automatically with the channel size.
     *
     * Generated from protobuf field <code>uint32 remote_csv_delay = 10;</code>
     * @return int
     */
    public function getRemoteCsvDelay()
    {
        return $this->remote_csv_delay;
    }

    /**
     *&#47; The delay we require on the remote's commitment transaction. If this is
     * / not set, it will be scaled automatically with the channel size.
     *
     * Generated from protobuf field <code>uint32 remote_csv_delay = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRemoteCsvDelay($var)
    {
        GPBUtil::checkUint32($var);
        $this->remote_csv_delay = $var;

        return $this;
    }

    /**
     *&#47; The minimum number of confirmations each one of your outputs used for
     * / the funding transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 11;</code>
     * @return int
     */
    public function getMinConfs()
    {
        return $this->min_confs;
    }

    /**
     *&#47; The minimum number of confirmations each one of your outputs used for
     * / the funding transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMinConfs($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_confs = $var;

        return $this;
    }

    /**
     *&#47; Whether unconfirmed outputs should be used as inputs for the funding
     * / transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 12;</code>
     * @return bool
     */
    public function getSpendUnconfirmed()
    {
        return $this->spend_unconfirmed;
    }

    /**
     *&#47; Whether unconfirmed outputs should be used as inputs for the funding
     * / transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setSpendUnconfirmed($var)
    {
        GPBUtil::checkBool($var);
        $this->spend_unconfirmed = $var;

        return $this;
    }

    /**
     *Close address is an optional address which specifies the address to which
     *funds should be paid out to upon cooperative close. This field may only be
     *set if the peer supports the option upfront feature bit (call listpeers
     *to check). The remote peer will only accept cooperative closes to this
     *address if it is set.
     *Note: If this value is set on channel creation, you will *not* be able to
     *cooperatively close out to a different address.
     *
     * Generated from protobuf field <code>string close_address = 13;</code>
     * @return string
     */
    public function getCloseAddress()
    {
        return $this->close_address;
    }

    /**
     *Close address is an optional address which specifies the address to which
     *funds should be paid out to upon cooperative close. This field may only be
     *set if the peer supports the option upfront feature bit (call listpeers
     *to check). The remote peer will only accept cooperative closes to this
     *address if it is set.
     *Note: If this value is set on channel creation, you will *not* be able to
     *cooperatively close out to a different address.
     *
     * Generated from protobuf field <code>string close_address = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setCloseAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->close_address = $var;

        return $this;
    }

    /**
     **
     *Funding shims are an optional argument that allow the caller to intercept
     *certain funding functionality. For example, a shim can be provided to use a
     *particular key for the commitment key (ideally cold) rather than use one
     *that is generated by the wallet as normal, or signal that signing will be
     *carried out in an interactive manner (PSBT based).
     *
     * Generated from protobuf field <code>.lnrpc.FundingShim funding_shim = 14;</code>
     * @return \Lnrpc\FundingShim
     */
    public function getFundingShim()
    {
        return $this->funding_shim;
    }

    /**
     **
     *Funding shims are an optional argument that allow the caller to intercept
     *certain funding functionality. For example, a shim can be provided to use a
     *particular key for the commitment key (ideally cold) rather than use one
     *that is generated by the wallet as normal, or signal that signing will be
     *carried out in an interactive manner (PSBT based).
     *
     * Generated from protobuf field <code>.lnrpc.FundingShim funding_shim = 14;</code>
     * @param \Lnrpc\FundingShim $var
     * @return $this
     */
    public function setFundingShim($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\FundingShim::class);
        $this->funding_shim = $var;

        return $this;
    }

}

