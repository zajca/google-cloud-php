<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [VmwareEngine.ListNetworkPeerings][google.cloud.vmwareengine.v1.VmwareEngine.ListNetworkPeerings]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.ListNetworkPeeringsResponse</code>
 */
class ListNetworkPeeringsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of network peerings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.NetworkPeering network_peerings = 1;</code>
     */
    private $network_peerings;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Unreachable resources.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VmwareEngine\V1\NetworkPeering>|\Google\Protobuf\Internal\RepeatedField $network_peerings
     *           A list of network peerings.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Unreachable resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of network peerings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.NetworkPeering network_peerings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkPeerings()
    {
        return $this->network_peerings;
    }

    /**
     * A list of network peerings.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.NetworkPeering network_peerings = 1;</code>
     * @param array<\Google\Cloud\VmwareEngine\V1\NetworkPeering>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkPeerings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VmwareEngine\V1\NetworkPeering::class);
        $this->network_peerings = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Unreachable resources.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Unreachable resources.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

