<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: neutrino.proto

namespace Neutrinorpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>neutrinorpc.IsBannedResponse</code>
 */
class IsBannedResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool banned = 1;</code>
     */
    protected $banned = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $banned
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Neutrino::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool banned = 1;</code>
     * @return bool
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Generated from protobuf field <code>bool banned = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setBanned($var)
    {
        GPBUtil::checkBool($var);
        $this->banned = $var;

        return $this;
    }

}

