<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.SignDescriptor</code>
 */
class SignDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     *A descriptor that precisely describes *which* key to use for signing. This
     *may provide the raw public key directly, or require the Signer to re-derive
     *the key according to the populated derivation path.
     *Note that if the key descriptor was obtained through walletrpc.DeriveKey,
     *then the key locator MUST always be provided, since the derived keys are not
     *persisted unlike with DeriveNextKey.
     *
     * Generated from protobuf field <code>.signrpc.KeyDescriptor key_desc = 1;</code>
     */
    protected $key_desc = null;
    /**
     *A scalar value that will be added to the private key corresponding to the
     *above public key to obtain the private key to be used to sign this input.
     *This value is typically derived via the following computation:
     * derivedKey = privkey + sha256(perCommitmentPoint || pubKey) mod N
     *
     * Generated from protobuf field <code>bytes single_tweak = 2;</code>
     */
    protected $single_tweak = '';
    /**
     *A private key that will be used in combination with its corresponding
     *private key to derive the private key that is to be used to sign the target
     *input. Within the Lightning protocol, this value is typically the
     *commitment secret from a previously revoked commitment transaction. This
     *value is in combination with two hash values, and the original private key
     *to derive the private key to be used when signing.
     * k = (privKey*sha256(pubKey || tweakPub) +
     *tweakPriv*sha256(tweakPub || pubKey)) mod N
     *
     * Generated from protobuf field <code>bytes double_tweak = 3;</code>
     */
    protected $double_tweak = '';
    /**
     *The 32 byte input to the taproot tweak derivation that is used to derive
     *the output key from an internal key: outputKey = internalKey +
     *tagged_hash("tapTweak", internalKey || tapTweak).
     *When doing a BIP 86 spend, this field can be an empty byte slice.
     *When doing a normal key path spend, with the output key committing to an
     *actual script root, then this field should be: the tapscript root hash.
     *
     * Generated from protobuf field <code>bytes tap_tweak = 10;</code>
     */
    protected $tap_tweak = '';
    /**
     *The full script required to properly redeem the output. This field will
     *only be populated if a p2tr, p2wsh or a p2sh output is being signed. If a
     *taproot script path spend is being attempted, then this should be the raw
     *leaf script.
     *
     * Generated from protobuf field <code>bytes witness_script = 4;</code>
     */
    protected $witness_script = '';
    /**
     *A description of the output being spent. The value and script MUST be
     *provided.
     *
     * Generated from protobuf field <code>.signrpc.TxOut output = 5;</code>
     */
    protected $output = null;
    /**
     *The target sighash type that should be used when generating the final
     *sighash, and signature.
     *
     * Generated from protobuf field <code>uint32 sighash = 7;</code>
     */
    protected $sighash = 0;
    /**
     *The target input within the transaction that should be signed.
     *
     * Generated from protobuf field <code>int32 input_index = 8;</code>
     */
    protected $input_index = 0;
    /**
     *The sign method specifies how the input should be signed. Depending on the
     *method, either the tap_tweak, witness_script or both need to be specified.
     *Defaults to SegWit v0 signing to be backward compatible with older RPC
     *clients.
     *
     * Generated from protobuf field <code>.signrpc.SignMethod sign_method = 9;</code>
     */
    protected $sign_method = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Signrpc\KeyDescriptor $key_desc
     *          A descriptor that precisely describes *which* key to use for signing. This
     *          may provide the raw public key directly, or require the Signer to re-derive
     *          the key according to the populated derivation path.
     *          Note that if the key descriptor was obtained through walletrpc.DeriveKey,
     *          then the key locator MUST always be provided, since the derived keys are not
     *          persisted unlike with DeriveNextKey.
     *     @type string $single_tweak
     *          A scalar value that will be added to the private key corresponding to the
     *          above public key to obtain the private key to be used to sign this input.
     *          This value is typically derived via the following computation:
     *           derivedKey = privkey + sha256(perCommitmentPoint || pubKey) mod N
     *     @type string $double_tweak
     *          A private key that will be used in combination with its corresponding
     *          private key to derive the private key that is to be used to sign the target
     *          input. Within the Lightning protocol, this value is typically the
     *          commitment secret from a previously revoked commitment transaction. This
     *          value is in combination with two hash values, and the original private key
     *          to derive the private key to be used when signing.
     *           k = (privKey*sha256(pubKey || tweakPub) +
     *          tweakPriv*sha256(tweakPub || pubKey)) mod N
     *     @type string $tap_tweak
     *          The 32 byte input to the taproot tweak derivation that is used to derive
     *          the output key from an internal key: outputKey = internalKey +
     *          tagged_hash("tapTweak", internalKey || tapTweak).
     *          When doing a BIP 86 spend, this field can be an empty byte slice.
     *          When doing a normal key path spend, with the output key committing to an
     *          actual script root, then this field should be: the tapscript root hash.
     *     @type string $witness_script
     *          The full script required to properly redeem the output. This field will
     *          only be populated if a p2tr, p2wsh or a p2sh output is being signed. If a
     *          taproot script path spend is being attempted, then this should be the raw
     *          leaf script.
     *     @type \Signrpc\TxOut $output
     *          A description of the output being spent. The value and script MUST be
     *          provided.
     *     @type int $sighash
     *          The target sighash type that should be used when generating the final
     *          sighash, and signature.
     *     @type int $input_index
     *          The target input within the transaction that should be signed.
     *     @type int $sign_method
     *          The sign method specifies how the input should be signed. Depending on the
     *          method, either the tap_tweak, witness_script or both need to be specified.
     *          Defaults to SegWit v0 signing to be backward compatible with older RPC
     *          clients.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     *A descriptor that precisely describes *which* key to use for signing. This
     *may provide the raw public key directly, or require the Signer to re-derive
     *the key according to the populated derivation path.
     *Note that if the key descriptor was obtained through walletrpc.DeriveKey,
     *then the key locator MUST always be provided, since the derived keys are not
     *persisted unlike with DeriveNextKey.
     *
     * Generated from protobuf field <code>.signrpc.KeyDescriptor key_desc = 1;</code>
     * @return \Signrpc\KeyDescriptor|null
     */
    public function getKeyDesc()
    {
        return $this->key_desc;
    }

    public function hasKeyDesc()
    {
        return isset($this->key_desc);
    }

    public function clearKeyDesc()
    {
        unset($this->key_desc);
    }

    /**
     *A descriptor that precisely describes *which* key to use for signing. This
     *may provide the raw public key directly, or require the Signer to re-derive
     *the key according to the populated derivation path.
     *Note that if the key descriptor was obtained through walletrpc.DeriveKey,
     *then the key locator MUST always be provided, since the derived keys are not
     *persisted unlike with DeriveNextKey.
     *
     * Generated from protobuf field <code>.signrpc.KeyDescriptor key_desc = 1;</code>
     * @param \Signrpc\KeyDescriptor $var
     * @return $this
     */
    public function setKeyDesc($var)
    {
        GPBUtil::checkMessage($var, \Signrpc\KeyDescriptor::class);
        $this->key_desc = $var;

        return $this;
    }

    /**
     *A scalar value that will be added to the private key corresponding to the
     *above public key to obtain the private key to be used to sign this input.
     *This value is typically derived via the following computation:
     * derivedKey = privkey + sha256(perCommitmentPoint || pubKey) mod N
     *
     * Generated from protobuf field <code>bytes single_tweak = 2;</code>
     * @return string
     */
    public function getSingleTweak()
    {
        return $this->single_tweak;
    }

    /**
     *A scalar value that will be added to the private key corresponding to the
     *above public key to obtain the private key to be used to sign this input.
     *This value is typically derived via the following computation:
     * derivedKey = privkey + sha256(perCommitmentPoint || pubKey) mod N
     *
     * Generated from protobuf field <code>bytes single_tweak = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSingleTweak($var)
    {
        GPBUtil::checkString($var, False);
        $this->single_tweak = $var;

        return $this;
    }

    /**
     *A private key that will be used in combination with its corresponding
     *private key to derive the private key that is to be used to sign the target
     *input. Within the Lightning protocol, this value is typically the
     *commitment secret from a previously revoked commitment transaction. This
     *value is in combination with two hash values, and the original private key
     *to derive the private key to be used when signing.
     * k = (privKey*sha256(pubKey || tweakPub) +
     *tweakPriv*sha256(tweakPub || pubKey)) mod N
     *
     * Generated from protobuf field <code>bytes double_tweak = 3;</code>
     * @return string
     */
    public function getDoubleTweak()
    {
        return $this->double_tweak;
    }

    /**
     *A private key that will be used in combination with its corresponding
     *private key to derive the private key that is to be used to sign the target
     *input. Within the Lightning protocol, this value is typically the
     *commitment secret from a previously revoked commitment transaction. This
     *value is in combination with two hash values, and the original private key
     *to derive the private key to be used when signing.
     * k = (privKey*sha256(pubKey || tweakPub) +
     *tweakPriv*sha256(tweakPub || pubKey)) mod N
     *
     * Generated from protobuf field <code>bytes double_tweak = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDoubleTweak($var)
    {
        GPBUtil::checkString($var, False);
        $this->double_tweak = $var;

        return $this;
    }

    /**
     *The 32 byte input to the taproot tweak derivation that is used to derive
     *the output key from an internal key: outputKey = internalKey +
     *tagged_hash("tapTweak", internalKey || tapTweak).
     *When doing a BIP 86 spend, this field can be an empty byte slice.
     *When doing a normal key path spend, with the output key committing to an
     *actual script root, then this field should be: the tapscript root hash.
     *
     * Generated from protobuf field <code>bytes tap_tweak = 10;</code>
     * @return string
     */
    public function getTapTweak()
    {
        return $this->tap_tweak;
    }

    /**
     *The 32 byte input to the taproot tweak derivation that is used to derive
     *the output key from an internal key: outputKey = internalKey +
     *tagged_hash("tapTweak", internalKey || tapTweak).
     *When doing a BIP 86 spend, this field can be an empty byte slice.
     *When doing a normal key path spend, with the output key committing to an
     *actual script root, then this field should be: the tapscript root hash.
     *
     * Generated from protobuf field <code>bytes tap_tweak = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTapTweak($var)
    {
        GPBUtil::checkString($var, False);
        $this->tap_tweak = $var;

        return $this;
    }

    /**
     *The full script required to properly redeem the output. This field will
     *only be populated if a p2tr, p2wsh or a p2sh output is being signed. If a
     *taproot script path spend is being attempted, then this should be the raw
     *leaf script.
     *
     * Generated from protobuf field <code>bytes witness_script = 4;</code>
     * @return string
     */
    public function getWitnessScript()
    {
        return $this->witness_script;
    }

    /**
     *The full script required to properly redeem the output. This field will
     *only be populated if a p2tr, p2wsh or a p2sh output is being signed. If a
     *taproot script path spend is being attempted, then this should be the raw
     *leaf script.
     *
     * Generated from protobuf field <code>bytes witness_script = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setWitnessScript($var)
    {
        GPBUtil::checkString($var, False);
        $this->witness_script = $var;

        return $this;
    }

    /**
     *A description of the output being spent. The value and script MUST be
     *provided.
     *
     * Generated from protobuf field <code>.signrpc.TxOut output = 5;</code>
     * @return \Signrpc\TxOut|null
     */
    public function getOutput()
    {
        return $this->output;
    }

    public function hasOutput()
    {
        return isset($this->output);
    }

    public function clearOutput()
    {
        unset($this->output);
    }

    /**
     *A description of the output being spent. The value and script MUST be
     *provided.
     *
     * Generated from protobuf field <code>.signrpc.TxOut output = 5;</code>
     * @param \Signrpc\TxOut $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkMessage($var, \Signrpc\TxOut::class);
        $this->output = $var;

        return $this;
    }

    /**
     *The target sighash type that should be used when generating the final
     *sighash, and signature.
     *
     * Generated from protobuf field <code>uint32 sighash = 7;</code>
     * @return int
     */
    public function getSighash()
    {
        return $this->sighash;
    }

    /**
     *The target sighash type that should be used when generating the final
     *sighash, and signature.
     *
     * Generated from protobuf field <code>uint32 sighash = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSighash($var)
    {
        GPBUtil::checkUint32($var);
        $this->sighash = $var;

        return $this;
    }

    /**
     *The target input within the transaction that should be signed.
     *
     * Generated from protobuf field <code>int32 input_index = 8;</code>
     * @return int
     */
    public function getInputIndex()
    {
        return $this->input_index;
    }

    /**
     *The target input within the transaction that should be signed.
     *
     * Generated from protobuf field <code>int32 input_index = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setInputIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->input_index = $var;

        return $this;
    }

    /**
     *The sign method specifies how the input should be signed. Depending on the
     *method, either the tap_tweak, witness_script or both need to be specified.
     *Defaults to SegWit v0 signing to be backward compatible with older RPC
     *clients.
     *
     * Generated from protobuf field <code>.signrpc.SignMethod sign_method = 9;</code>
     * @return int
     */
    public function getSignMethod()
    {
        return $this->sign_method;
    }

    /**
     *The sign method specifies how the input should be signed. Depending on the
     *method, either the tap_tweak, witness_script or both need to be specified.
     *Defaults to SegWit v0 signing to be backward compatible with older RPC
     *clients.
     *
     * Generated from protobuf field <code>.signrpc.SignMethod sign_method = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSignMethod($var)
    {
        GPBUtil::checkEnum($var, \Signrpc\SignMethod::class);
        $this->sign_method = $var;

        return $this;
    }

}

