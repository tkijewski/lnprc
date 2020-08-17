<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SignMessageResponse</code>
 */
class SignMessageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The signature for the given message
     *
     * Generated from protobuf field <code>string signature = 1;</code>
     */
    private $signature = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signature
     *          &#47; The signature for the given message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The signature for the given message
     *
     * Generated from protobuf field <code>string signature = 1;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     *&#47; The signature for the given message
     *
     * Generated from protobuf field <code>string signature = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

}

