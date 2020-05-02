<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.BakeMacaroonResponse</code>
 */
class BakeMacaroonResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The hex encoded macaroon, serialized in binary format.
     *
     * Generated from protobuf field <code>string macaroon = 1;</code>
     */
    protected $macaroon = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $macaroon
     *          &#47; The hex encoded macaroon, serialized in binary format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The hex encoded macaroon, serialized in binary format.
     *
     * Generated from protobuf field <code>string macaroon = 1;</code>
     * @return string
     */
    public function getMacaroon()
    {
        return $this->macaroon;
    }

    /**
     *&#47; The hex encoded macaroon, serialized in binary format.
     *
     * Generated from protobuf field <code>string macaroon = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMacaroon($var)
    {
        GPBUtil::checkString($var, True);
        $this->macaroon = $var;

        return $this;
    }

}

