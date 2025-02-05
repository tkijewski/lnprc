<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.KeyDescriptor</code>
 */
class KeyDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     *The raw bytes of the key being identified.
     *
     * Generated from protobuf field <code>bytes raw_key_bytes = 1;</code>
     */
    protected $raw_key_bytes = '';
    /**
     *The key locator that identifies which key to use for signing.
     *
     * Generated from protobuf field <code>.lnrpc.KeyLocator key_loc = 2;</code>
     */
    protected $key_loc = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $raw_key_bytes
     *          The raw bytes of the key being identified.
     *     @type \Lnrpc\KeyLocator $key_loc
     *          The key locator that identifies which key to use for signing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *The raw bytes of the key being identified.
     *
     * Generated from protobuf field <code>bytes raw_key_bytes = 1;</code>
     * @return string
     */
    public function getRawKeyBytes()
    {
        return $this->raw_key_bytes;
    }

    /**
     *The raw bytes of the key being identified.
     *
     * Generated from protobuf field <code>bytes raw_key_bytes = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRawKeyBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->raw_key_bytes = $var;

        return $this;
    }

    /**
     *The key locator that identifies which key to use for signing.
     *
     * Generated from protobuf field <code>.lnrpc.KeyLocator key_loc = 2;</code>
     * @return \Lnrpc\KeyLocator|null
     */
    public function getKeyLoc()
    {
        return $this->key_loc;
    }

    public function hasKeyLoc()
    {
        return isset($this->key_loc);
    }

    public function clearKeyLoc()
    {
        unset($this->key_loc);
    }

    /**
     *The key locator that identifies which key to use for signing.
     *
     * Generated from protobuf field <code>.lnrpc.KeyLocator key_loc = 2;</code>
     * @param \Lnrpc\KeyLocator $var
     * @return $this
     */
    public function setKeyLoc($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\KeyLocator::class);
        $this->key_loc = $var;

        return $this;
    }

}

