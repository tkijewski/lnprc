<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.MuSig2CombineKeysResponse</code>
 */
class MuSig2CombineKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *The combined public key (in the 32-byte x-only format) with all tweaks
     *applied to it. If a taproot tweak is specified, this corresponds to the
     *taproot key that can be put into the on-chain output.
     *
     * Generated from protobuf field <code>bytes combined_key = 1;</code>
     */
    protected $combined_key = '';
    /**
     *The raw combined public key (in the 32-byte x-only format) before any tweaks
     *are applied to it. If a taproot tweak is specified, this corresponds to the
     *internal key that needs to be put into the witness if the script spend path
     *is used.
     *
     * Generated from protobuf field <code>bytes taproot_internal_key = 2;</code>
     */
    protected $taproot_internal_key = '';
    /**
     *The version of the MuSig2 BIP that was used to combine the keys.
     *
     * Generated from protobuf field <code>.signrpc.MuSig2Version version = 4;</code>
     */
    protected $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $combined_key
     *          The combined public key (in the 32-byte x-only format) with all tweaks
     *          applied to it. If a taproot tweak is specified, this corresponds to the
     *          taproot key that can be put into the on-chain output.
     *     @type string $taproot_internal_key
     *          The raw combined public key (in the 32-byte x-only format) before any tweaks
     *          are applied to it. If a taproot tweak is specified, this corresponds to the
     *          internal key that needs to be put into the witness if the script spend path
     *          is used.
     *     @type int $version
     *          The version of the MuSig2 BIP that was used to combine the keys.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     *The combined public key (in the 32-byte x-only format) with all tweaks
     *applied to it. If a taproot tweak is specified, this corresponds to the
     *taproot key that can be put into the on-chain output.
     *
     * Generated from protobuf field <code>bytes combined_key = 1;</code>
     * @return string
     */
    public function getCombinedKey()
    {
        return $this->combined_key;
    }

    /**
     *The combined public key (in the 32-byte x-only format) with all tweaks
     *applied to it. If a taproot tweak is specified, this corresponds to the
     *taproot key that can be put into the on-chain output.
     *
     * Generated from protobuf field <code>bytes combined_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCombinedKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->combined_key = $var;

        return $this;
    }

    /**
     *The raw combined public key (in the 32-byte x-only format) before any tweaks
     *are applied to it. If a taproot tweak is specified, this corresponds to the
     *internal key that needs to be put into the witness if the script spend path
     *is used.
     *
     * Generated from protobuf field <code>bytes taproot_internal_key = 2;</code>
     * @return string
     */
    public function getTaprootInternalKey()
    {
        return $this->taproot_internal_key;
    }

    /**
     *The raw combined public key (in the 32-byte x-only format) before any tweaks
     *are applied to it. If a taproot tweak is specified, this corresponds to the
     *internal key that needs to be put into the witness if the script spend path
     *is used.
     *
     * Generated from protobuf field <code>bytes taproot_internal_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTaprootInternalKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->taproot_internal_key = $var;

        return $this;
    }

    /**
     *The version of the MuSig2 BIP that was used to combine the keys.
     *
     * Generated from protobuf field <code>.signrpc.MuSig2Version version = 4;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *The version of the MuSig2 BIP that was used to combine the keys.
     *
     * Generated from protobuf field <code>.signrpc.MuSig2Version version = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkEnum($var, \Signrpc\MuSig2Version::class);
        $this->version = $var;

        return $this;
    }

}

