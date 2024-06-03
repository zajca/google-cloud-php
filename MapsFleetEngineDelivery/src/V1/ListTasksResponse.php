<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/delivery_api.proto

namespace Google\Maps\FleetEngine\Delivery\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListTasks` response that contains the set of Tasks that meet the filter
 * criteria in the `ListTasksRequest`.
 *
 * Generated from protobuf message <code>maps.fleetengine.delivery.v1.ListTasksResponse</code>
 */
class ListTasksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of Tasks that meet the requested filtering criteria. When no filter
     * is specified, the request returns all tasks. A successful response can also
     * be empty. An empty response indicates that no Tasks were found meeting the
     * requested filter criteria.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.Task tasks = 1;</code>
     */
    private $tasks;
    /**
     * Pass this token in the `ListTasksRequest` to continue to list results.
     * If all results have been returned, then this field is either an empty
     * string, or it doesn't appear in the response.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * The total number of Tasks that match the request criteria, across all
     * pages.
     *
     * Generated from protobuf field <code>int64 total_size = 3;</code>
     */
    protected $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Maps\FleetEngine\Delivery\V1\Task>|\Google\Protobuf\Internal\RepeatedField $tasks
     *           The set of Tasks that meet the requested filtering criteria. When no filter
     *           is specified, the request returns all tasks. A successful response can also
     *           be empty. An empty response indicates that no Tasks were found meeting the
     *           requested filter criteria.
     *     @type string $next_page_token
     *           Pass this token in the `ListTasksRequest` to continue to list results.
     *           If all results have been returned, then this field is either an empty
     *           string, or it doesn't appear in the response.
     *     @type int|string $total_size
     *           The total number of Tasks that match the request criteria, across all
     *           pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\DeliveryApi::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of Tasks that meet the requested filtering criteria. When no filter
     * is specified, the request returns all tasks. A successful response can also
     * be empty. An empty response indicates that no Tasks were found meeting the
     * requested filter criteria.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.Task tasks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * The set of Tasks that meet the requested filtering criteria. When no filter
     * is specified, the request returns all tasks. A successful response can also
     * be empty. An empty response indicates that no Tasks were found meeting the
     * requested filter criteria.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.Task tasks = 1;</code>
     * @param array<\Google\Maps\FleetEngine\Delivery\V1\Task>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTasks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\Delivery\V1\Task::class);
        $this->tasks = $arr;

        return $this;
    }

    /**
     * Pass this token in the `ListTasksRequest` to continue to list results.
     * If all results have been returned, then this field is either an empty
     * string, or it doesn't appear in the response.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pass this token in the `ListTasksRequest` to continue to list results.
     * If all results have been returned, then this field is either an empty
     * string, or it doesn't appear in the response.
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
     * The total number of Tasks that match the request criteria, across all
     * pages.
     *
     * Generated from protobuf field <code>int64 total_size = 3;</code>
     * @return int|string
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The total number of Tasks that match the request criteria, across all
     * pages.
     *
     * Generated from protobuf field <code>int64 total_size = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_size = $var;

        return $this;
    }

}

