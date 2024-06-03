<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicle_api.proto

namespace Google\Maps\FleetEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `GetVehicle` request message.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.GetVehicleRequest</code>
 */
class GetVehicleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1;</code>
     */
    protected $header = null;
    /**
     * Required. Must be in the format
     * `providers/{provider}/vehicles/{vehicle}`.
     * The provider must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Indicates the minimum timestamp (exclusive) for which
     * `Vehicle.current_route_segment` is retrieved.
     * If the route is unchanged since this timestamp, the `current_route_segment`
     * field is not set in the response. If a minimum is unspecified, the
     * `current_route_segment` is always retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_route_segment_version = 4;</code>
     */
    protected $current_route_segment_version = null;
    /**
     * Indicates the minimum timestamp (exclusive) for which `Vehicle.waypoints`
     * data is retrieved. If the waypoints are unchanged since this timestamp, the
     * `vehicle.waypoints` data is not set in the response. If this field is
     * unspecified, `vehicle.waypoints` is always retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp waypoints_version = 5;</code>
     */
    protected $waypoints_version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\FleetEngine\V1\RequestHeader $header
     *           The standard Fleet Engine request header.
     *     @type string $name
     *           Required. Must be in the format
     *           `providers/{provider}/vehicles/{vehicle}`.
     *           The provider must be the Project ID (for example, `sample-cloud-project`)
     *           of the Google Cloud Project of which the service account making
     *           this call is a member.
     *     @type \Google\Protobuf\Timestamp $current_route_segment_version
     *           Indicates the minimum timestamp (exclusive) for which
     *           `Vehicle.current_route_segment` is retrieved.
     *           If the route is unchanged since this timestamp, the `current_route_segment`
     *           field is not set in the response. If a minimum is unspecified, the
     *           `current_route_segment` is always retrieved.
     *     @type \Google\Protobuf\Timestamp $waypoints_version
     *           Indicates the minimum timestamp (exclusive) for which `Vehicle.waypoints`
     *           data is retrieved. If the waypoints are unchanged since this timestamp, the
     *           `vehicle.waypoints` data is not set in the response. If this field is
     *           unspecified, `vehicle.waypoints` is always retrieved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\VehicleApi::initOnce();
        parent::__construct($data);
    }

    /**
     * The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1;</code>
     * @return \Google\Maps\FleetEngine\V1\RequestHeader|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * The standard Fleet Engine request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.RequestHeader header = 1;</code>
     * @param \Google\Maps\FleetEngine\V1\RequestHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\V1\RequestHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Required. Must be in the format
     * `providers/{provider}/vehicles/{vehicle}`.
     * The provider must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Must be in the format
     * `providers/{provider}/vehicles/{vehicle}`.
     * The provider must be the Project ID (for example, `sample-cloud-project`)
     * of the Google Cloud Project of which the service account making
     * this call is a member.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Indicates the minimum timestamp (exclusive) for which
     * `Vehicle.current_route_segment` is retrieved.
     * If the route is unchanged since this timestamp, the `current_route_segment`
     * field is not set in the response. If a minimum is unspecified, the
     * `current_route_segment` is always retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_route_segment_version = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCurrentRouteSegmentVersion()
    {
        return $this->current_route_segment_version;
    }

    public function hasCurrentRouteSegmentVersion()
    {
        return isset($this->current_route_segment_version);
    }

    public function clearCurrentRouteSegmentVersion()
    {
        unset($this->current_route_segment_version);
    }

    /**
     * Indicates the minimum timestamp (exclusive) for which
     * `Vehicle.current_route_segment` is retrieved.
     * If the route is unchanged since this timestamp, the `current_route_segment`
     * field is not set in the response. If a minimum is unspecified, the
     * `current_route_segment` is always retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp current_route_segment_version = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCurrentRouteSegmentVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->current_route_segment_version = $var;

        return $this;
    }

    /**
     * Indicates the minimum timestamp (exclusive) for which `Vehicle.waypoints`
     * data is retrieved. If the waypoints are unchanged since this timestamp, the
     * `vehicle.waypoints` data is not set in the response. If this field is
     * unspecified, `vehicle.waypoints` is always retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp waypoints_version = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getWaypointsVersion()
    {
        return $this->waypoints_version;
    }

    public function hasWaypointsVersion()
    {
        return isset($this->waypoints_version);
    }

    public function clearWaypointsVersion()
    {
        unset($this->waypoints_version);
    }

    /**
     * Indicates the minimum timestamp (exclusive) for which `Vehicle.waypoints`
     * data is retrieved. If the waypoints are unchanged since this timestamp, the
     * `vehicle.waypoints` data is not set in the response. If this field is
     * unspecified, `vehicle.waypoints` is always retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp waypoints_version = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setWaypointsVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->waypoints_version = $var;

        return $this;
    }

}

