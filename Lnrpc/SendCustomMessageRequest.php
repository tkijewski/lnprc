<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendCustomMessageRequest</code>
 */
class SendCustomMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Peer to send the message to
     *
     * Generated from protobuf field <code>bytes peer = 1;</code>
     */
    protected $peer = '';
    /**
     * Message type. This value needs to be in the custom range (>= 32768).
     * To send a type < custom range, lnd needs to be compiled with the `dev`
     * build tag, and the message type to override should be specified in lnd's
     * experimental protocol configuration.
     *
     * Generated from protobuf field <code>uint32 type = 2;</code>
     */
    protected $type = 0;
    /**
     * Raw message data.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $peer
     *           Peer to send the message to
     *     @type int $type
     *           Message type. This value needs to be in the custom range (>= 32768).
     *           To send a type < custom range, lnd needs to be compiled with the `dev`
     *           build tag, and the message type to override should be specified in lnd's
     *           experimental protocol configuration.
     *     @type string $data
     *           Raw message data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Peer to send the message to
     *
     * Generated from protobuf field <code>bytes peer = 1;</code>
     * @return string
     */
    public function getPeer()
    {
        return $this->peer;
    }

    /**
     * Peer to send the message to
     *
     * Generated from protobuf field <code>bytes peer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPeer($var)
    {
        GPBUtil::checkString($var, False);
        $this->peer = $var;

        return $this;
    }

    /**
     * Message type. This value needs to be in the custom range (>= 32768).
     * To send a type < custom range, lnd needs to be compiled with the `dev`
     * build tag, and the message type to override should be specified in lnd's
     * experimental protocol configuration.
     *
     * Generated from protobuf field <code>uint32 type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Message type. This value needs to be in the custom range (>= 32768).
     * To send a type < custom range, lnd needs to be compiled with the `dev`
     * build tag, and the message type to override should be specified in lnd's
     * experimental protocol configuration.
     *
     * Generated from protobuf field <code>uint32 type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkUint32($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Raw message data.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Raw message data.
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

