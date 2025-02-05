<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.MuSig2CleanupRequest</code>
 */
class MuSig2CleanupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *The unique ID of the signing session that should be removed/cleaned up.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     */
    protected $session_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     *          The unique ID of the signing session that should be removed/cleaned up.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     *The unique ID of the signing session that should be removed/cleaned up.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     *The unique ID of the signing session that should be removed/cleaned up.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, False);
        $this->session_id = $var;

        return $this;
    }

}

