<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.PendingSweepsResponse</code>
 */
class PendingSweepsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *The set of outputs currently being swept by lnd's central batching engine.
     *
     * Generated from protobuf field <code>repeated .walletrpc.PendingSweep pending_sweeps = 1;</code>
     */
    private $pending_sweeps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Walletrpc\PendingSweep[]|\Google\Protobuf\Internal\RepeatedField $pending_sweeps
     *          The set of outputs currently being swept by lnd's central batching engine.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *The set of outputs currently being swept by lnd's central batching engine.
     *
     * Generated from protobuf field <code>repeated .walletrpc.PendingSweep pending_sweeps = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingSweeps()
    {
        return $this->pending_sweeps;
    }

    /**
     *The set of outputs currently being swept by lnd's central batching engine.
     *
     * Generated from protobuf field <code>repeated .walletrpc.PendingSweep pending_sweeps = 1;</code>
     * @param \Walletrpc\PendingSweep[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingSweeps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Walletrpc\PendingSweep::class);
        $this->pending_sweeps = $arr;

        return $this;
    }

}

