<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ReadyForPsbtFunding</code>
 */
class ReadyForPsbtFunding extends \Google\Protobuf\Internal\Message
{
    /**
     *The P2WSH address of the channel funding multisig address that the below
     *specified amount in satoshis needs to be sent to.
     *
     * Generated from protobuf field <code>string funding_address = 1;</code>
     */
    protected $funding_address = '';
    /**
     *The exact amount in satoshis that needs to be sent to the above address to
     *fund the pending channel.
     *
     * Generated from protobuf field <code>int64 funding_amount = 2;</code>
     */
    protected $funding_amount = 0;
    /**
     *A raw PSBT that contains the pending channel output. If a base PSBT was
     *provided in the PsbtShim, this is the base PSBT with one additional output.
     *If no base PSBT was specified, this is an otherwise empty PSBT with exactly
     *one output.
     *
     * Generated from protobuf field <code>bytes psbt = 3;</code>
     */
    protected $psbt = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $funding_address
     *          The P2WSH address of the channel funding multisig address that the below
     *          specified amount in satoshis needs to be sent to.
     *     @type int|string $funding_amount
     *          The exact amount in satoshis that needs to be sent to the above address to
     *          fund the pending channel.
     *     @type string $psbt
     *          A raw PSBT that contains the pending channel output. If a base PSBT was
     *          provided in the PsbtShim, this is the base PSBT with one additional output.
     *          If no base PSBT was specified, this is an otherwise empty PSBT with exactly
     *          one output.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *The P2WSH address of the channel funding multisig address that the below
     *specified amount in satoshis needs to be sent to.
     *
     * Generated from protobuf field <code>string funding_address = 1;</code>
     * @return string
     */
    public function getFundingAddress()
    {
        return $this->funding_address;
    }

    /**
     *The P2WSH address of the channel funding multisig address that the below
     *specified amount in satoshis needs to be sent to.
     *
     * Generated from protobuf field <code>string funding_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFundingAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->funding_address = $var;

        return $this;
    }

    /**
     *The exact amount in satoshis that needs to be sent to the above address to
     *fund the pending channel.
     *
     * Generated from protobuf field <code>int64 funding_amount = 2;</code>
     * @return int|string
     */
    public function getFundingAmount()
    {
        return $this->funding_amount;
    }

    /**
     *The exact amount in satoshis that needs to be sent to the above address to
     *fund the pending channel.
     *
     * Generated from protobuf field <code>int64 funding_amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFundingAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->funding_amount = $var;

        return $this;
    }

    /**
     *A raw PSBT that contains the pending channel output. If a base PSBT was
     *provided in the PsbtShim, this is the base PSBT with one additional output.
     *If no base PSBT was specified, this is an otherwise empty PSBT with exactly
     *one output.
     *
     * Generated from protobuf field <code>bytes psbt = 3;</code>
     * @return string
     */
    public function getPsbt()
    {
        return $this->psbt;
    }

    /**
     *A raw PSBT that contains the pending channel output. If a base PSBT was
     *provided in the PsbtShim, this is the base PSBT with one additional output.
     *If no base PSBT was specified, this is an otherwise empty PSBT with exactly
     *one output.
     *
     * Generated from protobuf field <code>bytes psbt = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPsbt($var)
    {
        GPBUtil::checkString($var, False);
        $this->psbt = $var;

        return $this;
    }

}

