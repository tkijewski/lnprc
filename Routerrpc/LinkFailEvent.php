<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.LinkFailEvent</code>
 */
class LinkFailEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Info contains details about the htlc that we failed.
     *
     * Generated from protobuf field <code>.routerrpc.HtlcInfo info = 1;</code>
     */
    protected $info = null;
    /**
     * FailureCode is the BOLT error code for the failure.
     *
     * Generated from protobuf field <code>.lnrpc.Failure.FailureCode wire_failure = 2;</code>
     */
    protected $wire_failure = 0;
    /**
     *FailureDetail provides additional information about the reason for the
     *failure. This detail enriches the information provided by the wire message
     *and may be 'no detail' if the wire message requires no additional metadata.
     *
     * Generated from protobuf field <code>.routerrpc.FailureDetail failure_detail = 3;</code>
     */
    protected $failure_detail = 0;
    /**
     * A string representation of the link failure.
     *
     * Generated from protobuf field <code>string failure_string = 4;</code>
     */
    protected $failure_string = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Routerrpc\HtlcInfo $info
     *           Info contains details about the htlc that we failed.
     *     @type int $wire_failure
     *           FailureCode is the BOLT error code for the failure.
     *     @type int $failure_detail
     *          FailureDetail provides additional information about the reason for the
     *          failure. This detail enriches the information provided by the wire message
     *          and may be 'no detail' if the wire message requires no additional metadata.
     *     @type string $failure_string
     *           A string representation of the link failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     * Info contains details about the htlc that we failed.
     *
     * Generated from protobuf field <code>.routerrpc.HtlcInfo info = 1;</code>
     * @return \Routerrpc\HtlcInfo|null
     */
    public function getInfo()
    {
        return $this->info;
    }

    public function hasInfo()
    {
        return isset($this->info);
    }

    public function clearInfo()
    {
        unset($this->info);
    }

    /**
     * Info contains details about the htlc that we failed.
     *
     * Generated from protobuf field <code>.routerrpc.HtlcInfo info = 1;</code>
     * @param \Routerrpc\HtlcInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Routerrpc\HtlcInfo::class);
        $this->info = $var;

        return $this;
    }

    /**
     * FailureCode is the BOLT error code for the failure.
     *
     * Generated from protobuf field <code>.lnrpc.Failure.FailureCode wire_failure = 2;</code>
     * @return int
     */
    public function getWireFailure()
    {
        return $this->wire_failure;
    }

    /**
     * FailureCode is the BOLT error code for the failure.
     *
     * Generated from protobuf field <code>.lnrpc.Failure.FailureCode wire_failure = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setWireFailure($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\Failure\FailureCode::class);
        $this->wire_failure = $var;

        return $this;
    }

    /**
     *FailureDetail provides additional information about the reason for the
     *failure. This detail enriches the information provided by the wire message
     *and may be 'no detail' if the wire message requires no additional metadata.
     *
     * Generated from protobuf field <code>.routerrpc.FailureDetail failure_detail = 3;</code>
     * @return int
     */
    public function getFailureDetail()
    {
        return $this->failure_detail;
    }

    /**
     *FailureDetail provides additional information about the reason for the
     *failure. This detail enriches the information provided by the wire message
     *and may be 'no detail' if the wire message requires no additional metadata.
     *
     * Generated from protobuf field <code>.routerrpc.FailureDetail failure_detail = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFailureDetail($var)
    {
        GPBUtil::checkEnum($var, \Routerrpc\FailureDetail::class);
        $this->failure_detail = $var;

        return $this;
    }

    /**
     * A string representation of the link failure.
     *
     * Generated from protobuf field <code>string failure_string = 4;</code>
     * @return string
     */
    public function getFailureString()
    {
        return $this->failure_string;
    }

    /**
     * A string representation of the link failure.
     *
     * Generated from protobuf field <code>string failure_string = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFailureString($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_string = $var;

        return $this;
    }

}

