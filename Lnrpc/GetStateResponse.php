<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stateservice.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.GetStateResponse</code>
 */
class GetStateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.lnrpc.WalletState state = 1;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Stateservice::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.WalletState state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.WalletState state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\WalletState::class);
        $this->state = $var;

        return $this;
    }

}
