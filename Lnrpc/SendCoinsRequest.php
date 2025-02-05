<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendCoinsRequest</code>
 */
class SendCoinsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The address to send coins to
     *
     * Generated from protobuf field <code>string addr = 1;</code>
     */
    protected $addr = '';
    /**
     * The amount in satoshis to send
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     */
    protected $amount = 0;
    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     */
    protected $target_conf = 0;
    /**
     * A manual fee rate set in sat/vbyte that should be used when crafting the
     * transaction.
     *
     * Generated from protobuf field <code>uint64 sat_per_vbyte = 4;</code>
     */
    protected $sat_per_vbyte = 0;
    /**
     * Deprecated, use sat_per_vbyte.
     * A manual fee rate set in sat/vbyte that should be used when crafting the
     * transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 5 [deprecated = true];</code>
     * @deprecated
     */
    protected $sat_per_byte = 0;
    /**
     *If set, then the amount field will be ignored, and lnd will attempt to
     *send all the coins under control of the internal wallet to the specified
     *address.
     *
     * Generated from protobuf field <code>bool send_all = 6;</code>
     */
    protected $send_all = false;
    /**
     * An optional label for the transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 7;</code>
     */
    protected $label = '';
    /**
     * The minimum number of confirmations each one of your outputs used for
     * the transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 8;</code>
     */
    protected $min_confs = 0;
    /**
     * Whether unconfirmed outputs should be used as inputs for the transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 9;</code>
     */
    protected $spend_unconfirmed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $addr
     *           The address to send coins to
     *     @type int|string $amount
     *           The amount in satoshis to send
     *     @type int $target_conf
     *           The target number of blocks that this transaction should be confirmed
     *           by.
     *     @type int|string $sat_per_vbyte
     *           A manual fee rate set in sat/vbyte that should be used when crafting the
     *           transaction.
     *     @type int|string $sat_per_byte
     *           Deprecated, use sat_per_vbyte.
     *           A manual fee rate set in sat/vbyte that should be used when crafting the
     *           transaction.
     *     @type bool $send_all
     *          If set, then the amount field will be ignored, and lnd will attempt to
     *          send all the coins under control of the internal wallet to the specified
     *          address.
     *     @type string $label
     *           An optional label for the transaction, limited to 500 characters.
     *     @type int $min_confs
     *           The minimum number of confirmations each one of your outputs used for
     *           the transaction must satisfy.
     *     @type bool $spend_unconfirmed
     *           Whether unconfirmed outputs should be used as inputs for the transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The address to send coins to
     *
     * Generated from protobuf field <code>string addr = 1;</code>
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * The address to send coins to
     *
     * Generated from protobuf field <code>string addr = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->addr = $var;

        return $this;
    }

    /**
     * The amount in satoshis to send
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The amount in satoshis to send
     *
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     * The target number of blocks that this transaction should be confirmed
     * by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
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
     * A manual fee rate set in sat/vbyte that should be used when crafting the
     * transaction.
     *
     * Generated from protobuf field <code>uint64 sat_per_vbyte = 4;</code>
     * @return int|string
     */
    public function getSatPerVbyte()
    {
        return $this->sat_per_vbyte;
    }

    /**
     * A manual fee rate set in sat/vbyte that should be used when crafting the
     * transaction.
     *
     * Generated from protobuf field <code>uint64 sat_per_vbyte = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatPerVbyte($var)
    {
        GPBUtil::checkUint64($var);
        $this->sat_per_vbyte = $var;

        return $this;
    }

    /**
     * Deprecated, use sat_per_vbyte.
     * A manual fee rate set in sat/vbyte that should be used when crafting the
     * transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 5 [deprecated = true];</code>
     * @return int|string
     * @deprecated
     */
    public function getSatPerByte()
    {
        @trigger_error('sat_per_byte is deprecated.', E_USER_DEPRECATED);
        return $this->sat_per_byte;
    }

    /**
     * Deprecated, use sat_per_vbyte.
     * A manual fee rate set in sat/vbyte that should be used when crafting the
     * transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 5 [deprecated = true];</code>
     * @param int|string $var
     * @return $this
     * @deprecated
     */
    public function setSatPerByte($var)
    {
        @trigger_error('sat_per_byte is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt64($var);
        $this->sat_per_byte = $var;

        return $this;
    }

    /**
     *If set, then the amount field will be ignored, and lnd will attempt to
     *send all the coins under control of the internal wallet to the specified
     *address.
     *
     * Generated from protobuf field <code>bool send_all = 6;</code>
     * @return bool
     */
    public function getSendAll()
    {
        return $this->send_all;
    }

    /**
     *If set, then the amount field will be ignored, and lnd will attempt to
     *send all the coins under control of the internal wallet to the specified
     *address.
     *
     * Generated from protobuf field <code>bool send_all = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setSendAll($var)
    {
        GPBUtil::checkBool($var);
        $this->send_all = $var;

        return $this;
    }

    /**
     * An optional label for the transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 7;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * An optional label for the transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * The minimum number of confirmations each one of your outputs used for
     * the transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 8;</code>
     * @return int
     */
    public function getMinConfs()
    {
        return $this->min_confs;
    }

    /**
     * The minimum number of confirmations each one of your outputs used for
     * the transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 8;</code>
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
     * Whether unconfirmed outputs should be used as inputs for the transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 9;</code>
     * @return bool
     */
    public function getSpendUnconfirmed()
    {
        return $this->spend_unconfirmed;
    }

    /**
     * Whether unconfirmed outputs should be used as inputs for the transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setSpendUnconfirmed($var)
    {
        GPBUtil::checkBool($var);
        $this->spend_unconfirmed = $var;

        return $this;
    }

}

