<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.RPCMessage</code>
 */
class RPCMessage extends \Google\Protobuf\Internal\Message
{
    /**
     *The full URI (in the format /<rpcpackage>.<ServiceName>/MethodName, for
     *example /lnrpc.Lightning/GetInfo) of the RPC method the message was sent
     *to/from.
     *
     * Generated from protobuf field <code>string method_full_uri = 1;</code>
     */
    protected $method_full_uri = '';
    /**
     *Indicates whether the message was sent over a streaming RPC method or not.
     *
     * Generated from protobuf field <code>bool stream_rpc = 2;</code>
     */
    protected $stream_rpc = false;
    /**
     *The full canonical gRPC name of the message type (in the format
     *<rpcpackage>.TypeName, for example lnrpc.GetInfoRequest). In case of an
     *error being returned from lnd, this simply contains the string "error".
     *
     * Generated from protobuf field <code>string type_name = 3;</code>
     */
    protected $type_name = '';
    /**
     *The full content of the gRPC message, serialized in the binary protobuf
     *format.
     *
     * Generated from protobuf field <code>bytes serialized = 4;</code>
     */
    protected $serialized = '';
    /**
     *Indicates that the response from lnd was an error, not a gRPC response. If
     *this is set to true then the type_name contains the string "error" and
     *serialized contains the error string.
     *
     * Generated from protobuf field <code>bool is_error = 5;</code>
     */
    protected $is_error = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $method_full_uri
     *          The full URI (in the format /<rpcpackage>.<ServiceName>/MethodName, for
     *          example /lnrpc.Lightning/GetInfo) of the RPC method the message was sent
     *          to/from.
     *     @type bool $stream_rpc
     *          Indicates whether the message was sent over a streaming RPC method or not.
     *     @type string $type_name
     *          The full canonical gRPC name of the message type (in the format
     *          <rpcpackage>.TypeName, for example lnrpc.GetInfoRequest). In case of an
     *          error being returned from lnd, this simply contains the string "error".
     *     @type string $serialized
     *          The full content of the gRPC message, serialized in the binary protobuf
     *          format.
     *     @type bool $is_error
     *          Indicates that the response from lnd was an error, not a gRPC response. If
     *          this is set to true then the type_name contains the string "error" and
     *          serialized contains the error string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *The full URI (in the format /<rpcpackage>.<ServiceName>/MethodName, for
     *example /lnrpc.Lightning/GetInfo) of the RPC method the message was sent
     *to/from.
     *
     * Generated from protobuf field <code>string method_full_uri = 1;</code>
     * @return string
     */
    public function getMethodFullUri()
    {
        return $this->method_full_uri;
    }

    /**
     *The full URI (in the format /<rpcpackage>.<ServiceName>/MethodName, for
     *example /lnrpc.Lightning/GetInfo) of the RPC method the message was sent
     *to/from.
     *
     * Generated from protobuf field <code>string method_full_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMethodFullUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->method_full_uri = $var;

        return $this;
    }

    /**
     *Indicates whether the message was sent over a streaming RPC method or not.
     *
     * Generated from protobuf field <code>bool stream_rpc = 2;</code>
     * @return bool
     */
    public function getStreamRpc()
    {
        return $this->stream_rpc;
    }

    /**
     *Indicates whether the message was sent over a streaming RPC method or not.
     *
     * Generated from protobuf field <code>bool stream_rpc = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setStreamRpc($var)
    {
        GPBUtil::checkBool($var);
        $this->stream_rpc = $var;

        return $this;
    }

    /**
     *The full canonical gRPC name of the message type (in the format
     *<rpcpackage>.TypeName, for example lnrpc.GetInfoRequest). In case of an
     *error being returned from lnd, this simply contains the string "error".
     *
     * Generated from protobuf field <code>string type_name = 3;</code>
     * @return string
     */
    public function getTypeName()
    {
        return $this->type_name;
    }

    /**
     *The full canonical gRPC name of the message type (in the format
     *<rpcpackage>.TypeName, for example lnrpc.GetInfoRequest). In case of an
     *error being returned from lnd, this simply contains the string "error".
     *
     * Generated from protobuf field <code>string type_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_name = $var;

        return $this;
    }

    /**
     *The full content of the gRPC message, serialized in the binary protobuf
     *format.
     *
     * Generated from protobuf field <code>bytes serialized = 4;</code>
     * @return string
     */
    public function getSerialized()
    {
        return $this->serialized;
    }

    /**
     *The full content of the gRPC message, serialized in the binary protobuf
     *format.
     *
     * Generated from protobuf field <code>bytes serialized = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSerialized($var)
    {
        GPBUtil::checkString($var, False);
        $this->serialized = $var;

        return $this;
    }

    /**
     *Indicates that the response from lnd was an error, not a gRPC response. If
     *this is set to true then the type_name contains the string "error" and
     *serialized contains the error string.
     *
     * Generated from protobuf field <code>bool is_error = 5;</code>
     * @return bool
     */
    public function getIsError()
    {
        return $this->is_error;
    }

    /**
     *Indicates that the response from lnd was an error, not a gRPC response. If
     *this is set to true then the type_name contains the string "error" and
     *serialized contains the error string.
     *
     * Generated from protobuf field <code>bool is_error = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsError($var)
    {
        GPBUtil::checkBool($var);
        $this->is_error = $var;

        return $this;
    }

}
