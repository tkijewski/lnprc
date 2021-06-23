<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.FinalizePsbtRequest</code>
 */
class FinalizePsbtRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *A PSBT that should be signed and finalized. The PSBT must contain all
     *required inputs, outputs, UTXO data and partial signatures of all other
     *signers.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     */
    private $funded_psbt = '';
    /**
     *The name of the account to finalize the PSBT with. If empty, the default
     *wallet account is used.
     *
     * Generated from protobuf field <code>string account = 5;</code>
     */
    private $account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $funded_psbt
     *          A PSBT that should be signed and finalized. The PSBT must contain all
     *          required inputs, outputs, UTXO data and partial signatures of all other
     *          signers.
     *     @type string $account
     *          The name of the account to finalize the PSBT with. If empty, the default
     *          wallet account is used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *A PSBT that should be signed and finalized. The PSBT must contain all
     *required inputs, outputs, UTXO data and partial signatures of all other
     *signers.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     * @return string
     */
    public function getFundedPsbt()
    {
        return $this->funded_psbt;
    }

    /**
     *A PSBT that should be signed and finalized. The PSBT must contain all
     *required inputs, outputs, UTXO data and partial signatures of all other
     *signers.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFundedPsbt($var)
    {
        GPBUtil::checkString($var, False);
        $this->funded_psbt = $var;

        return $this;
    }

    /**
     *The name of the account to finalize the PSBT with. If empty, the default
     *wallet account is used.
     *
     * Generated from protobuf field <code>string account = 5;</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     *The name of the account to finalize the PSBT with. If empty, the default
     *wallet account is used.
     *
     * Generated from protobuf field <code>string account = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

}

