<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: chainnotifier.proto

namespace Chainrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chainrpc.ConfEvent</code>
 */
class ConfEvent extends \Google\Protobuf\Internal\Message
{
    protected $event;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Chainrpc\ConfDetails $conf
     *          An event that includes the confirmation details of the request
     *          (txid/ouput script).
     *     @type \Chainrpc\Reorg $reorg
     *          An event send when the transaction of the request is reorged out of the
     *          chain.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chainnotifier::initOnce();
        parent::__construct($data);
    }

    /**
     *An event that includes the confirmation details of the request
     *(txid/ouput script).
     *
     * Generated from protobuf field <code>.chainrpc.ConfDetails conf = 1;</code>
     * @return \Chainrpc\ConfDetails
     */
    public function getConf()
    {
        return $this->readOneof(1);
    }

    public function hasConf()
    {
        return $this->hasOneof(1);
    }

    /**
     *An event that includes the confirmation details of the request
     *(txid/ouput script).
     *
     * Generated from protobuf field <code>.chainrpc.ConfDetails conf = 1;</code>
     * @param \Chainrpc\ConfDetails $var
     * @return $this
     */
    public function setConf($var)
    {
        GPBUtil::checkMessage($var, \Chainrpc\ConfDetails::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *An event send when the transaction of the request is reorged out of the
     *chain.
     *
     * Generated from protobuf field <code>.chainrpc.Reorg reorg = 2;</code>
     * @return \Chainrpc\Reorg
     */
    public function getReorg()
    {
        return $this->readOneof(2);
    }

    public function hasReorg()
    {
        return $this->hasOneof(2);
    }

    /**
     *An event send when the transaction of the request is reorged out of the
     *chain.
     *
     * Generated from protobuf field <code>.chainrpc.Reorg reorg = 2;</code>
     * @param \Chainrpc\Reorg $var
     * @return $this
     */
    public function setReorg($var)
    {
        GPBUtil::checkMessage($var, \Chainrpc\Reorg::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->whichOneof("event");
    }

}
