<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for controlling how IPs are allocated in the cluster.
 *
 * Generated from protobuf message <code>google.container.v1.IPAllocationPolicy</code>
 */
class IPAllocationPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether alias IPs will be used for pod IPs in the cluster.
     * This is used in conjunction with use_routes. It cannot
     * be true if use_routes is true. If both use_ip_aliases and use_routes are
     * false, then the server picks the default IP allocation mode
     *
     * Generated from protobuf field <code>bool use_ip_aliases = 1;</code>
     */
    private $use_ip_aliases = false;
    /**
     * Whether a new subnetwork will be created automatically for the cluster.
     * This field is only applicable when `use_ip_aliases` is true.
     *
     * Generated from protobuf field <code>bool create_subnetwork = 2;</code>
     */
    private $create_subnetwork = false;
    /**
     * A custom subnetwork name to be used if `create_subnetwork` is true.  If
     * this field is empty, then an automatic name will be chosen for the new
     * subnetwork.
     *
     * Generated from protobuf field <code>string subnetwork_name = 3;</code>
     */
    private $subnetwork_name = '';
    /**
     * This field is deprecated, use cluster_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string cluster_ipv4_cidr = 4 [deprecated = true];</code>
     * @deprecated
     */
    protected $cluster_ipv4_cidr = '';
    /**
     * This field is deprecated, use node_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string node_ipv4_cidr = 5 [deprecated = true];</code>
     * @deprecated
     */
    protected $node_ipv4_cidr = '';
    /**
     * This field is deprecated, use services_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string services_ipv4_cidr = 6 [deprecated = true];</code>
     * @deprecated
     */
    protected $services_ipv4_cidr = '';
    /**
     * The name of the secondary range to be used for the cluster CIDR
     * block.  The secondary range will be used for pod IP
     * addresses. This must be an existing secondary range associated
     * with the cluster subnetwork.
     * This field is only applicable with use_ip_aliases is true and
     * create_subnetwork is false.
     *
     * Generated from protobuf field <code>string cluster_secondary_range_name = 7;</code>
     */
    private $cluster_secondary_range_name = '';
    /**
     * The name of the secondary range to be used as for the services
     * CIDR block.  The secondary range will be used for service
     * ClusterIPs. This must be an existing secondary range associated
     * with the cluster subnetwork.
     * This field is only applicable with use_ip_aliases is true and
     * create_subnetwork is false.
     *
     * Generated from protobuf field <code>string services_secondary_range_name = 8;</code>
     */
    private $services_secondary_range_name = '';
    /**
     * The IP address range for the cluster pod IPs. If this field is set, then
     * `cluster.cluster_ipv4_cidr` must be left blank.
     * This field is only applicable when `use_ip_aliases` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string cluster_ipv4_cidr_block = 9;</code>
     */
    private $cluster_ipv4_cidr_block = '';
    /**
     * The IP address range of the instance IPs in this cluster.
     * This is applicable only if `create_subnetwork` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string node_ipv4_cidr_block = 10;</code>
     */
    private $node_ipv4_cidr_block = '';
    /**
     * The IP address range of the services IPs in this cluster. If blank, a range
     * will be automatically chosen with the default size.
     * This field is only applicable when `use_ip_aliases` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string services_ipv4_cidr_block = 11;</code>
     */
    private $services_ipv4_cidr_block = '';
    /**
     * The IP address range of the Cloud TPUs in this cluster. If unspecified, a
     * range will be automatically chosen with the default size.
     * This field is only applicable when `use_ip_aliases` is true.
     * If unspecified, the range will use the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string tpu_ipv4_cidr_block = 13;</code>
     */
    private $tpu_ipv4_cidr_block = '';
    /**
     * Whether routes will be used for pod IPs in the cluster.
     * This is used in conjunction with use_ip_aliases. It cannot be true if
     * use_ip_aliases is true. If both use_ip_aliases and use_routes are false,
     * then the server picks the default IP allocation mode
     *
     * Generated from protobuf field <code>bool use_routes = 15;</code>
     */
    private $use_routes = false;
    /**
     * The IP stack type of the cluster
     *
     * Generated from protobuf field <code>.google.container.v1.StackType stack_type = 16;</code>
     */
    private $stack_type = 0;
    /**
     * The ipv6 access type (internal or external) when create_subnetwork is true
     *
     * Generated from protobuf field <code>.google.container.v1.IPv6AccessType ipv6_access_type = 17;</code>
     */
    private $ipv6_access_type = 0;
    /**
     * [PRIVATE FIELD]
     * Pod CIDR size overprovisioning config for the cluster.
     * Pod CIDR size per node depends on max_pods_per_node. By default, the value
     * of max_pods_per_node is doubled and then rounded off to next power of 2 to
     * get the size of pod CIDR block per node.
     * Example: max_pods_per_node of 30 would result in 64 IPs (/26).
     * This config can disable the doubling of IPs (we still round off to next
     * power of 2)
     * Example: max_pods_per_node of 30 will result in 32 IPs (/27) when
     * overprovisioning is disabled.
     *
     * Generated from protobuf field <code>.google.container.v1.PodCIDROverprovisionConfig pod_cidr_overprovision_config = 21;</code>
     */
    private $pod_cidr_overprovision_config = null;
    /**
     * Output only. [Output only] The subnet's IPv6 CIDR block used by nodes and
     * pods.
     *
     * Generated from protobuf field <code>string subnet_ipv6_cidr_block = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $subnet_ipv6_cidr_block = '';
    /**
     * Output only. [Output only] The services IPv6 CIDR block for the cluster.
     *
     * Generated from protobuf field <code>string services_ipv6_cidr_block = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $services_ipv6_cidr_block = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $use_ip_aliases
     *           Whether alias IPs will be used for pod IPs in the cluster.
     *           This is used in conjunction with use_routes. It cannot
     *           be true if use_routes is true. If both use_ip_aliases and use_routes are
     *           false, then the server picks the default IP allocation mode
     *     @type bool $create_subnetwork
     *           Whether a new subnetwork will be created automatically for the cluster.
     *           This field is only applicable when `use_ip_aliases` is true.
     *     @type string $subnetwork_name
     *           A custom subnetwork name to be used if `create_subnetwork` is true.  If
     *           this field is empty, then an automatic name will be chosen for the new
     *           subnetwork.
     *     @type string $cluster_ipv4_cidr
     *           This field is deprecated, use cluster_ipv4_cidr_block.
     *     @type string $node_ipv4_cidr
     *           This field is deprecated, use node_ipv4_cidr_block.
     *     @type string $services_ipv4_cidr
     *           This field is deprecated, use services_ipv4_cidr_block.
     *     @type string $cluster_secondary_range_name
     *           The name of the secondary range to be used for the cluster CIDR
     *           block.  The secondary range will be used for pod IP
     *           addresses. This must be an existing secondary range associated
     *           with the cluster subnetwork.
     *           This field is only applicable with use_ip_aliases is true and
     *           create_subnetwork is false.
     *     @type string $services_secondary_range_name
     *           The name of the secondary range to be used as for the services
     *           CIDR block.  The secondary range will be used for service
     *           ClusterIPs. This must be an existing secondary range associated
     *           with the cluster subnetwork.
     *           This field is only applicable with use_ip_aliases is true and
     *           create_subnetwork is false.
     *     @type string $cluster_ipv4_cidr_block
     *           The IP address range for the cluster pod IPs. If this field is set, then
     *           `cluster.cluster_ipv4_cidr` must be left blank.
     *           This field is only applicable when `use_ip_aliases` is true.
     *           Set to blank to have a range chosen with the default size.
     *           Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     *           netmask.
     *           Set to a
     *           [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     *           notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     *           `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     *           to use.
     *     @type string $node_ipv4_cidr_block
     *           The IP address range of the instance IPs in this cluster.
     *           This is applicable only if `create_subnetwork` is true.
     *           Set to blank to have a range chosen with the default size.
     *           Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     *           netmask.
     *           Set to a
     *           [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     *           notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     *           `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     *           to use.
     *     @type string $services_ipv4_cidr_block
     *           The IP address range of the services IPs in this cluster. If blank, a range
     *           will be automatically chosen with the default size.
     *           This field is only applicable when `use_ip_aliases` is true.
     *           Set to blank to have a range chosen with the default size.
     *           Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     *           netmask.
     *           Set to a
     *           [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     *           notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     *           `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     *           to use.
     *     @type string $tpu_ipv4_cidr_block
     *           The IP address range of the Cloud TPUs in this cluster. If unspecified, a
     *           range will be automatically chosen with the default size.
     *           This field is only applicable when `use_ip_aliases` is true.
     *           If unspecified, the range will use the default size.
     *           Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     *           netmask.
     *           Set to a
     *           [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     *           notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     *           `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     *           to use.
     *     @type bool $use_routes
     *           Whether routes will be used for pod IPs in the cluster.
     *           This is used in conjunction with use_ip_aliases. It cannot be true if
     *           use_ip_aliases is true. If both use_ip_aliases and use_routes are false,
     *           then the server picks the default IP allocation mode
     *     @type int $stack_type
     *           The IP stack type of the cluster
     *     @type int $ipv6_access_type
     *           The ipv6 access type (internal or external) when create_subnetwork is true
     *     @type \Google\Cloud\Container\V1\PodCIDROverprovisionConfig $pod_cidr_overprovision_config
     *           [PRIVATE FIELD]
     *           Pod CIDR size overprovisioning config for the cluster.
     *           Pod CIDR size per node depends on max_pods_per_node. By default, the value
     *           of max_pods_per_node is doubled and then rounded off to next power of 2 to
     *           get the size of pod CIDR block per node.
     *           Example: max_pods_per_node of 30 would result in 64 IPs (/26).
     *           This config can disable the doubling of IPs (we still round off to next
     *           power of 2)
     *           Example: max_pods_per_node of 30 will result in 32 IPs (/27) when
     *           overprovisioning is disabled.
     *     @type string $subnet_ipv6_cidr_block
     *           Output only. [Output only] The subnet's IPv6 CIDR block used by nodes and
     *           pods.
     *     @type string $services_ipv6_cidr_block
     *           Output only. [Output only] The services IPv6 CIDR block for the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether alias IPs will be used for pod IPs in the cluster.
     * This is used in conjunction with use_routes. It cannot
     * be true if use_routes is true. If both use_ip_aliases and use_routes are
     * false, then the server picks the default IP allocation mode
     *
     * Generated from protobuf field <code>bool use_ip_aliases = 1;</code>
     * @return bool
     */
    public function getUseIpAliases()
    {
        return $this->use_ip_aliases;
    }

    /**
     * Whether alias IPs will be used for pod IPs in the cluster.
     * This is used in conjunction with use_routes. It cannot
     * be true if use_routes is true. If both use_ip_aliases and use_routes are
     * false, then the server picks the default IP allocation mode
     *
     * Generated from protobuf field <code>bool use_ip_aliases = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseIpAliases($var)
    {
        GPBUtil::checkBool($var);
        $this->use_ip_aliases = $var;

        return $this;
    }

    /**
     * Whether a new subnetwork will be created automatically for the cluster.
     * This field is only applicable when `use_ip_aliases` is true.
     *
     * Generated from protobuf field <code>bool create_subnetwork = 2;</code>
     * @return bool
     */
    public function getCreateSubnetwork()
    {
        return $this->create_subnetwork;
    }

    /**
     * Whether a new subnetwork will be created automatically for the cluster.
     * This field is only applicable when `use_ip_aliases` is true.
     *
     * Generated from protobuf field <code>bool create_subnetwork = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCreateSubnetwork($var)
    {
        GPBUtil::checkBool($var);
        $this->create_subnetwork = $var;

        return $this;
    }

    /**
     * A custom subnetwork name to be used if `create_subnetwork` is true.  If
     * this field is empty, then an automatic name will be chosen for the new
     * subnetwork.
     *
     * Generated from protobuf field <code>string subnetwork_name = 3;</code>
     * @return string
     */
    public function getSubnetworkName()
    {
        return $this->subnetwork_name;
    }

    /**
     * A custom subnetwork name to be used if `create_subnetwork` is true.  If
     * this field is empty, then an automatic name will be chosen for the new
     * subnetwork.
     *
     * Generated from protobuf field <code>string subnetwork_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetworkName($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork_name = $var;

        return $this;
    }

    /**
     * This field is deprecated, use cluster_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string cluster_ipv4_cidr = 4 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getClusterIpv4Cidr()
    {
        @trigger_error('cluster_ipv4_cidr is deprecated.', E_USER_DEPRECATED);
        return $this->cluster_ipv4_cidr;
    }

    /**
     * This field is deprecated, use cluster_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string cluster_ipv4_cidr = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setClusterIpv4Cidr($var)
    {
        @trigger_error('cluster_ipv4_cidr is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->cluster_ipv4_cidr = $var;

        return $this;
    }

    /**
     * This field is deprecated, use node_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string node_ipv4_cidr = 5 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getNodeIpv4Cidr()
    {
        @trigger_error('node_ipv4_cidr is deprecated.', E_USER_DEPRECATED);
        return $this->node_ipv4_cidr;
    }

    /**
     * This field is deprecated, use node_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string node_ipv4_cidr = 5 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setNodeIpv4Cidr($var)
    {
        @trigger_error('node_ipv4_cidr is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->node_ipv4_cidr = $var;

        return $this;
    }

    /**
     * This field is deprecated, use services_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string services_ipv4_cidr = 6 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getServicesIpv4Cidr()
    {
        @trigger_error('services_ipv4_cidr is deprecated.', E_USER_DEPRECATED);
        return $this->services_ipv4_cidr;
    }

    /**
     * This field is deprecated, use services_ipv4_cidr_block.
     *
     * Generated from protobuf field <code>string services_ipv4_cidr = 6 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setServicesIpv4Cidr($var)
    {
        @trigger_error('services_ipv4_cidr is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->services_ipv4_cidr = $var;

        return $this;
    }

    /**
     * The name of the secondary range to be used for the cluster CIDR
     * block.  The secondary range will be used for pod IP
     * addresses. This must be an existing secondary range associated
     * with the cluster subnetwork.
     * This field is only applicable with use_ip_aliases is true and
     * create_subnetwork is false.
     *
     * Generated from protobuf field <code>string cluster_secondary_range_name = 7;</code>
     * @return string
     */
    public function getClusterSecondaryRangeName()
    {
        return $this->cluster_secondary_range_name;
    }

    /**
     * The name of the secondary range to be used for the cluster CIDR
     * block.  The secondary range will be used for pod IP
     * addresses. This must be an existing secondary range associated
     * with the cluster subnetwork.
     * This field is only applicable with use_ip_aliases is true and
     * create_subnetwork is false.
     *
     * Generated from protobuf field <code>string cluster_secondary_range_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterSecondaryRangeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_secondary_range_name = $var;

        return $this;
    }

    /**
     * The name of the secondary range to be used as for the services
     * CIDR block.  The secondary range will be used for service
     * ClusterIPs. This must be an existing secondary range associated
     * with the cluster subnetwork.
     * This field is only applicable with use_ip_aliases is true and
     * create_subnetwork is false.
     *
     * Generated from protobuf field <code>string services_secondary_range_name = 8;</code>
     * @return string
     */
    public function getServicesSecondaryRangeName()
    {
        return $this->services_secondary_range_name;
    }

    /**
     * The name of the secondary range to be used as for the services
     * CIDR block.  The secondary range will be used for service
     * ClusterIPs. This must be an existing secondary range associated
     * with the cluster subnetwork.
     * This field is only applicable with use_ip_aliases is true and
     * create_subnetwork is false.
     *
     * Generated from protobuf field <code>string services_secondary_range_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setServicesSecondaryRangeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->services_secondary_range_name = $var;

        return $this;
    }

    /**
     * The IP address range for the cluster pod IPs. If this field is set, then
     * `cluster.cluster_ipv4_cidr` must be left blank.
     * This field is only applicable when `use_ip_aliases` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string cluster_ipv4_cidr_block = 9;</code>
     * @return string
     */
    public function getClusterIpv4CidrBlock()
    {
        return $this->cluster_ipv4_cidr_block;
    }

    /**
     * The IP address range for the cluster pod IPs. If this field is set, then
     * `cluster.cluster_ipv4_cidr` must be left blank.
     * This field is only applicable when `use_ip_aliases` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string cluster_ipv4_cidr_block = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterIpv4CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_ipv4_cidr_block = $var;

        return $this;
    }

    /**
     * The IP address range of the instance IPs in this cluster.
     * This is applicable only if `create_subnetwork` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string node_ipv4_cidr_block = 10;</code>
     * @return string
     */
    public function getNodeIpv4CidrBlock()
    {
        return $this->node_ipv4_cidr_block;
    }

    /**
     * The IP address range of the instance IPs in this cluster.
     * This is applicable only if `create_subnetwork` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string node_ipv4_cidr_block = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeIpv4CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_ipv4_cidr_block = $var;

        return $this;
    }

    /**
     * The IP address range of the services IPs in this cluster. If blank, a range
     * will be automatically chosen with the default size.
     * This field is only applicable when `use_ip_aliases` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string services_ipv4_cidr_block = 11;</code>
     * @return string
     */
    public function getServicesIpv4CidrBlock()
    {
        return $this->services_ipv4_cidr_block;
    }

    /**
     * The IP address range of the services IPs in this cluster. If blank, a range
     * will be automatically chosen with the default size.
     * This field is only applicable when `use_ip_aliases` is true.
     * Set to blank to have a range chosen with the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string services_ipv4_cidr_block = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setServicesIpv4CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->services_ipv4_cidr_block = $var;

        return $this;
    }

    /**
     * The IP address range of the Cloud TPUs in this cluster. If unspecified, a
     * range will be automatically chosen with the default size.
     * This field is only applicable when `use_ip_aliases` is true.
     * If unspecified, the range will use the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string tpu_ipv4_cidr_block = 13;</code>
     * @return string
     */
    public function getTpuIpv4CidrBlock()
    {
        return $this->tpu_ipv4_cidr_block;
    }

    /**
     * The IP address range of the Cloud TPUs in this cluster. If unspecified, a
     * range will be automatically chosen with the default size.
     * This field is only applicable when `use_ip_aliases` is true.
     * If unspecified, the range will use the default size.
     * Set to /netmask (e.g. `/14`) to have a range chosen with a specific
     * netmask.
     * Set to a
     * [CIDR](http://en.wikipedia.org/wiki/Classless_Inter-Domain_Routing)
     * notation (e.g. `10.96.0.0/14`) from the RFC-1918 private networks (e.g.
     * `10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`) to pick a specific range
     * to use.
     *
     * Generated from protobuf field <code>string tpu_ipv4_cidr_block = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setTpuIpv4CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->tpu_ipv4_cidr_block = $var;

        return $this;
    }

    /**
     * Whether routes will be used for pod IPs in the cluster.
     * This is used in conjunction with use_ip_aliases. It cannot be true if
     * use_ip_aliases is true. If both use_ip_aliases and use_routes are false,
     * then the server picks the default IP allocation mode
     *
     * Generated from protobuf field <code>bool use_routes = 15;</code>
     * @return bool
     */
    public function getUseRoutes()
    {
        return $this->use_routes;
    }

    /**
     * Whether routes will be used for pod IPs in the cluster.
     * This is used in conjunction with use_ip_aliases. It cannot be true if
     * use_ip_aliases is true. If both use_ip_aliases and use_routes are false,
     * then the server picks the default IP allocation mode
     *
     * Generated from protobuf field <code>bool use_routes = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->use_routes = $var;

        return $this;
    }

    /**
     * The IP stack type of the cluster
     *
     * Generated from protobuf field <code>.google.container.v1.StackType stack_type = 16;</code>
     * @return int
     */
    public function getStackType()
    {
        return $this->stack_type;
    }

    /**
     * The IP stack type of the cluster
     *
     * Generated from protobuf field <code>.google.container.v1.StackType stack_type = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setStackType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\StackType::class);
        $this->stack_type = $var;

        return $this;
    }

    /**
     * The ipv6 access type (internal or external) when create_subnetwork is true
     *
     * Generated from protobuf field <code>.google.container.v1.IPv6AccessType ipv6_access_type = 17;</code>
     * @return int
     */
    public function getIpv6AccessType()
    {
        return $this->ipv6_access_type;
    }

    /**
     * The ipv6 access type (internal or external) when create_subnetwork is true
     *
     * Generated from protobuf field <code>.google.container.v1.IPv6AccessType ipv6_access_type = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setIpv6AccessType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\IPv6AccessType::class);
        $this->ipv6_access_type = $var;

        return $this;
    }

    /**
     * [PRIVATE FIELD]
     * Pod CIDR size overprovisioning config for the cluster.
     * Pod CIDR size per node depends on max_pods_per_node. By default, the value
     * of max_pods_per_node is doubled and then rounded off to next power of 2 to
     * get the size of pod CIDR block per node.
     * Example: max_pods_per_node of 30 would result in 64 IPs (/26).
     * This config can disable the doubling of IPs (we still round off to next
     * power of 2)
     * Example: max_pods_per_node of 30 will result in 32 IPs (/27) when
     * overprovisioning is disabled.
     *
     * Generated from protobuf field <code>.google.container.v1.PodCIDROverprovisionConfig pod_cidr_overprovision_config = 21;</code>
     * @return \Google\Cloud\Container\V1\PodCIDROverprovisionConfig|null
     */
    public function getPodCidrOverprovisionConfig()
    {
        return $this->pod_cidr_overprovision_config;
    }

    public function hasPodCidrOverprovisionConfig()
    {
        return isset($this->pod_cidr_overprovision_config);
    }

    public function clearPodCidrOverprovisionConfig()
    {
        unset($this->pod_cidr_overprovision_config);
    }

    /**
     * [PRIVATE FIELD]
     * Pod CIDR size overprovisioning config for the cluster.
     * Pod CIDR size per node depends on max_pods_per_node. By default, the value
     * of max_pods_per_node is doubled and then rounded off to next power of 2 to
     * get the size of pod CIDR block per node.
     * Example: max_pods_per_node of 30 would result in 64 IPs (/26).
     * This config can disable the doubling of IPs (we still round off to next
     * power of 2)
     * Example: max_pods_per_node of 30 will result in 32 IPs (/27) when
     * overprovisioning is disabled.
     *
     * Generated from protobuf field <code>.google.container.v1.PodCIDROverprovisionConfig pod_cidr_overprovision_config = 21;</code>
     * @param \Google\Cloud\Container\V1\PodCIDROverprovisionConfig $var
     * @return $this
     */
    public function setPodCidrOverprovisionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\PodCIDROverprovisionConfig::class);
        $this->pod_cidr_overprovision_config = $var;

        return $this;
    }

    /**
     * Output only. [Output only] The subnet's IPv6 CIDR block used by nodes and
     * pods.
     *
     * Generated from protobuf field <code>string subnet_ipv6_cidr_block = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSubnetIpv6CidrBlock()
    {
        return $this->subnet_ipv6_cidr_block;
    }

    /**
     * Output only. [Output only] The subnet's IPv6 CIDR block used by nodes and
     * pods.
     *
     * Generated from protobuf field <code>string subnet_ipv6_cidr_block = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetIpv6CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnet_ipv6_cidr_block = $var;

        return $this;
    }

    /**
     * Output only. [Output only] The services IPv6 CIDR block for the cluster.
     *
     * Generated from protobuf field <code>string services_ipv6_cidr_block = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServicesIpv6CidrBlock()
    {
        return $this->services_ipv6_cidr_block;
    }

    /**
     * Output only. [Output only] The services IPv6 CIDR block for the cluster.
     *
     * Generated from protobuf field <code>string services_ipv6_cidr_block = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServicesIpv6CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->services_ipv6_cidr_block = $var;

        return $this;
    }

}

