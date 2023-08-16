<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.VerifyMessageWithAddrRequest</code>
 */
class VerifyMessageWithAddrRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The message to be signed. When using REST, this field must be encoded as
     * base64.
     *
     * Generated from protobuf field <code>bytes msg = 1;</code>
     */
    protected $msg = '';
    /**
     * The compact ECDSA signature to be verified over the given message
     * ecoded in base64.
     *
     * Generated from protobuf field <code>string signature = 2;</code>
     */
    protected $signature = '';
    /**
     * The address which will be used to look up the public key and verify the
     * the signature.
     *
     * Generated from protobuf field <code>string addr = 3;</code>
     */
    protected $addr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $msg
     *           The message to be signed. When using REST, this field must be encoded as
     *           base64.
     *     @type string $signature
     *           The compact ECDSA signature to be verified over the given message
     *           ecoded in base64.
     *     @type string $addr
     *           The address which will be used to look up the public key and verify the
     *           the signature.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     * The message to be signed. When using REST, this field must be encoded as
     * base64.
     *
     * Generated from protobuf field <code>bytes msg = 1;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * The message to be signed. When using REST, this field must be encoded as
     * base64.
     *
     * Generated from protobuf field <code>bytes msg = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, False);
        $this->msg = $var;

        return $this;
    }

    /**
     * The compact ECDSA signature to be verified over the given message
     * ecoded in base64.
     *
     * Generated from protobuf field <code>string signature = 2;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * The compact ECDSA signature to be verified over the given message
     * ecoded in base64.
     *
     * Generated from protobuf field <code>string signature = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * The address which will be used to look up the public key and verify the
     * the signature.
     *
     * Generated from protobuf field <code>string addr = 3;</code>
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * The address which will be used to look up the public key and verify the
     * the signature.
     *
     * Generated from protobuf field <code>string addr = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->addr = $var;

        return $this;
    }

}

