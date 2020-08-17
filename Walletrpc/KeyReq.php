<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.KeyReq</code>
 */
class KeyReq extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *Is the key finger print of the root pubkey that this request is targeting.
     *This allows the WalletKit to possibly serve out keys for multiple HD chains
     *via public derivation.
     *
     * Generated from protobuf field <code>int32 key_finger_print = 1;</code>
     */
    private $key_finger_print = 0;
    /**
     **
     *The target key family to derive a key from. In other contexts, this is
     *known as the "account".
     *
     * Generated from protobuf field <code>int32 key_family = 2;</code>
     */
    private $key_family = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $key_finger_print
     *          *
     *          Is the key finger print of the root pubkey that this request is targeting.
     *          This allows the WalletKit to possibly serve out keys for multiple HD chains
     *          via public derivation.
     *     @type int $key_family
     *          *
     *          The target key family to derive a key from. In other contexts, this is
     *          known as the "account".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *Is the key finger print of the root pubkey that this request is targeting.
     *This allows the WalletKit to possibly serve out keys for multiple HD chains
     *via public derivation.
     *
     * Generated from protobuf field <code>int32 key_finger_print = 1;</code>
     * @return int
     */
    public function getKeyFingerPrint()
    {
        return $this->key_finger_print;
    }

    /**
     **
     *Is the key finger print of the root pubkey that this request is targeting.
     *This allows the WalletKit to possibly serve out keys for multiple HD chains
     *via public derivation.
     *
     * Generated from protobuf field <code>int32 key_finger_print = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyFingerPrint($var)
    {
        GPBUtil::checkInt32($var);
        $this->key_finger_print = $var;

        return $this;
    }

    /**
     **
     *The target key family to derive a key from. In other contexts, this is
     *known as the "account".
     *
     * Generated from protobuf field <code>int32 key_family = 2;</code>
     * @return int
     */
    public function getKeyFamily()
    {
        return $this->key_family;
    }

    /**
     **
     *The target key family to derive a key from. In other contexts, this is
     *known as the "account".
     *
     * Generated from protobuf field <code>int32 key_family = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyFamily($var)
    {
        GPBUtil::checkInt32($var);
        $this->key_family = $var;

        return $this;
    }

}

