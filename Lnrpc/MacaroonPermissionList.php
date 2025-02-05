<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.MacaroonPermissionList</code>
 */
class MacaroonPermissionList extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of macaroon permissions.
     *
     * Generated from protobuf field <code>repeated .lnrpc.MacaroonPermission permissions = 1;</code>
     */
    private $permissions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Lnrpc\MacaroonPermission>|\Google\Protobuf\Internal\RepeatedField $permissions
     *           A list of macaroon permissions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of macaroon permissions.
     *
     * Generated from protobuf field <code>repeated .lnrpc.MacaroonPermission permissions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * A list of macaroon permissions.
     *
     * Generated from protobuf field <code>repeated .lnrpc.MacaroonPermission permissions = 1;</code>
     * @param array<\Lnrpc\MacaroonPermission>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\MacaroonPermission::class);
        $this->permissions = $arr;

        return $this;
    }

}

